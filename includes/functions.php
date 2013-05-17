<?php
function array_to_object($array) {
  $obj = new stdClass;
  foreach($array as $k => $v) {
     if(is_array($v)) {
        $obj->{$k} = array_to_object($v); //RECURSION
     } else {
        $obj->{$k} = $v;
     }
  }
  return $obj;
}


$articles_global_json = file_get_contents($doc_root .'/includes/articles_global.json');
$articles_2013_02_json = file_get_contents($doc_root .'/includes/articles_2013_02.json');
$articles_2013_04_json = file_get_contents($doc_root .'/includes/articles_2013_04.json');
$articles_2013_05_json = file_get_contents($doc_root .'/includes/articles_2013_05.json');
$GLOBALS['decoded_articles'] = array_merge_recursive(
    json_decode($articles_global_json, true),
    json_decode($articles_2013_02_json, true),
    json_decode($articles_2013_04_json, true),
    json_decode($articles_2013_05_json, true)
);

$GLOBALS['decoded_articles'] = array_to_object($GLOBALS['decoded_articles']);

$doc_root = $_SERVER['DOCUMENT_ROOT'];
include_once($doc_root . '/includes/config.php'); 



$GLOBALS['bon'] = false;//array();



function bonGet($id) {

    // Add checker for updating list with missing elements
    if(!$GLOBALS['bon']) {
        
        $con=mysqli_connect($GLOBALS['db_host'], $GLOBALS['db_user'], $GLOBALS['db_pass'], $GLOBALS['db_table']);
        if (mysqli_connect_errno($con)) { echo "Failed to connect to MySQL: " . mysqli_connect_error(); }
    
    
        if(is_array($id)) {
            $ids = 'IN ("' . implode('", "', $id) . '")';
            //$bon = $id;
            //$bon = array_combine($ids,array(0,0));
            $bon = array_combine($id,array_fill(0,count($id),0));
        } else {
            $ids = '= "'.$id.'"';
            $bon = array($id => 0);
        }
    
        $result = mysqli_query($con,'SELECT * FROM `bon` WHERE `page_id` ' . $ids . ';');
    
        while($row = mysqli_fetch_array($result)) {
            $bon[$row['page_id']] += 1;
        }


        $GLOBALS['bon'] = $bon;
    }
    
    $bon = $GLOBALS['bon'];
    return true;
}

function bonDraw($id, $omit_outer=true) {
    
    // Add checker for updating list with missing elements
    if(!$GLOBALS['bon']) {
        bonGet($id);
    }

    $bon = "<a href='javascript:void(0);' onClick='bon(\"".$id."\");' class='bon " . (($GLOBALS['bon'][$id] != 0) ? 'active':'inactive') . "'>" . $GLOBALS['bon'][$id] . "</a>";
    return ($omit_outer) ? "<span id='bon_".$id."'>".$bon."</span>" : $bon; 
}


function bonSet($id) {
    $ip = $_SERVER['REMOTE_ADDR'];  
    
    $con=mysqli_connect($GLOBALS['db_host'], $GLOBALS['db_user'], $GLOBALS['db_pass'], $GLOBALS['db_table']);
    if (mysqli_connect_errno($con)) { echo "Failed to connect to MySQL: " . mysqli_connect_error(); }
    
    $save = mysqli_query($con, 'INSERT INTO  `bon` (  `page_id` ,  `ip` )  VALUES ( \''.$id.'\',   \''.$ip.'\');');
    
    return bonDraw($id, true);
}


