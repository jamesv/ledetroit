<?php
    $page = array(
        'title' => 'Style',
        'class' => 'index style'
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
                    array('2013_02_femme_look_of_love.jpg','/2013/02/style/femme_look_of_love.php','Femme','Look of love'),
                    array('2013_02_homme_denim.jpg','/2013/02/style/homme_denim.php','Homme','It\'s time to get out of your denim funk')
                );
            
                drawMasthead($masthead_items);
            ?>
            </div>
        
            <?php
                $grid_articles = array(
                    array('2013_02_femme_perfume',4),
                    array('2013_02_femme_rouge',4),
                    array('2013_02_femme_look_of_love',4),

                    array('2013_02_homme_wool',4),
                    array('2013_02_homme_layered_up',4),
                    array('2013_02_homme_denim',4)
                );
                drawArticlesGrid($grid_articles);
            ?>
        </div>
        
<?php
    include_once($doc_root . '/includes/footer.php');
?>