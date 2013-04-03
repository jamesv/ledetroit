<?php
    $page = array(
        'title' => 'xxx',
        'class' => 'events'
    );

    $doc_root = $_SERVER['DOCUMENT_ROOT'];
    
    $places_json = file_get_contents($doc_root .'/events/data.json');
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
                
                
                <div class='col col_6 col_offset_3 last'>
                <?php
                    print "<p><strong>Name:</strong><br/>".$event->name."</p>";
                    print "<p><strong>Date:</strong><br/>".$event->date."</p>";
                    print "<p><strong>Time:</strong><br/>".$event->time."</p>";
                    print "<p><strong>Address:</strong><br/>".$event->address."</p>";
                    if($event->url != "") {
                        print "<p><strong>Site:</strong><br/><a href='".$event->url."'>".$event->url."</a></p>";
                    }
                    
                ?>
                </div>
                

            <?php } ?>
            </div>
            
            <?php fin($page['id'], true); ?>
        
<?php
    include_once($doc_root . '/includes/footer.php');
?>