function drawArticlesGrid($articles, $print=true) {
    $NUM_COLS = 12;
    $cols = 0;
    $grid = "";
    foreach($articles as $value) {
        $cols += $value[1];
        $last = '';
        if($cols >= $NUM_COLS) {
            $cols = 0;
            $last = ' last';    
        }
        $article = $GLOBALS['decoded_articles']->$value[0];
        $grid .= "<div class='col col_".$value[1]." tile".$last."' style='background-image: url(/img/content/tiles/".$value[0]."_".$value[1].".jpg);'>";
        $grid .= "  <a href='".$article->url."'>";

        if(!array_key_exists('no_caption', $article)) {
        $grid .= "      <div class='caption ac c'>";
        $grid .= "          <h3>".$article->name."</h3>";
        $grid .= "          <h6>".$article->cat."</h6>";
        $grid .= "      </div>";
        }

        $grid .= "      <div class='detail c'>";
        $grid .= "          <h3>".$article->name."</h3>";
        $grid .= "          <p>".$article->sub."</p>";
        $grid .= "          <h6>".$article->cat."</h6>";
        $grid .= "          <div class='cta'>View<img src='/img/ui_cta_arrow.png' /></div>";
        $grid .= "      </div>";
                
        $grid .= "    </a>";
        $grid .= "</div>";
    };
    if($print) {
        print $grid;    
    } else {
        return $grid;
    }
    
}

function drawGallery($items, $link, $id, $close_btn=false, $lightbox=false) {
    $masthead = "";
    $timeout = ($link) ? 8000:0;
    
    if($close_btn){
            $masthead .= "<div id='".$id."_rotator_container' class='rotator_".(($lightbox) ? 'lightbox':'inline')." hide'><div class='rotator_wrapper'>\n";
            $masthead .= "<div id='".$id."_rotator_close' class='rotator_close btn'>\n";
            $masthead .= "    <a href='javascript:void(0);' onClick='galleryShowHide(\"".$id."_rotator_container\");' class='close'>x</a>\n";
            $masthead .= "</div>";
    }
    
    if(!$lightbox){
    $masthead .= "<div id='".$id."_rotator_nav' class='rotator_nav'><ul></ul></div>\n";
    }
    if(count($items) > 1) {
    $masthead .= "<div id='".$id."_rotator_prev_next' class='rotator_prev_next'>\n";
    $masthead .= "    <a href='#' class='prev btn'>&lt;</a>\n";
    $masthead .= "    <a href='#' class='next btn'>&gt;</a>\n";
    $masthead .= "</div>\n";
    }
    $masthead .= "<div id='".$id."_rotator' class='masthead_items'>\n";
    

    foreach ($items as $item) {
    $masthead .= "    <div class='rotator_item' style='background-image: url(".$item['photo'].");'>\n";
        if($link){
        $masthead .= "        <a href='".$item[1]."'>\n";
        $masthead .= "        <div class='".$id."_caption'>\n";
        $masthead .= "            <h2>".$item[2]."</h2>\n";
        $masthead .= "            <h4>".$item[3]."</h4>\n";
        $masthead .= "        </div>\n";
        $masthead .= "        </a>\n";
        }
    $masthead .= "    </div>\n";
    }

    $masthead .= "</div>\n";
    
    if($close_btn){
        $masthead .= "</div></div>\n";
    }
    
    $masthead .= "<script type='text/javascript'>\n";
    $masthead .= "    $('#".$id."_rotator') \n";
    $masthead .= "    .cycle({ \n";
    $masthead .= "        next: '#".$id."_rotator_prev_next .next',\n";
    $masthead .= "        prev: '#".$id."_rotator_prev_next .prev',\n";
    if(!$lightbox){
    $masthead .= "        pager:  '#".$id."_rotator_nav ul',\n";
    $masthead .= "        pagerAnchorBuilder: function(idx, slide) { \n";
    $masthead .= "                return '<li><a href=\"#\">&#9899;</a></li>'; \n";
    $masthead .= "        },\n";
    }
    $masthead .= "        fx:     'scrollHorz', \n";
    $masthead .= "        easing: 'easeOutQuad', \n";
    $masthead .= "        speed:  600, \n";
    $masthead .= "        timeout: ".$timeout."\n";
    $masthead .= "    });\n";
    $masthead .= "</script>\n";
    
    print $masthead;
    
}

