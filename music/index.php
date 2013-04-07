<?php
    $page = array(
        'title' => 'Music',
        'class' => 'music'
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
                        array('2013_04_music_handgrenades.jpg','/2013/04/music/the_handgrenades.php','The Handgrenades','The HandGrenades make rock \'n roll fun again')
                    );

                    drawMasthead($masthead_items);
                ?>
                </div>
                <?php
                    $places_json = file_get_contents($doc_root .'/music/data.json');
                    $decoded_events = json_decode($places_json);
                    
                    $event_ids = array();
                    foreach($decoded_events->events as $section) {
                        foreach($section->locations as $location) {
                            array_push($event_ids, $location->id);
                        }
                    }
                    
                    bonGet($event_ids);


                    foreach($decoded_events->events as $section) {
                        print "<div class='col col_12 last list'>";
                        print "<ul id='group_".strtolower($section->section)."'>";
                        foreach($section->locations as $location) {
                            print "<li>";
                            print "<a href='detail.php?id=".$location->id."'><h5>".$location->name."</h5>";
                            print "<span>".$location->date." @ ".$location->venue."</span></a>";
                            print bonDraw($location->id);
                            print "</li>";
                        }
                        print "</ul>";
                        print "</div>";
                    }

                ?>
            </div>
        
<?php
    include_once($doc_root . '/includes/footer.php');
?>