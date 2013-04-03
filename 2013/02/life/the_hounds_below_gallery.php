<?php
    $page = array(
        'id' => '2013_02_the_hounds_below_gallery',
        'title' => 'The Hounds Below',
        'class' => 'life'
    );

    $doc_root = $_SERVER['DOCUMENT_ROOT'];
    include_once($doc_root . '/includes/header.php');
    include_once($doc_root . '/includes/functions.php'); 
?>
        <!-- Containers -->
        <div class='cols ac intro gutter_top'>
            <div class='title' style="background: url('/img/content/2013/02/life/the_hounds_below_gallery_intro.jpg') no-repeat bottom center;"><h1>The Hounds Below</h1></div>
        </div>
        
        <?php
            $hounds_photos = array();
            for($i = 1; $i <= 9; $i++) {
                array_push($hounds_photos, array('photo'=>'/img/content/2013/02/music/gallery/hounds_below_'.$i.'.jpg','thumb'=>'/img/content/2013/02/music/gallery/hounds_below_thumb_'.$i.'.jpg'));
            }
            drawGallery($hounds_photos, false, 'the_hounds_below', true, true);
        ?>

        
        <?php
            drawGalleryThumbs($hounds_photos, 'the_hounds_below');
        ?>
        
        <?php fin($page['id']); ?>

        
<?php
    include_once($doc_root . '/includes/footer.php');
?>