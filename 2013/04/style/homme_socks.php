<?php
    $page = array(
        'id' => '2013_04_homme_socks',
        'title' => 'Step Lively',
        'class' => 'style dark',
        'content_css' => true
    );

    $doc_root = $_SERVER['DOCUMENT_ROOT'];
    include_once($doc_root . '/includes/header.php');
    include_once($doc_root . '/includes/functions.php'); 
?>
        <!-- Containers -->
        <div class='cols ac intro gutter_top'>

            <div class='title'><h1>Step<br/>Lively</h1></div>
            <h4 class='col col_10 col_offset_1 last'>The best socks for keeping your look on point</h4>
            <div class='ac'><p class='col col_6 col_offset_3 last'>What’s the point of putting together a look, only to throw on some faded,<br/>mismatched, or otherwise unsightly socks? Always finish the look, gentlemen.</p></div>
            <div class='photographer'>Chris Arace</div> 

        </div>

         
        <div id='happy' class='cols product ac'>
            <div class='col col_4 content'>
                <p class='big'><span>on the sly</span><br/>
                You might be the only one who<br/>
                knows what’s up that pant<br/>
                leg. But maybe that’s the<br/>
                entire point.</p>
            </div>
        </div>
        <div class='callout_row'>
            <span><strong>Happy Socks</strong> $12</span>
            <strong>Available at:</strong> Nordstrom
        </div>
        
        <div id='jcrew' class='cols product ac'>
            <div class='col col_4 col_offset_8 last content'>
                <p class='big'><span>The Head turners</span><br/>
                Because you’re a loud<br/>
                brave man.</p>
            </div>
        </div>
        <div class='callout_row'>
            <span><strong>J. Crew Dot Sock</strong> $12.50</span>
            <strong>Available at:</strong> J. Crew
        </div>
        
        <div id='hugo' class='cols product ac'>
            <div class='col col_4 content'>
                <p class='big'><span>earn your stripes</span><br/>
                Jr. ROTC days are over. Leave the<br/>
                Gold Toe behind.</p>
            </div>
        </div>
        <div class='callout_row'>
            <span><strong>Hugo Boss Striped Socks</strong> $12.50</span>
            <strong>Available at:</strong> Hugo Boss
        </div>
        
        <div id='calvin' class='cols product ac'>
            <div class='col col_4 col_offset_8 last content'>
                <p class='big'><span>For the minimalist at heart</span><br/>
                The right kind of solid adds a<br/>
                nice kick to that black suit.</p>
            </div>
            <div class='item col col_8 last'></div>
        </div>
        <div class='callout_row'>
            <span><strong>Calvin Klein</strong> $12</span>
            <strong>Available at:</strong> Lord & Taylor
        </div>


        
        <?php fin($page['id']); ?>
        
<?php
    include_once($doc_root . '/includes/footer.php');
?>