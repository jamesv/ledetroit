<?php
    $page = array(
        'id' => '2013_05_homme_ties',
        'title' => 'Summer Ties',
        'class' => 'style',
        'content_css' => true
    );

    $doc_root = $_SERVER['DOCUMENT_ROOT'];
    include_once($doc_root . '/includes/header.php'); 
    include_once($doc_root . '/includes/functions.php'); 
?>
    <!-- Containers -->
    <div class='cols ac intro gutter_top'>
        <div class='title'><h1>Summer Ties</h1></div>
        <p id='content' class='big l'>The weather is changing and so should your neck attire. This summer, try your damnedest to shake the sweaty sales-guy look and instead knot-up with cool colors and bold patterns.</p>
        <p id='info' class='r'>
            From left:<br/>
            Penguin $55 | Available at Macy’s<br/>
            Plaid Skinny | $59.50 Available at Banana Republic<br/>
            Tommy Hilfiger $55 | available at Macy’s<br/>
            1901 $59.50 | available at Nordstrom
        </p>
    </div>
    
    




    
    
    <?php fin($page['id']); ?>    
        
<?php
    include_once($doc_root . '/includes/footer.php');
?>