<?php
    $page = array(
        'id' => '2013_04_homme_jackets',
        'title' => 'The Spring Jacket',
        'class' => 'style',
        'content_css' => true
    );

    $doc_root = $_SERVER['DOCUMENT_ROOT'];
    include_once($doc_root . '/includes/header.php'); 
    include_once($doc_root . '/includes/functions.php'); 
?>
    <!-- Containers -->
    <div class='cols ac intro gutter_top'>

        <div class='title'><h1>The<br/>Spring<br/>Jacket</h1></div>
        <div class='ac'><p class='col col_6 col_offset_3 last'>A hoodie is fine for some occasions, but more often than not, it’s… not. Jackets shouldn’t be an after thought. Here are four styles to help you maintain your cool this season.</p></div>
        <div class='photographer'>Chris Arace</div> 
    </div>
    
    

    <!-- Banana -->
    <div id='banana' class='cols product ac'>
        <div class='col col_4 content last'>
            <p class='big'>Everyone knows the traditional approach to the trench. Forgo the old-school reporter look, and mix it up with some denim and fresh high tops instead.</p>
        </div>
    </div>
    <div class='callout_row'>
        <span><strong>Essential Belted Trench</strong> $225</span>
        <strong>Available at:</strong> Banana Republic
    </div>
    </div>


    <!-- Gap -->
    <div id='gap' class='cols product ac'>
        <div class='col col_4 col_offset_8 content last'>
            <p class='big'>Your weekend look is about to get 10 times more put together. This one is your go-to, “throw something on” jacket.</p>
        </div>
    </div>
    <div class='callout_row'>
        <span><strong>Four-Pocket Fatigue Jacket</strong> $99</span>
        <strong>Available at:</strong> Gap
    </div>
    </div>


    <!-- J Crew -->
    <div id='jcrew' class='cols product ac'>
        <div class='col col_4 content last'>
            <p class='big'>Utility looks good on you. Especially in green. This jacket sports hidden pockets, zippers and closures, plus the hood makes it good for less-than-desirable weather.</p>
        </div>
    </div>
    <div class='callout_row'>
        <span><strong>Ghille Jacket</strong> $228</span>
        <strong>Available at:</strong> J Crew
    </div>
    </div>


    <!-- Levi -->
    <div id='levi' class='cols product ac'>
        <div class='col col_4 col_offset_8 content last'>
            <p class='big'>It’s back. Thankfully, this time it features a more tailored shape. You can wear it with almost anything, but your best bet is with a pair of chinos and a <br/>casual tee.</p>
        </div>
    </div>
    <div class='callout_row'>
        <span><strong>Slim-Fit Trucker</strong> $88</span>
        <strong>Available at:</strong> Levi
    </div>
    </div>


    
    
    <?php fin($page['id']); ?>    
        
<?php
    include_once($doc_root . '/includes/footer.php');
?>