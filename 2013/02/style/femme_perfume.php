<?php
    $page = array(
        'id' => '2013_02_femme_perfume',
        'title' => 'Scent of a Woman',
        'class' => 'style',
        'content_css' => true
    );

    $doc_root = $_SERVER['DOCUMENT_ROOT'];
    include_once($doc_root . '/includes/header.php');
    include_once($doc_root . '/includes/functions.php');  
?>
        <!-- Containers -->
        <div class='cols ac intro gutter_top'>

            <div class='title'><h1>Scent of a Woman</h1></div>
            <h4>Meet four fragrances that could be “The One.”</h4>
            <div class='ac'><p class='col col_6 col_offset_3 last'>Few things in this world can make a woman feel sexier than a signature scent. So if you’re looking for a new one, we’ve rounded up four of our favorites. Whether you’re into floral, citrus, earthy or sweet scents, each pick has one thing in common: an impression that can’t be forgotten.</p></div>
            <div class='photographer'>Chris Arace</div> 

        </div>
        
        <!-- Gucci -->
        <div class='cols product ac'>
            <div id='gucci'>
            </div>
            <div class='col col_6 col_offset_3 desc_notes last'>
                <p><strong>Gucci by GUCCI Eau de Parfum</strong></p>
                <p>If you’re looking for a new signature fragrance, we recommend you begin with this attention grabbing floral. Men and women alike are addicted to its warm, sensual, distinctly feminine scent.</p>
            </div>
            <div class='col col_12 notes last'>
                <p><strong>Notes:</strong> Pear, lily of the valley, patchouli, guava accord, tiare flower, musk, chamomile, orange blossom, honey</p>
            </div>
        </div>
        <div class='callout_row'>
            <span><strong>Fragrance Character:</strong> Floral</span>
            <strong>Available at:</strong> <a href='http://www.macys.com' target='_blank'>Macy's</a>
        </div>
        
        <!-- TokyoMilk -->
        <div class='cols product ac'>
            <div id='tokyomilk'>
            </div>
            <div class='col col_6 col_offset_3 desc_notes last'>
                <p><strong>TokyoMilk Dark Femme Fatale Collection: Tainted Love No. 62</strong></p>
                <p>There is nothing tainted about this intoxicating scent. A provocative mix of vanilla bean, sandalwood and orchid combine to create a completely unique fragrance. Hands down, this one is a favorite of ours.</p>
            </div>
            <div class='col col_12 notes last'>
                <p><strong>Notes:</strong> dark vanilla bean, sparkling citrus, orchid, white tea, sandalwood, tonka bean</p>
            </div>
        </div>
        <div class='callout_row'>
            <span><strong>Fragrance Character:</strong> Dramatic and earthy</span>
            <strong>Available at:</strong> <a href='https://www.facebook.com/emeralddetroit' target='_blank'>Emerald - 15 E. Kirby, Detroit (Midtown)</a>
        </div>
        
        <!-- Brown Sugar -->
        <div class='cols product ac'>
            <div id='brownsugar'>
            </div>
            <div class='col col_6 col_offset_3 desc_notes last'>
                <p><strong>Fresh Brown Sugar Eau de Parfum</strong></p>
                <p>Sparkling citrus meets sweet sugar in this irresistible scent. Wearable in any season, it’s a ray of sunshine in the dead of winter.</p>
            </div>
            <div class='col col_12 notes last'>
                <p><strong>Notes:</strong> Sicilian lemon, tangerine, açai, sugared magnolia, sheer honeysuckle, peach nectar, caramel, warm amber, cypress</p>
            </div>
        </div>
        <div class='callout_row'>
            <span><strong>Fragrance Character:</strong> Citrus</span>
            <strong>Available at:</strong> <a href='http://shoprubysbalm.com' target='_blank'>Ruby's Balm - 6917 Orchard Lake Road, West Bloomfield</a>
        </div>
        
        <!-- Juicy -->
        <div class='cols product ac'>
            <div id='juicy'>
            </div>
            <div class='col col_6 col_offset_3 desc_notes last'>
                <p><strong>Juicy Couture Viva La Juicy Eau de Parfum</strong></p>
                <p>In this flirty fragrance, wild berries and honeysuckle are rounded out by amber and sandalwood for the perfect balance of sweetness and warmth. The kind of scent that derives compliments all day.</p>
            </div>
            <div class='col col_12 notes last'>
                <p><strong>Notes:</strong> wild berries, mandarins, honeysuckle, gardenia, jasmine, amber, caramel, vanilla, sandalwood, praline</p>
            </div>
        </div>
        <div class='callout_row'>
            <span><strong>Fragrance Character:</strong> Fruity and sweet</span>
            <strong>Available at:</strong> <a href='http://www.sephora.com' target='_blank'>Sephora</a>
        </div>
        
        <?php $GLOBALS['related_articles'] = array('2013_02_femme_rouge','2013_02_femme_look_of_love'); ?>
        
        <?php fin($page['id']); ?>

        
        
        
        
        
<?php
    include_once($doc_root . '/includes/footer.php');
?>