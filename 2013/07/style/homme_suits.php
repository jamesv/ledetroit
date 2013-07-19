<?php
    $page = array(
        'id' => '2013_07_homme_suits',
        'title' => 'The Summer Suit',
        'class' => 'style',
        'content_css' => true
    );

    $doc_root = $_SERVER['DOCUMENT_ROOT'];
    include_once($doc_root . '/includes/header.php'); 
    include_once($doc_root . '/includes/functions.php'); 
?>
    <!-- Containers -->
    <div class='cols ac intro gutter_top'>

        <div class='title'><h1>The<br/>Summer<br/>Suit</h1></div>
        <h4 class='col col_10 col_offset_1 last '>One suit. Four ways to wear it (and stay cool).</h4>
        <div class='credits'>
            <strong>Photography</strong> Chris Arace
            <strong>Hair</strong> The Social Club Grooming Co.
            <strong>Styling</strong> Nelson Sanders
        </div> 
        
    </div>
    
    
    
    <div id='suits_01' class='cols ac'>
        <div class='col col_8 col_offset_2 row'>
            <img src='/img/content/2013/07/style/suits_01.jpg' />
            <p class='footnote r'>
                Ludlow Oxford Suit Jacket $328 | Available at J. Crew<br/>
                Ludlow Oxford Suit Pant $168 | Available at J. Crew<br/>
                Dotted Tie | Available at Lost and Found<br/>
                Socks $14 | Available at J. Crew<br/>
                Bass Co. Loafers | Available at Regeneration
            </p>
        </div>
        <div class='col col_4 floated'>
            <img src='/img/ui_number_1.jpg' />
            <p class='big'>Start the summer mornings off with some very formal office charm. Keep the shirt lightweight, with a hint of color to allow the bold patterns in the tie to pop. Unlike your boardroom brethren, you won’t look like you ran a 5K into work when the jacket comes off.</p>
        </div>
    </div>
    
    <div id='suits_02' class='cols ac'>
        <div class='col col_9 col_offset_3 row'>
            <img src='/img/content/2013/07/style/suits_02.jpg' />
            <p class='footnote'>
                Wide-Striped Polo $29.95 | Available at The Gap<br/>
                Bass Co. Loafers | Available at Regeneration 
            </p>
        </div>
        <div class='col col_4 floated'>
            <img src='/img/ui_number_2.jpg' />
            <p class='big'>Always look comfortable. It’s ok to ditch the shirt-and-tie get up for a polo that demands attention. Your favorite broken-in tee works just as well, but the key here will be loud colors or broad stripes.</p>
        </div>
        
    </div>
    
    <div id='suits_03' class='cols ac'>
        <div class='col col_8 col_offset_2 row'>
            <img src='/img/content/2013/07/style/suits_03.jpg' />
            <p class='footnote'>
                Penguin Stripped Tee $49 | Available at Caruso Caruso<br/>
                1969 Selvaged Jeans $89.95 | Available at The Gap<br/>
                Marlow Tassel Loafer | Available at Ralph Lauren
            </p>
        </div>
        <div class='col col_4 floated'>
            <img src='/img/ui_number_3.jpg' />
            <p class='big'>Go ahead and break out your (lightweight) denim of choice. Hell, even let the ankles show a bit. It’s hot, man.</p>
        </div>
        
    </div>
    
    <div id='suits_04' class='cols ac'>
        <div class='col col_8 col_offset_2 row'>
            <img src='/img/content/2013/07/style/suits_04.jpg' />
            <p class='footnote r'>
                Yellow Polo $29.99 | Available at The Gap<br/>
                Converse Chuck Taylor $44.99 | Available at Finish Line
            </p>
        </div>
        <div class='col col_4 floated'>
            <img src='/img/ui_number_4.jpg' />
            <p class='big'>You’ll need a little elbow room while throwing back the brews. No jacket, classic kicks, and a soft pastel shirt will always work.</p>
        </div>
        
    </div>

    




    
    
    <?php fin($page['id']); ?>    
        
<?php
    include_once($doc_root . '/includes/footer.php');
?>