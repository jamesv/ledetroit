<?php
    $page = array(
        'id' => '2013_05_femme_dresses',
        'title' => 'Best Dressed',
        'class' => 'style',
        'content_css' => true
    );

    $doc_root = $_SERVER['DOCUMENT_ROOT'];
    include_once($doc_root . '/includes/header.php'); 
    include_once($doc_root . '/includes/functions.php'); 
?>
    <!-- Containers -->
    <div class='cols ac intro gutter_top'>

        <div class='title'><h1>Best<br/>Dressed</h1></div>
        <h4 class='col col_10 col_offset_1 last light'>The top warm-weather summoning looks that make the season’s trends feel effortlessly wearable</h4>
        <div class='ac'><p class='col col_6 col_offset_3 last'>Spring: when mild temps and sunshine signal the return of your tights to the top drawer and bright nail colors to your toes. Evidently, no one told Mother Nature that dresses are in, in a big way right now. But now that it’s May, we’re baring our knees whether the weather cooperates or not. Here are eight ways to work the trend in real life.</p></div>
        <div class='photographer'>Chris Arace</div> 
    </div>
    
    

    <!-- Florals -->
    <div id='florals' class='cols product ac'>
        <div class='col col_6 col_offset_6 content last'>
            <h2>Florals</h2>
        </div>
    </div>
    <div class='callout_row'>
        <span><strong>Wallpaper Pleated Dress by Ted Baker London</strong> $295</span>
        <strong>Available at:</strong> Nordstrom
    </div>
    </div>
    

    <!-- Lace -->
    <div id='lace' class='cols product ac'>
        <div class='col col_6 content last'>
            <h2>Lace</h2>
        </div>
    </div>
    <div class='callout_row'>
        <span><strong>Augustine Lace Dress</strong> $269</span>
        <strong>Available at:</strong> Club Monaco
    </div>
    </div>
    
    
    <!-- Bold Prints -->
    <div id='bold_prints' class='cols product ac'>
        <div class='col col_6 col_offset_6 content last'>
            <h2>Bold Prints</h2>
        </div>
    </div>
    <div class='callout_row'>
        <span><strong>Silk Dress by Milly</strong> $395</span>
        <strong>Available at:</strong> Nordstrom
    </div>
    </div>
    
    <!-- Graphic Black White -->
    <div id='graphic_black_white' class='cols product ac'>
        <div class='col col_6 content last'>
            <h2>Graphic<br/>Black<br/>White</h2>
        </div>
    </div>
    <div class='callout_row'>
        <span><strong>Contrast Printed Dress</strong> $98</span>
        <strong>Available at:</strong> Armani Exchange
    </div>
    </div>
    
    
    <!-- Cool Blues -->
    <div id='cool_blues' class='cols product ac'>
        <div class='col col_6 col_offset_6 content last'>
            <h2>Cool Blues</h2>
        </div>
    </div>
    <div class='callout_row'>
        <span><strong>Chambray Shirt Dress by Cloth & Stone</strong> $148</span>
        <strong>Available at:</strong> Anthropologie
    </div>
    </div>
    
    <!-- Stripes -->
    <div id='stripes' class='cols product ac'>
        <div class='col col_6 content last'>
            <h2>Stripes</h2>
        </div>
    </div>
    <div class='callout_row'>
        <span><strong>Striped Knit Dress</strong> $79.50</span>
        <strong>Available at:</strong> Banana Republic
    </div>
    </div>


    <!-- Cool Blues B -->
    <div id='cool_blues_b' class='cols product ac'>
        <div class='col col_6 col_offset_6 content last'>
            <h2>Cool Blues</h2>
        </div>
    </div>
    <div class='callout_row'>
        <span><strong>Taleen Dress</strong> $165</span>
        <strong>Available at:</strong> Aritzia
    </div>
    </div>

    <!-- Peplum -->
    <div id='peplum' class='cols product ac'>
        <div class='col col_6 content last'>
            <h2>Peplum</h2>
        </div>
    </div>
    <div class='callout_row'>
        <span><strong>Lola Peplum Dress</strong> $140</span>
        <strong>Available at:</strong> Banana Republic
    </div>
    </div>



    
    
    <?php fin($page['id']); ?>    
        
<?php
    include_once($doc_root . '/includes/footer.php');
?>