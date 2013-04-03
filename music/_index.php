<?php
    $page = array(
        'title' => 'Music',
        'class' => 'index music'
    );
    
    $doc_root = $_SERVER['DOCUMENT_ROOT'];
    include_once($doc_root . '/includes/header.php');
    include_once($doc_root . '/includes/functions.php'); 
?>
        <!-- Containers -->
        <div class='cols col_grid ac'>
            <div>
            <?php
                $grid_articles = array(
                    array('2013_02_the_hounds_below',8),
                    array('music_events',4)
                );
                drawArticlesGrid($grid_articles);
            ?>
            </div>    
            
        </div>
        
<?php
    include_once($doc_root . '/includes/footer.php');
?>