<?php
    $page = array(
        'id' => '2013_04_the_handgrenades_gallery',
        'title' => 'The Handgrenades',
        'class' => 'life'
    );

    $doc_root = $_SERVER['DOCUMENT_ROOT'];
    include_once($doc_root . '/includes/header.php');
    include_once($doc_root . '/includes/functions.php'); 
?>
        <!-- Containers -->
        <div class='cols ac intro gutter_top'>
            <div class='title' style="background: url('/img/content/2013/04/music/gallery/handgrenades_0.jpg') no-repeat bottom center;"><h1>The Handgrenades</h1></div>
        </div>
        
        <?php
            $handgrenades_photos = array();
            for($i = 1; $i <= 12; $i++) {
                array_push($handgrenades_photos, array('photo'=>'/img/content/2013/04/music/gallery/handgrenades_'.$i.'.jpg','thumb'=>'/img/content/2013/04/music/gallery/handgrenades_thumb_'.$i.'.jpg'));
            }
            drawGallery($handgrenades_photos, false, 'handgrenades', true, true);
        ?>

        
        <?php
            drawGalleryThumbs($handgrenades_photos, 'handgrenades');
        ?>
        
        <?php fin($page['id']); ?>

        
<?php
    include_once($doc_root . '/includes/footer.php');
?>