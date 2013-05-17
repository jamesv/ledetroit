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
                array('2013_05_life_innerstate.jpg','/2013/05/life/inner_state.php','Inner State Gallery','323East gets a new space and new name – Inner State Gallery')
            );
            
            drawMasthead($masthead_items);
        ?>
        </div>
        
        
            <div>
            
            <?php
                $grid_articles = array(

                    array('2013_05_life_tacos',4),
                    array('2013_03_beer',4),
                    array('2013_02_coffee',4),
                    array('2013_04_life_handgrenades_gallery',4),
                    array('2013_02_objects_of_desire',4),
                    array('2013_02_the_hounds_below_gallery',4)
                );
                drawArticlesGrid($grid_articles);
            ?>
            </div>    
            
        </div>
        
<?php
    include_once($doc_root . '/includes/footer.php');
?>