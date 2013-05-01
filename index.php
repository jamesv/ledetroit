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
                        array('2013_04_tunde.jpg','/2013/04/music/tunde.php','Music','Tunde Olaniran',),
                        array('2013_05_femme_emerald.jpg','/2013/05/style/femme_emerald.php','Femme','Go Green'),
                        array('2013_05_homme_shoes.jpg','/2013/05/style/homme_shoes.php','Homme','Sneak Attack'),
                        array('2013_04_music_handgrenades.jpg','/2013/04/music/the_handgrenades.php','Music','The HandGrenades',),
                        array('2013_05_life_tacos.jpg','/2013/05/life/tacos.php','Life','The Atacolypse')
                    );
                    
                    drawMasthead($masthead_items);
                ?>
                </div>
                
                <div id='months'>

                <div id='month_2013_05' class='month'>
                    <div class='col col_12 last'>
                        <h3 class='date'>May 2013</h3>
                    </div>

                    <?php
                        $grid_articles = array(
                            array('about_us',4),
                            array('2013_05_life_tacos',8),
                            array('2013_05_homme_ties',4),
                            array('2013_05_homme_shoes',4),
                            array('2013_05_femme_dresses',4),
                            array('2013_05_femme_emerald',8)
                        );
                        drawArticlesGrid($grid_articles);
                    ?>
                </div>

                
                <div id='month_2013_04' class='month'>
                    <div class='col col_12 last'>
                        <h3 class='date'>April 2013</h3>
                    </div>

                    <?php
                        $grid_articles = array(
                            array('2013_04_music_blowout',4),
                            array('2013_04_music_tunde',8),
                            array('2013_04_femme_flats',4),
                            array('2013_04_femme_rain',4),
                            array('2013_04_homme_socks',4),
                            array('2013_04_homme_jackets',4),
                            array('2013_04_music_handgrenades',8),
                            array('2013_04_life_handgrenades_gallery',4),
                            array('about_us',4),

                        );
                        drawArticlesGrid($grid_articles);
                    ?>
                </div>

                <div id='month_2013_03' class='month'>
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