<?php
    $page = array(
        'id' => '2013_02_femme_rouge',
        'title' => 'Le Rouge',
        'class' => 'style dark',
        'content_css' => true
    );

    $doc_root = $_SERVER['DOCUMENT_ROOT'];
    include_once($doc_root . '/includes/header.php'); 
    include_once($doc_root . '/includes/functions.php'); 
?>
        <!-- Containers -->
        <div class='cols ac intro gutter_top'>

            <div class='title'><h1>Le Rouge</h1></div>
            <h4>The classic red manicure has evolved</h4>
            <div class='ac'><p class='col col_6 col_offset_3 last'>Once considered a symbol of power, red nail color still commands plenty of attention these days. Lucky for us, the variation of shades has grown exponentially since Cleopatra donned her ruby red digits. Here are a few of our favorite spins on the classic red nail polish.</p></div>
            <div class='photographer'>Chris Arace</div> 

        </div>
        
        <!-- Chanel -->
        <div class='cols product ac'>
            <div id='chanel'>
                <div class='col col_4 col_offset_7 last'>
                    <h3>Chanel</h3>
                </div>
            </div>
            <div class='col col_6 col_offset_3 desc last'>
                <p><strong>Chanel le Vernis Nail Colour | Vamp</strong></p>
                <p>This deep red hue was sent down the runway in 1994 and women have been enamored ever since. It might be pricey, but it’s not without reason; the intensely rich formula applies like a dream and lasts like one too.</p>
            </div>
        </div>
        <div class='callout_row'>
            <strong>Available at:</strong> <a href='http://www.neimanmarcus.com/' target='_blank'>Neiman Marcus</a>
        </div>
        
        
        <!-- Sephora X -->
        <div class='cols product ac'>
            <div id='sephora'>
                <div class='col col_4 col_offset_6 last'>
                    <h3>Sephora X</h3>
                </div>
            </div>
            <div class='col col_6 col_offset_3 desc last'>
                <p><strong>Sephora X | Privileged</strong></p>
                <p>Bold color with opaque coverage, high shine and a very quick dry time. A formula that can give you everything you want, in a wine-burgundy-pearlescent-shimmer that, despite its description, looks very chic. This stunner is from the new Sephora X line—a must try for all lacquer fanatics.</p>
            </div>
        </div>
        <div class='callout_row'>
            <strong>Available at:</strong> <a href='http://sephora.com' target='_blank'>Sephora</a>
        </div>
        
        
        <!-- L'Oreal' -->
        <div class='cols product ac'>
            <div id='loreal'>
                <div class='col col_4 col_offset_4 last'>
                    <h3>L'Oreal</h3>
                </div>
            </div>
            <div class='col col_6 col_offset_3 desc last'>
                <p><strong>L’Oreal Nail Colour Riche<sup>®</sup> | He Red My Mind</strong></p>
                <p>A bright, playful and sweet red, laced with a fine gold shimmer. The kind of color that inspires daydreams of warm days. Scoop this one up now to brighten your day, or save it for all summer long.</p>
            </div>
        </div>
        <div class='callout_row'>
            <strong>Available at:</strong> <a href='http://www.ulta.com' target='_blank'>Ulta</a>
        </div>
        
        <!-- OPI -->
        <div class='cols product ac'>
            <div id='opi'>
                <div class='col col_4 col_offset_7 last'>
                    <h3>OPI</h3>
                </div>
            </div>
            <div class='col col_6 col_offset_3 desc last'>
                <p><strong>OPI | Congeniality is My Middle Name</strong></p>
                <p>Ok, this one is more magenta than red, but we couldn’t resist its beauty. Paint it on mid- or short-length nails and prepare to dazzle with more than just your personality.</p>
            </div>
        </div>
        <div class='callout_row'>
            <strong>Available at:</strong> <a href='http://www.beautyfirst.com' target='_blank'>Beauty First</a>
        </div>
        
        
        <!-- Sally Hansen -->
        <div class='cols product ac'>
            <div id='sally'>
                <div class='col col_4 col_offset_1 last'>
                    <h3>Sally Hansen</h3>
                </div>
            </div>
            <div class='col col_6 col_offset_3 desc last'>
                <p><strong>Sally Hansen Diamond Strength No Chip Nail Color | Heart to Heart</strong></p>
                <p>Not for the faint of heart, this shade was made to get attention. A hot-orange red without shimmer that makes a DIY mani a snap.</p>
            </div>
        </div>
        <div class='callout_row'>
            <strong>Available at:</strong> <a href='http://www.target.com' target='_blank'>Target</a>
        </div>
        
        <?php $GLOBALS['related_articles'] = array('2013_02_femme_look_of_love','2013_02_femme_perfume'); ?>
        
        <?php fin($page['id']); ?>
        
        
        
<?php
    include_once($doc_root . '/includes/footer.php');
?>