<?php
    $page = array(
        'title' => 'xxx',
        'class' => 'places'
    );

    $doc_root = $_SERVER['DOCUMENT_ROOT'];
    
    $places_json = file_get_contents($doc_root .'/places/data.json');
    $decoded_places = json_decode($places_json);

    $place = false;
    $place_id = $_GET['id'];
    $page['id'] = $place_id;
    
    foreach($decoded_places->places as $section) {
        if ($place) {
            break;
        }
        
        foreach($section->locations as $location) {
            if($location->id == $place_id) {
                $place = $location;
                $page['title'] = $place->name;

                break;
            }            
        }
    }
    
    

    
    
    
    include_once($doc_root . '/includes/header.php');
    include_once($doc_root . '/includes/functions.php'); 
?>
        <!-- Containers -->
            <div class='cols gutter_top ac'>
            <?php if ($place) { ?>
                <div class='col col_12 masthead last'>
                    <?php
                        $masthead_items = array();
                        for($i = 1; $i <= $place->photos; $i++) {
                            array_push($masthead_items, array($place->id . '_'.$i.'.jpg')) ;
                        }
                        

                        drawMasthead($masthead_items, false, "places");
                    ?>
                </div>
                
                <div class='col col_10 col_offset_1 last'>
                <?php
                    print "<h2 class='c'>".$place->name."</h2>";
                ?>
                </div>
                
                <div class='col col_8 col_offset_2 last'>
                    <?php
                        print "<p class='c'>".$place->details."</p>";
                    ?>
                </div>
                
                <div class='col col_6 col_offset_3 last'>
                <?php
                    print "<p><strong>Address:</strong><br/>".$place->address."</p>";
                    print "<p><strong>Phone:</strong><br/>".$place->phone."</p>";
                    // print "<p><strong>Hours:</strong><br/>".$place->hours."</p>";
                    if($place->url != "") {
                        print "<p><strong>Site:</strong><br/><a href='".$place->url."'>".$place->url."</a></p>";
                    }
                    
                ?>
                </div>
                

            <?php } ?>
            </div>
            
            <?php fin($page['id'], true); ?>
        
<?php
    include_once($doc_root . '/includes/footer.php');
?>