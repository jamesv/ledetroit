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
                        array('2013_07_life_dcfc.jpg','/2013/07/life/dcfc.php','Life','Allez Le Rouge'),
                        array('2013_07_femme_lips.jpg','/2013/07/style/femme_lips.php','Femme','Bright Lips'),
                        array('2013_07_homme_suits.jpg','/2013/07/style/homme_suits.php','Homme','The Summer Suit'),
                        array('2013_07_femme_concerts.jpg','/2013/07/style/femme_concerts.php','Femme','Face the Music')
                    );
                    
                    drawMasthead($masthead_items);
                ?>
                </div>
                
                <div id='months'>

                <div id='month_2013_05' class='month'>


                    <?php
                        $grid_articles = array(
                            array('about_us',4),
                            array('2013_07_homme_suits',8),
                            array('2013_07_femme_concerts',4),
                            array('2013_07_life_dcfc',4),
                            array('2013_07_femme_lips',4),
                            array('2013_05_life_tacos',4),
                            array('2013_05_life_innerstate',8),
                            array('2013_05_homme_ties',4),
                            array('2013_05_homme_shoes',4),
                            array('2013_05_femme_dresses',4)
                        );
                        drawArticlesGrid($grid_articles);
                    ?>
                </div>

                
                <div id='month_2013_04' class='month'>

                    <?php
                        $grid_articles = array(
                            array('2013_05_femme_emerald',4),
                            array('2013_04_music_tunde',8),
                            array('2013_04_music_blowout',4),
                            array('2013_04_femme_flats',4),
                            array('2013_04_femme_rain',4),
                            array('2013_04_homme_socks',4),
                            array('2013_04_homme_jackets',4),
                            array('2013_04_life_handgrenades_gallery',4),
                            array('2013_04_music_handgrenades',8),
                            array('about_us',4),

                        );
                        drawArticlesGrid($grid_articles);
                    ?>
                </div>

                <div id='month_2013_03' class='month'>

                
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
                </div>
                
                </div>
                                


                <div class='col col_12 pagination last'>
                    <div id='month_rotator_prev_next' class='rotator_prev_next'>
                        <a href='#' class='prev btn'>&lt;</a>
                        <a href='#' class='next btn'>&gt;</a>
                    </div>
                </div>
                
                <script type='text/javascript'>
                    $('#months')
                    .cycle({
                        fx:     'scrollHorz',
                        easing: 'easeOutQuad',
                        next: '#month_rotator_prev_next .next',
                        prev: '#month_rotator_prev_next .prev',
                        speed:  500,
                        timeout: 0
                    });
                </script>
            </div>    
        </div>

        
<?php
    include_once($doc_root . '/includes/footer.php');
?>