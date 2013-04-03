<?php
    $page = array(
        'id' => '2013_02_homme_layered_up',
        'title' => 'Layered Up',
        'class' => 'style',
        'content_css' => true
    );

    $doc_root = $_SERVER['DOCUMENT_ROOT'];
    include_once($doc_root . '/includes/header.php'); 
    include_once($doc_root . '/includes/functions.php'); 
?>
    <!-- Containers -->
    <div class='cols ac intro gutter_top'>
        <div class='title'><h1>layered Up</h1></div>
        <h4>Keep your look versatile without losing the fit</h4>
        <div class='ac'><p class='col col_6 col_offset_3 last'>How to manage the ever-changing Michigan weather? With thin, layerable pieces that can be worn through the rest of winter and well into spring.</p></div>
        <div class='credits'>
            <strong>Photographer</strong> Chris Arace
            <strong>Styling</strong> Michele Swanson
        </div> 
        
    </div>
    

    <div id='main_content' class='cols product ac'>
        <div class='col col_4 content'>
            <p id='callout_1' class='big'><strong>Cap off the look</strong> with a vintage newsboy.</p>
            <p id='callout_3' class='big'><strong>Lose the puffy coat</strong> and go for something without so much bulk. A vest like this can be worn over thin sweaters and shirts, or grab a thinner version to go under your favorite blazer.</p>
            <p id='callout_5' class='big'><strong>A fresh take</strong> on the desert boot offers the flexibility to wear it with just about anything.</p>
        </div>
        <div class='col col_4 col_offset_4 content last'>
            <p id='callout_2' class='big'><strong>Sweaters like this look good</strong> on their own, and even better under a vest. Important: look for sweaters that are lean but still have warmth.</p>
            <p id='callout_4' class='big'><strong>For the most utility,</strong> get a classic straight cut in a wash that can be dressed up or down.</p>
        </div>
    </div>
    <div class='callout_row'>
        <span><strong>Boulder Down Vest</strong> $148</span>
        <span><strong>484 Jean</strong> $98</span>
        <span><strong>MacAlister Field Boot</strong> $198</span>
        <strong>Available at:</strong> J. Crew
        
        <span class='second'><strong>Shawl Pullover</strong> $225</span>
        <strong>Available at:</strong> Ralph Lauren
    </div>
    </div>
    
    <?php $GLOBALS['related_articles'] = array('2013_02_homme_wool','2013_02_homme_denim'); ?>
    
    <?php fin($page['id']); ?>    
        
<?php
    include_once($doc_root . '/includes/footer.php');
?>