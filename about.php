<?php
    $page = array(
        'id' => 'about_us',
        'title' => 'About Us',
        'class' => 'about dark',
        'content_css' => true
    );

    $doc_root = $_SERVER['DOCUMENT_ROOT'];
    include_once($doc_root . '/includes/header.php');
    include_once($doc_root . '/includes/functions.php');  
?>
        <div class='cols ac gutter_top copy'>
            <div class='col col_10 col_offset_1 last  '>
            <p>Le Detroit isn’t just a place, it’s a spirit. It’s our city’s given name, a symbol of ingenuity and a promising future.</p>

            <p>This is not a city with its head in the gravel. Those who think there’s nothing going on here simply aren’t looking hard enough. People here are busy creating, inspiring, collaborating and most importantly, doing. Those are the stories that make our headlines.</p>

            <p>Music, fashion, art, design, food. People who are doing new things. People who are doing old things in a new way. We handpick the best of the best. And then we put it all in a lovingly designed, thoughtfully worded package so that you always know what’s going on in this city we all love.</p>

            <p>&nbsp;</p>
            <p>#jadoreluhdaytwah</p>
            </div>

        </div>
              
        
        <?php fin($page['id'], true); ?>

        
        
        
        
        
<?php
    include_once($doc_root . '/includes/footer.php');
?>