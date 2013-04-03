<?php
    $page = array(
        'title' => 'xxx',
        'class' => 'events'
    );

    $doc_root = $_SERVER['DOCUMENT_ROOT'];
    
    $places_json = file_get_contents($doc_root .'/music/data.json');
    $decoded_events = json_decode($places_json);

    $event = false;
    $event_id = $_GET['id'];
    $page['id'] = $event_id;
    
    foreach($decoded_events->events as $section) {
        if ($event) {
            break;
        }
        
        foreach($section->locations as $location) {
            if($location->id == $event_id) {
                $event = $location;
                $page['title'] = $event->name;
                break;
            }            
        }
    }
    
    

    
    
    
    include_once($doc_root . '/includes/header.php');
    include_once($doc_root . '/includes/functions.php'); 
?>
        <!-- Containers -->
            <div class='cols gutter_top ac'>
            <?php if ($event) { ?>
                <div class='col col_12 masthead last'>
                    <div class='masthead_items'>
                        <div class='masthead_item dark_masthead c'>
                                <h2><?php print $event->masthead ?></h2>
                        </div>
                    </div>
                </div>
                
                <?php
                    //print "<h2>".$event->name."</h2>";
                    if($event->opener != "") {
                        print "<div class='col col_10 col_offset_1 last c name'>";
                        print "<h2>".$event->opener."</h2>";
                        print "</div>";
                        //print "<em>".$event->opener."</em>";
                    } else {
                        print "<div class='col col_10 col_offset_1 last c name_short'></div>";
                    }
                ?>

                
                <div class='col col_6 col_offset_3 gutter_top last'>
                    <?php
                        print "<p class='c'>".$event->details."</p>";
                    ?>
                </div>
            </div>
            
            <div class='cols gutter_top tickets ac'>
                <?php
                if($event->url != "") {
                    print "<a class='btn link_btn col_2 col_offset_5' href='".$event->url."'>Find Tickets</a>";
                }
                ?>
            </div>
            
            
            <div class='callout_row'>
                <span><strong><?php print $event->venue; ?></strong></span>
                <span><?php print $event->location; ?></span>
                <?php print $event->date; ?>
            </div>
            
                

            <?php } ?>
            
            <?php fin($page['id'], true); ?>
        
<?php
    include_once($doc_root . '/includes/footer.php');
?>