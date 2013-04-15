<?php
    $page = array(
        'id' => '2013_04_femme_rain',
        'title' => 'Make A Splash',
        'class' => 'style',
        'content_css' => true
    );

    $doc_root = $_SERVER['DOCUMENT_ROOT'];
    include_once($doc_root . '/includes/header.php'); 
    include_once($doc_root . '/includes/functions.php'); 
?>
    <!-- Containers -->
    <div class='cols ac intro gutter_top'>

        <div class='title'><h1>Make<br/>A<br/>Splash</h1></div>
        <h4 class='light'>Bye-bye shapeless, style-deficient rain gear. Say hello to the kind of gear that will almost have you welcoming that little rain icon on your weather app. <em>Almost.</em></h4>
        <div class='credits'>
            <strong>Photographer</strong> Chris Arace
            <strong>Styling</strong> Michele Swanson
        </div>
    </div>
    
    

    <!-- Group -->
    <div id='group' class='cols product ac'>
        <div class='col col_4 content'>
            <p class='big'>We’re pretty sure this umbrella comes with automatic smile upon opening. The color combo is playful yet entirely grown up.</p>
        </div>
        <div class='col col_4 col_offset_8 last content_b'>
            <p class='big'>This is what we call Rainwear Chic. The rose gold accents? Be still our beating hearts. </p>
        </div>
        <div class='col col_4 col_offset_8 last content_c'>
            <p class='big'>Just go get these boots. You’ll thank us the next time you’re sloshing through puddles at Eastern Market.</p>
        </div>
        
    </div>
    <div class='callout_row'>
        <span><strong>Kate Spade Umbrella</strong> $78</span>
        <span><strong>Ted Baker London Anorak</strong> $148</span>
        <strong>Available at:</strong> Nordstrom
        <span class='second'><strong>Buckled Rain Boot</strong> $275</span>
        <strong>Available at:</strong> Burberry
    </div>
    </div>


    <!-- Kors -->
    <div id='kors' class='cols product ac'>
        <div class='col col_4 content last'>
            <p class='big'>A hot coral orange jacket that boasts utilitarian elements without losing its feminine edge.</p>
        </div>
    </div>
    <div class='callout_row'>
        <span><strong>MICHAEL Michael Kors Roll Sleeve Jacket</strong> $118</span>
        <strong>Available at:</strong> Nordstrom
    </div>
    </div>


    <!-- Eddie Bauer -->
    <div id='bauer' class='cols product ac'>
        <div class='col col_4 col_offset_8 content last'>
            <p class='big'>We love how this adjusts at almost every curve for a personalized fit. And it’s water repellant to boot.</p>
        </div>
    </div>
    <div class='callout_row'>
        <span><strong>Travex Parka</strong> $119</span>
        <strong>Available at:</strong> Eddie Bauer
    </div>
    </div>


    <!-- Banana Republic -->
    <div id='banana' class='cols product ac'>
        <div class='col col_4 content last'>
            <p class='big'>No matter what you’re carrying in your bag, no doubt there’s something in there you’d want to protect from the elements. Now you can with this versatile tote.</p>
        </div>
    </div>
    <div class='callout_row'>
        <span><strong>Blank Tote</strong> $79.50</span>
        <strong>Available at:</strong> Banana Republic
    </div>
    </div>

    
    
    <?php fin($page['id']); ?>    
        
<?php
    include_once($doc_root . '/includes/footer.php');
?>