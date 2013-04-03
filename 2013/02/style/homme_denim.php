<?php
    $page = array(
        'id' => '2013_02_homme_denim',
        'title' => 'Winter Blues',
        'class' => 'style',
        'content_css' => true
    );

    $doc_root = $_SERVER['DOCUMENT_ROOT'];
    include_once($doc_root . '/includes/header.php'); 
    include_once($doc_root . '/includes/functions.php'); 
?>
    <!-- Containers -->
    <div class='cols ac intro gutter_top'>

        <div class='title'><h1>Winter Blues</h1></div>
        <h4>It’s time to get out of your denim funk</h4>
        <div class='ac'><p class='col col_6 col_offset_3 last'>The quintessential staple of the American man’s wardrobe, we rely on our denim more than any other article of clothing. But wearing the same old style can get pretty stale. Lucky for you, we have some suggestions to help you switch up your denim game.</p></div>
        <div class='photographer'>Chris Arace</div> 
    </div>
    

    <!-- Detroit Denim -->
    <div id='detroit' class='cols product ac'>
        <?php
            $jcrew_items = array(
                array('photo'=>'/img/content/2013/02/style/gallery/denim_01_1.jpg'),
                array('photo'=>'/img/content/2013/02/style/gallery/denim_01_2.jpg'),
                array('photo'=>'/img/content/2013/02/style/gallery/denim_01_3.jpg')
                );
            drawGallery($jcrew_items, false, 'denim_detroit', true);
        ?>
        <div class='item col col_8'>
        </div>
        <div class='col col_4 content last'>
            <h6>Detroit Denim Co.</h6>
            <p><strong>Heritage Jean</strong></p>
            <p>If you don’t know about Detroit Denim Co., then pull up a chair and listen up. These are hand-made jeans. That’s right. Hand. Made. In a small factory in Detroit. They’re made to be lived in, crafted from selvedged denim and finished with copper rivets and buttons.</p>
            <p>Visit their site for the full story. It’s worth the read.</p>
            
            <?php
                drawGalleryLink('denim_detroit');
            ?>
        </div>
    </div>
    <div class='callout_row'>
        <span><strong>Detroit Denim Co.</strong> $250</span>
        <strong>Available at:</strong> Detroit Mercantile Co.
    </div>
    </div>
    
    <!-- JCrew 484 -->
    <div id='jcrew484' class='cols product ac'>
        <?php
            $jcrew_items = array(
                array('photo'=>'/img/content/2013/02/style/gallery/denim_02_1.jpg'),
                array('photo'=>'/img/content/2013/02/style/gallery/denim_02_2.jpg'),
                array('photo'=>'/img/content/2013/02/style/gallery/denim_02_3.jpg')
                );
            drawGallery($jcrew_items, false, 'denim_jcrew', true);
        ?>
        <div class='col col_4 content last'>
            <h6>484 Slim</h6>
            <p><strong>484 Jean in Resin Crinkle Wash</strong></p>
            <p>If you’re looking for comfort without summoning visions of your uncle, go for the 484. The slim fit is touted by J. Crew as “the new standard in denim,” and they just might be right. A great dark wash and “crinkled” treatment mean you can dress them up or down. This is your new quick fix jean.</p>
            
            <?php
                drawGalleryLink('denim_jcrew');
            ?>
                
        </div>
        <div class='item col col_8'>
        </div>
    </div>
    <div class='callout_row'>
        <span><strong>484 Jean</strong> $98</span>
        <strong>Available at:</strong> J. Crew
    </div>
    </div>
    
    
    <!-- APC -->
    <div id='apc' class='cols product ac'>
        <?php
            $jcrew_items = array(
                array('photo'=>'/img/content/2013/02/style/gallery/denim_03_1.jpg'),
                array('photo'=>'/img/content/2013/02/style/gallery/denim_03_2.jpg'),
                array('photo'=>'/img/content/2013/02/style/gallery/denim_03_3.jpg')
                );
            drawGallery($jcrew_items, false, 'denim_apc', true);
        ?>
        <div class='item col col_8'>
        </div>
        <div class='col col_4 content last'>
            <h6>A.P.C.</h6>
            <p><strong>Petit Standard</strong></p>
            <p>The jean that gives new meaning to the concept of a perfect fit: they’re made from raw, selvedged denim that shapes to your body over time. Durable and versatile, these will quickly become a wardrobe staple.</p>
            
            <?php
                drawGalleryLink('denim_apc');
            ?>
        </div>
    </div>
    <div class='callout_row'>
        <span><strong>A.P.C.</strong> $185</span>
        <strong>Available at:</strong> Complex
    </div>
    </div>
    
    <?php $GLOBALS['related_articles'] = array('2013_02_homme_layered_up','2013_02_homme_wool'); ?>
    
    <?php fin($page['id']); ?>
    
        
<?php
    include_once($doc_root . '/includes/footer.php');
?>