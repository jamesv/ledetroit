<?php
    $page = array(
        'title' => 'Life',
        'class' => 'index life'
    );
    
    $doc_root = $_SERVER['DOCUMENT_ROOT'];
    include_once($doc_root . '/includes/header.php'); 
    include_once($doc_root . '/includes/functions.php');
?>
        <!-- Containers -->
        <div class='cols col_grid ac'>
        <div class='col col_12 masthead last'>
        <?php
            $masthead_items = array(
                array('2013_03_life_beer.jpg','/2013/03/life/beer.php','Cheers','Our taste testers go on a quest to find beers worth celebrating')
            );
            
            drawMasthead($masthead_items);
        ?>
        </div>
        
        
            <div>
            
            <?php
                $grid_articles = array(
                    array('2013_02_the_hounds_below_gallery',4),
                    array('2013_02_coffee',4),
                    array('2013_02_objects_of_desire',4)
                );
                drawArticlesGrid($grid_articles);
            ?>
            </div>    
            
        </div>
        
<?php
    include_once($doc_root . '/includes/footer.php');
?>