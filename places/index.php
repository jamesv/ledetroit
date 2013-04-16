<?php
    $page = array(
        'title' => 'Places',
        'class' => 'places'
    );

    $doc_root = $_SERVER['DOCUMENT_ROOT'];
    include_once($doc_root . '/includes/header.php');
    include_once($doc_root . '/includes/functions.php'); 
?>
        <!-- Containers -->
        <div class='cols gutter_top ac'>
            <div class='col col_12 masthead last'>
            <?php
                $masthead_items = array(
                    array('2013_02_life_coffee.jpg','/2013/02/life/coffee.php','The Daily Grind','The perfect cup of coffee for any day of the week')
                );

                drawMasthead($masthead_items);
            ?>
            </div>
        </div>
            <?php
                $places_json = file_get_contents($doc_root .'/places/data.json');
                $decoded_places = json_decode($places_json);
                
                $place_ids = array();
                foreach($decoded_places->places as $section) {
                    foreach($section->locations as $location) {
                        array_push($place_ids, $location->id);
                    }
                }
                
                bonGet($place_ids);


                foreach($decoded_places->places as $section) {
                    print "<div class='list_section ac'>";
                    print "<div class='cols ac'>";
                    print "<div class='col col_12 last list ac'>";
                    print "<p>" . $section->section . "</p>";
                    print "<ul id='group_".strtolower($section->section)."'>";
                    foreach($section->locations as $location) {
                        if($location->photos > 0){
                        print "<li>";
                        print "<a href='detail.php?id=".$location->id."'><h5>".$location->name."</h5>";
                        print "<span>".$location->address."</span></a>";
                        print bonDraw($location->id);
                        print "</li>";
                        }
                    }
                    print "</ul>";
                    print "</div>";
                    print "</div>";
                    print "</div>";
                }
            
            ?>
        </div>
        
<?php
    include_once($doc_root . '/includes/footer.php');
?>