function drawGalleryThumbs($items, $id) {
    $thumbs =  "";
    $thumbs .= "<div class='cols col_grid thumbnails ac'>\n";
    $num_in_row = 0;
    foreach ($items as $key => $value) {
        $num_in_row++;
        $thumbs .= "<div class='col col_4 tile";
        if($num_in_row >= 3){
            $thumbs .= " last";
            $num_in_row = 0;
        }
        $thumbs .= "' style='background-image: url(".$value['thumb'].");'><a href='javascript:void(0);' onClick='galleryShowThumbnail(\"".$id."\", ".$key.");' >";
        $thumbs .= "</a>\n";
        $thumbs .= "</div>\n";
    }
    $thumbs .= "</div>";
    print $thumbs;
}

function drawGalleryLink($id) {
    print "<div class='c gallery_button'><a href='javascript:void(0);' onClick='galleryShowHide(\"".$id."_rotator_container\");' ><img src='/img/ui_open_gallery.gif' />Click for<br/>more images</a></div>";
}

function drawMasthead($items, $link=true, $dir='mastheads') {
    foreach ($items as &$item) {
        $item['photo']  = "/img/content/".$dir."/".$item[0];
    }
        
    $id = 'masthead';
    drawGallery($items, $link, $id);
}



function fin($id, $light=false) {
    
    $fin = "";
    
    $fin .= "<div id='fin' class='cols'>";
    if(!$light) { $fin .= "    <h1>Fin</h1>";}
    $fin .= "    <div id='bon'>Bon! " . bonDraw($id) . "</div>";
    $fin .= "    <div class='share'>";
    $fin .= "        <div class='fb-like' data-send='false' data-layout='button_count' data-width='450' data-show-faces='false'></div>";
    $fin .= "        <a href='https://twitter.com/share' class='twitter-share-button' data-via='le detroit' data-lang='en'>Tweet</a>";
    $fin .= "    </div>";
    $fin .= "</div>";
    
    if(!$light) {
    $fin .= "<div class='cols col_grid ac'>";
    // $fin .= "    <div class='col col_12 last'>";
    // $fin .= "        <div class='fb-comments' href='".$_SERVER["REQUEST_URI"]."' data-width='980' data-num-posts='2' data-colorscheme='light'></div>";
    // $fin .= "    </div>";
    
    
    
    if($GLOBALS['related_articles']) {
        $prev_article = $GLOBALS['decoded_articles']->$GLOBALS['related_articles'][0];
        $next_article = $GLOBALS['decoded_articles']->$GLOBALS['related_articles'][1];
        
        $fin .= "<div class='related'>";
        $fin .= "    <div class='col col_6'>";
        $fin .= "        <a href='".$prev_article->url."' class='btn prev'>&lt;</a>";
        $fin .= "        <span><strong>Previous:</strong> ".$prev_article->name."</span>";
        $fin .= "    </div>";
        $fin .= "    <div class='col col_6 last r'>";
        $fin .= "        <span><strong>Next:</strong> ".$next_article->name."</span>";
        $fin .= "        <a href='".$next_article->url."' class='btn next'>&gt;</a>";
        $fin .= "    </div>";
        $fin .= "</div>";
    }
    
    $fin .= "</div>";
    
    $featured_articles_wide = array(
        array('2013_05_life_innerstate',8),
        array('2013_05_life_tacos',8),
        array('2013_05_femme_emerald',8),
        array('2013_04_music_tunde',8)
    );
    $featured_articles_narrow = array(
        array('2013_05_homme_shoes',4),
        array('2013_05_homme_ties',4),
        array('2013_05_femme_dresses',4)

    );    
    $featured_articles = array($featured_articles_wide[array_rand($featured_articles_wide)], $featured_articles_narrow[array_rand($featured_articles_narrow)]);
    
    $fin .= "<div class='featured'>";
    $fin .= "<div class='cols col_grid ac'>";
    $fin .= "<div class='col col_12 last'><strong class='inset_title'>Featured</strong></div>";
    $fin .= drawArticlesGrid($featured_articles, false);
    $fin .= "</div>";
    $fin .= "</div>";
    }
    
    print $fin;
}


?>