<?php
    $page = array(
        'id' => '2013_02_femme_look_of_love',
        'title' => 'The Look of Love',
        'class' => 'style',
        'content_css' => true
    );

    $doc_root = $_SERVER['DOCUMENT_ROOT'];
    include_once($doc_root . '/includes/header.php'); 
    include_once($doc_root . '/includes/functions.php'); 
?>
    <!-- Containers -->
    <div class='cols ac intro gutter_top'>

        <div class='title'><h1>The Look of Love</h1></div>
        <h4>Not sure what to wear on date night? Look no further.</h4>
        <div class='ac'><p class='col col_6 col_offset_3 last'>Experts everywhere agree: there’s nothing sexier than confidence. That’s all well and good, but come date night, a girl still needs to find something to wear. We rounded up three pretty, chic, and—dare we say it—comfortable looks that will have you feeling great no matter what the plans may be.</p></div>
        <div class='credits'>
            <strong>Photographer</strong> Chris Arace
            <strong>Styling</strong> Michele Swanson
            <strong>Hair</strong> Diane Solomon
            <strong>Makeup</strong> Marguerite Adragna
        </div> 

    </div>

    <!-- Wine and Dine -->
    <div class='cols product ac'>
        <div id='wine'>
            <div class='col col_5 col_offset_7 last'>
                <h3 class='light'>Wine and Dine</h3>
            </div>
        </div>
    </div>
    <div class='callout_row'>
        <span><strong>Lace Shift Dress</strong> Lush</span>
        <span><strong>Tights</strong> Hue</span>
        <span><strong>Mint Envelope Clutch</strong> LuLu</span>
        <span><strong>All Available at:</strong> Nordstrom</span>
    </div>
    
    
    <!-- Skate -->
    <div class='cols product ac'>
        <div id='skate'>
            <div class='col col_5 last'>
                <h3 class='light'>Skate Date at Campus Martius</h3>
            </div>
        </div>
    </div>
    <div class='callout_row'>
        <span><strong>Dress</strong> vintage</span>
        <span><strong>Fur Vest</strong> Aritzia</span>
        <span><strong>Sweater Tights</strong> Forever 21</span>
        <span><strong>Scarf</strong> Forever 21</span>
        <span><strong>Boots, Steve Madden</strong> Nordstrom</span>
        <span><strong>Gucci Clutch</strong> Vintage</span>
    </div>


    <!-- Movies -->
    <div class='cols product ac'>
        <div id='movies'>
            <div class='col col_5 col_offset_7 last'>
                <h3 class='light'>Movies at Home</h3>
            </div>
        </div>
    </div>
    <div class='callout_row'>
        <span><strong>Oversized Circle Pullover</strong> American Apparel</span>
        <span><strong>Gold Initial Necklace</strong> Amelia Rose Design</span>
    </div>
    
    <?php $GLOBALS['related_articles'] = array('2013_02_femme_rouge','2013_02_femme_perfume'); ?>
    
    <?php fin($page['id']); ?>

        
<?php
    include_once($doc_root . '/includes/footer.php');
?>\n