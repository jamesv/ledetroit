<?php
    $page = array(
        'class' => 'index'
    );
    
    $doc_root = $_SERVER['DOCUMENT_ROOT'];
    include_once($doc_root . '/includes/header.php'); 
    include_once($doc_root . '/includes/functions.php');
?>
        <!-- Containers -->
        <div class='cols col_grid ac'>
            <div>
                <div class='col col_12 masthead last'>
                <?php
                    $masthead_items = array(
                        array('2013_02_music_the_hounds_below.jpg','/2013/02/music/the_hounds_below.php','Music','Get to know The Hounds Below'),
                        array('2013_02_femme_look_of_love.jpg','/2013/02/style/femme_look_of_love.php','Femme','Look of love'),
                        array('2013_02_homme_denim.jpg','/2013/02/style/homme_denim.php','Homme','It\'s time to get out of your denim funk'),
                        array('2013_03_life_beer.jpg','/2013/03/life/beer.php','Life','Our taste testers go on a quest to find beers worth celebrating'),
                        array('2013_02_life_coffee.jpg','/2013/02/life/coffee.php','Places','Favorite spots to eat, drink, and explore')
                    );
                    
                    drawMasthead($masthead_items);
                ?>
                </div>
                
                <div class='col col_12 last'>
                    <h3 class='date'>March 2013</h3>
                </div>
                
                <?php
                    $grid_articles = array(
                        array('2013_03_beer',4),
                        array('2013_02_the_hounds_below',8),
                        array('2013_02_homme_layered_up',4),
                        array('2013_02_homme_wool',4),
                        array('2013_02_coffee',4),
                        array('2013_02_homme_denim',4),
                        array('2013_02_femme_rouge',4),
                        array('2013_02_femme_look_of_love',4),
                        array('2013_02_femme_perfume',4),
                        array('2013_02_objects_of_desire',4),
                        array('about_us',4)
                    );
                    drawArticlesGrid($grid_articles);
                ?>
                                
<!--
                <div class='col col_12 pagination last'>
                    1/5
                    <a href='#' class='prev'>&lt;</a>
                    <a href='#' class='next'>&gt;</a>
                </div>
-->
            </div>    
        </div>

        
<?php
    include_once($doc_root . '/includes/footer.php');
?>