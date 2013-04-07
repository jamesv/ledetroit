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
                    array('2013_04_femme_rain.jpg','/2013/04/style/femme_rain.php','Femme','Rain gear that makes rainy days less dreary'),
                    array('2013_04_homme_jackets.jpg','/2013/04/style/homme_jackets.php','Homme','The Spring Jacket')
                );
            
                drawMasthead($masthead_items);
            ?>
            </div>
        
            <?php
                $grid_articles = array(
                    array('2013_04_femme_flats',4),
                    array('2013_04_femme_rain',4),
                    array('2013_04_homme_socks',4),
                    array('2013_04_homme_jackets',4),
                    
                    
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