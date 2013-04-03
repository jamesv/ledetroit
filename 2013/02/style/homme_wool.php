<?php
    $page = array(
        'id' => '2013_02_homme_wool',
        'title' => 'Winter in Wool',
        'class' => 'style',
        'content_css' => true
    );

    $doc_root = $_SERVER['DOCUMENT_ROOT'];
    include_once($doc_root . '/includes/header.php'); 
    include_once($doc_root . '/includes/functions.php'); 
?>
    <!-- Containers -->
    <div class='cols ac intro gutter_top'>

        <div class='title'><h1>Winter in Wool</h1></div>
        <h4>Five new ways to add wool into your mix</h4>
        <div class='ac'><p class='col col_6 col_offset_3 last'>Who says staying warm means sacrificing style? Certainly not us. And definitely not the designers behind these five pieces. We might be wishing for spring, but winter is still here. So here’s how to keep your look together without adding the bulk.</p></div>
        <div class='photographer'>Chris Arace</div> 
    </div>
    

    <!-- Socks -->
    <div id='socks' class='cols product ac'>
        <div class='item col col_8'>
        </div>
        <div class='col col_4 content last'>
            <p class='big'>The iconic Converse sneaker gets a modern upgrade in wool. And since you have to keep your look right from head to toe, these socks will keep you warm too.</p>
        </div>
    </div>
    <div class='callout_row'>
        <span><strong>Donegal Wool Sock</strong> $19.50</span>
        <strong>Available at:</strong> Club Monaco
        <span class='second'><strong>Converse Jack Purcell</strong> $74.95</span>
        <strong>Available at:</strong> Nordstrom
        
    </div>
    </div>

    <!-- Scarf -->
    <div id='scarf' class='cols product ac'>
        <div class='col col_4 content last'>
            <p class='big r'>Cover up with this chunky, and rich knit scarf. Made from pure wool.</p>
        </div>
        <div class='item col col_8'>
        </div>
    </div>
    <div class='callout_row'>
        <span><strong>Michael Kors Knit Scarf</strong> $74.95</span>
        <strong>Available at:</strong> Nordstrom
    </div>
    </div>

    <!-- Hat -->
    <div id='hat' class='cols product ac'>
        <div class='item col col_5 col_offset_3'>
        </div>
        <div class='col col_4 content last'>
            <p class='big'>Turn some heads, and keep yours warm, in this comfy Italian-yarn hat.</p>
        </div>
    </div>
    <div class='callout_row'>
        <span><strong>Thomas Hat</strong> $59.50</span>
        <strong>Available at:</strong> Club Monaco
    </div>
    </div>

    <!-- Sweater -->
    <div id='sweater' class='cols product ac'>
        <div class='col col_4 content last'>
            <p class='big r'>Classic comfort that can be worn alone or with layers</p>
        </div>
        <div class='item col col_6'>
        </div>
        
    </div>
    <div class='callout_row'>
        <span><strong>Shawl Pullover</strong> $225</span>
        <strong>Available at:</strong> Ralph Lauren
    </div>
    </div>
    
    <?php $GLOBALS['related_articles'] = array('2013_02_homme_layered_up','2013_02_homme_denim'); ?>
    
    <?php fin($page['id']); ?>    
        
<?php
    include_once($doc_root . '/includes/footer.php');
?>