<?php
    $page = array(
        'id' => '2013_04_femme_flats',
        'title' => 'A Little Spring in your Step',
        'class' => 'style',
        'content_css' => true
    );

    $doc_root = $_SERVER['DOCUMENT_ROOT'];
    include_once($doc_root . '/includes/header.php'); 
    include_once($doc_root . '/includes/functions.php'); 
?>
    <!-- Containers -->
    <div class='cols ac intro gutter_top'>

        <div class='title'><h1>A Little<br/><span>Spring</span><br/>in your<br/>Step</h1></div>
        <h4 class='light'>The ballet flat has become a fashion mainstay. Embrace it this spring with bright hues and gorgeous neutrals.</h4>
        <div class='photographer'>Chris Arace</div> 
    </div>
    
    
    <div id='group' class='cols product ac'>
    </div>

    <!-- Mila -->
    <div id='mila' class='cols product ac'>
        <div class='col col_4 content last'>
            <p class='big'>Get in on the cap toe trend with a fun, but sophisticated, touch of bright yellow.</p>
        </div>
    </div>
    <div class='callout_row'>
        <span><strong>Mila Cap Toe Leather Ballet Flats</strong> $148</span>
        <strong>Available at:</strong> J. Crew
    </div>
    </div>


    <!-- Quorra -->
    <div id='quorra' class='cols product ac'>
        <div class='col col_4 col_offset_8 content last'>
            <p class='big'>The new spring staple. Die-cut Italian leather ballets in a beautiful, go-with-everything metallic. Loving the lace up detail in the back, too.</p>
        </div>
    </div>
    <div class='callout_row'>
        <span><strong>Quorra Ballet Flats</strong> $148</span>
        <strong>Available at:</strong> J. Crew
    </div>
    </div>


    <!-- Manhattan -->
    <div id='manhattan' class='cols product ac'>
        <div class='col col_4 content last'>
            <p class='big'>This saturated shade of orange is right on trend for spring and summer.</p>
        </div>
    </div>
    <div class='callout_row'>
        <span><strong>Manhattan Ballet</strong> $158</span>
        <strong>Available at:</strong> Cole Haan
    </div>
    </div>


    <!-- Suede -->
    <div id='suede' class='cols product ac'>
        <div class='col col_4 col_offset_8 content last'>
            <p class='big'>This is how you wear suede in spring. Bonus: The true neutral color and toe shape will lengthen your legs for miles.</p>
        </div>
    </div>
    <div class='callout_row'>
        <span><strong>Suede Sidewalk Skimmer</strong> $88</span>
        <strong>Available at:</strong> Madewell
    </div>
    </div>


    <!-- Hole -->
    <div id='hole' class='cols product ac'>
        <div class='col col_4 content last'>
            <p class='big'>We’re envisioning these adorable flats with a colorful floral dress. Or slip them on with black skinny crops for a chic weekend look.</p>
        </div>
    </div>
    <div class='callout_row'>
        <span><strong>Hole Punch Sidewalk Skimmer</strong> $88</span>
        <strong>Available at:</strong> Madewell
    </div>
    </div>
    
    
    <!-- Novelty -->
    <div id='novelty' class='cols product ac'>
        <div class='col col_4 col_offset_8 content last'>
            <p class='big'>Pair it with neutrals for a pop of color, or match up the reds to go monochrome.</p>
        </div>
    </div>
    <div class='callout_row'>
        <span><strong>Novelty Ballet Flat</strong> $39.95</span>
        <strong>Available at:</strong> Gap
    </div>
    </div>
    
    
    <!-- Kors -->
    <div id='kors' class='cols product ac'>
        <div class='col col_4 content last'>
            <p class='big'>Who says spring has to only be about color? Ground your look in black leather with hot gold studs.</p>
        </div>
    </div>
    <div class='callout_row'>
        <span><strong>MICHAEL Michael Kors Aria Stud-Toe Ballerina Flat</strong> $165</span>
        <strong>Available at:</strong> Nordstrom        
    </div>
    </div>
    
    
    <?php fin($page['id']); ?>    
        
<?php
    include_once($doc_root . '/includes/footer.php');
?>