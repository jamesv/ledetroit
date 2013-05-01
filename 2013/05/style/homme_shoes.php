<?php
    $page = array(
        'id' => '2013_05_homme_shoes',
        'title' => 'Sneak Attack',
        'class' => 'style',
        'content_css' => true
    );

    $doc_root = $_SERVER['DOCUMENT_ROOT'];
    include_once($doc_root . '/includes/header.php'); 
    include_once($doc_root . '/includes/functions.php'); 
?>
    <!-- Containers -->
    <div class='cols ac intro gutter_top'>

        <div class='title'><h1>Sneak<br/>Attack</h1></div>
        <div class='ac'>
        <h4 class='ac col col_10 col_offset_1 last'>We did a little sole searching for the spring</h4></div>
        <div class='photographer'>Chris Arace</div> 
    </div>
    
    

    <!-- Nike -->
    <div id='nike' class='cols product ac'>
        <div class='col col_4 content last'>
            <p class='big'>Give casual Fridays the [insert some sort of pun here about these being racers]. Sure, the vintage approach has been a little abused, but the Waffle Racer lays a different level of sophistication at the feet of the homage junkie.</p>
        </div>
    </div>
    <div class='callout_row'>
        <span><strong>Nike Waffle Race Vintage</strong> $80</span>
        <strong>Available at:</strong> J Crew
    </div>
    </div>


    <!-- Onitsuko -->
    <div id='onitsuko' class='cols product ac'>
        <div class='col col_4 col_offset_8 content last'>
            <p class='big'>Don’t be afraid to be the guy that gets loud in the office. Go the unexpected route and add some athleticism to a pair of Chinos.</p>
        </div>
    </div>
    <div class='callout_row'>
        <span><strong>Onitsuko Tiger Serrano</strong> $69.95</span>
        <strong>Available at:</strong> Nordstrom
    </div>
    </div>


    <!-- Vans -->
    <div id='vans' class='cols product ac'>
        <div class='col col_4  content last'>
            <p class='big'>The forever-weekender. Get rid of the stock laces and grab the leather pair from those old Sperry’s of yours. It works.</p>
        </div>
    </div>
    <div class='callout_row'>
        <span><strong>Vans Authentic Washed Sneaker</strong> $50</span>
        <strong>Available at:</strong> Urban Outfitters
    </div>
    </div>


    <!-- Converse -->
    <div id='converse' class='cols product ac'>
        <div class='col col_4 col_offset_8 content last'>
            <p class='big'>Give the wingtips a rest for a day or two. Your highly coveted black blazer deserves a more murdered out companion.</p>
        </div>
    </div>
    <div class='callout_row'>
        <span><strong>Converse Chuck Taylor All-Star Hi</strong> $54.99</span>
        <strong>Available at:</strong> Champs
    </div>
    </div>


    <!-- Adidas -->
    <div id='adidas' class='cols product ac'>
        <div class='col col_4  content last'>
            <p class='big'>The white hi-top should be worn sparingly, but definitely a staple of every guy’s closet. If you’re the conservative type, keep it minimal. This collaboration with Adidas and Opening Ceremony delivers on that.</p>
        </div>
    </div>
    <div class='callout_row'>
        <span><strong>Adidas Rod Laver Vintage Hi</strong> $140</span>
        <strong>Available at:</strong> Two/Eighteen
    </div>
    </div>



    
    
    <?php fin($page['id']); ?>    
        
<?php
    include_once($doc_root . '/includes/footer.php');
?>