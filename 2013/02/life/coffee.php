<?php
    $page = array(
        'id' => '2013_02_coffee',
        'title' => 'Coffee',
        'class' => 'life',
        'content_css' => true
    );

    $doc_root = $_SERVER['DOCUMENT_ROOT'];
    include_once($doc_root . '/includes/header.php'); 
    include_once($doc_root . '/includes/functions.php'); 
?>
        <!-- Containers -->
        <div class='cols ac intro gutter_top'>

            <div class='title'><h1>The Daily Grind</h1></div>
            <h4>The perfect cup of coffee for any day of the week</h4>
            <div class='ac'><p class='col col_6 col_offset_3 last'>Whether you drink it to wake up, or simply love the taste, sometimes a cup of coffee seems to be a downright requirement to carry on with the day. As such, this fine city has welcomed the recent wave of quality-conscious coffee roasters with wide-open arms (and eyes). Luckily for all of us, no matter the day or time, there’s always one ready to serve up a delicious pick me up.</p></div>
            <div class='photographer'>Chris Arace</div> 

        </div>
        
        <!-- Great Lakes Cofee -->
        <div class='cols product ac'>
            <h2>Great Lakes Coffee</h2>
            <div id='greatlakes' class='plate'>
            </div>
            <div class='col col_6 col_offset_3 desc_notes last'>
                <p><strong>The coffee bar for that late evening fix.</strong> 
                The music in this lofty space has just as much flavor as the menu—which includes a full bar. If you decide against one of their delicious craft cocktails, the Sexy Mexican is highly recommended.</p>
            </div>
            <div class='col col_2 col_offset_5 last section_sep'></div>
        </div>

        
        <!-- Astro -->
        <div class='cols product ac'>
            <h2>Astro Coffee</h2>
            <div id='astro' class='plate'>
            </div>
            <div class='col col_6 col_offset_3 desc_notes last'>
                <p><strong>Attention Cranky Pants:</strong> 
                Astro Coffee is sure to have something to bring out your inner morning person. So before you grace the office with your usual not-so-charming presence, put the phone away and take a few minutes to sit, enjoy an Espresso, then a pastry, and then breathe.</p>
            </div>
            <div class='col col_2 col_offset_5 last section_sep'></div>
        </div>

        
        <!-- Cafe Con Leche -->
        <div class='cols product ac'>
            <h2>Cafe Con Leche</h2>
            <div id='conleche' class='plate'>
            </div>
            <div class='col col_6 col_offset_3 desc_notes last'>
                <p><strong>The café getaway</strong> 
                for those who like to depart from the hustle and bustle. Slightly off the beaten path, Café Con Leche offers yet another reason to venture down into the heart of Mexican Town. We recommend you cozy up to a Café Cubano.</p>
            </div>
            <div class='col col_2 col_offset_5 last section_sep'></div>
        </div>
        
        <!-- Germack -->
        <div class='cols product ac'>
            <h2>Germack Coffee Roasting Co.</h2>
            <div id='germack' class='plate'>
            </div>
            <div class='col col_6 col_offset_3 desc_notes last'>
                <p><strong>Any of these tasty bevs,</strong> 
                made from raw beans roasted on site, will surely get you ready for an early Saturday morning trek through Eastern Market. After all, if you’re going to negotiate prices for organic tomatoes, you need to be on your game.</p>
            </div>
            <div class='col col_2 col_offset_5 last section_sep'></div>
        </div>
        

        <?php fin($page['id']); ?>    
        

        
        
        
        
        
<?php
    include_once($doc_root . '/includes/footer.php');
?>