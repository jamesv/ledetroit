<?php
    $page = array(
        'id' => '2013_03_beer',
        'title' => 'Beer',
        'class' => 'life',
        'content_css' => true
    );

    $doc_root = $_SERVER['DOCUMENT_ROOT'];
    include_once($doc_root . '/includes/header.php'); 
    include_once($doc_root . '/includes/functions.php'); 
?>
        <!-- Containers -->
        <div class='cols ac intro gutter_top'>

            <div class='title'><h1>Cheers</h1></div>
            <h4>A quest to find beers worth celebrating</h4>
            <div class='ac'><p class='col col_6 col_offset_3 last'>Ah, St. Patrick’s Day in America. When watered-down (usually American) beer is inexplicably dyed an unnatural color and drunk with reckless abandon. We’re not here to judge. But we like a little more <em>beer</em> with our beer, so we asked our favorite town drunks&#8212;pardon, <em>beer aficionados</em>&#8212;to search the area for something they could really drink in celebration. We’re happy to present their findings: a varied collection that’s meant to be savored—and which you wouldn’t dream of dyeing green.</p></div>
            <div class='photographer'>Chris Arace</div> 

        </div>
        
        <!-- Bishop Bob's -->
        <div class='cols product ac'>
            <h2>Bishop Bob's Holy Smoke</h2>
            <div id='bishop_bob' class='plate'>
            </div>
            <div class='col col_8 col_offset_2 desc_notes last'>
            
                <p>German Style Rauchbier 4.9% ABV</br>
                Found at Dragonmead Microbrewery, Warren</p>

                <p><strong>Town Drunk 1:</strong> “Rich flavor.”<br/>
                <strong>Town Drunk 2:</strong> “Nice smoky aftertaste.”</p>

            </div>
            <div class='col col_2 col_offset_5 last section_sep'></div>
        </div>


        <!-- Dubbel Vision -->
        <div class='cols product ac'>
            <h2>Dubbel Vision</h2>
            <div id='dubbel_vision' class='plate'>
            </div>
            <div class='col col_8 col_offset_2 desc_notes last'>
                <p>Award-winning Abbey Dubbel 7.5% ABV<br/>
                Found at Bastone, Royal Oak</p>

                <p><strong>Town Drunk 1:</strong> "Fruity but potent."<br/>
                <strong>Town Drunk 2:</strong> "It has a nice, smooth, refreshing taste that makes it almost too easy to go for a second and then a third... and eventually a fourth."</p>
            </div>
            <div class='col col_2 col_offset_5 last section_sep'></div>
        </div>


        <!-- Simcoe Silly -->
        <div class='cols product ac'>
            <h2>Simcoe Silly</h2>
            <div id='simcoe_silly' class='plate'>
            </div>
            <div class='col col_8 col_offset_2 desc_notes last'>
                <p>Pale American Belgo Style 9.25% ABV<br/>
                Found at Kuhnhenn Brewing Co., Warren</p>

                <p><strong>Town Drunk 1:</strong>  “I feel like you could drink this in the summertime.”<br/>
                <strong>Town Drunk 2:</strong> “This is a sneaky taste. You will not see this one coming.”<br/>
                <strong>Town Drunk 3:</strong> “It’ll put you on your ass.”</p>
            </div>
            <div class='col col_2 col_offset_5 last section_sep'></div>
        </div>


        <!-- Ghettoblaster -->
        <div class='cols product ac'>
            <h2>Ghettoblaster</h2>
            <div id='ghettoblaster' class='plate'>
            </div>
            <div class='col col_8 col_offset_2 desc_notes last'>
                <p>English Style Mild Ale 4.2% ABV<br/>
                Found at Motor City Brewing Works, Detroit</p>

                <p><strong>Town Drunk 1:</strong> “The party beer you can just sip all day.”<br/>
                <strong>Town Drunk 2:</strong> “I used to drink this out of kegs at parties with dirt <br/>floors. In the 90’s.”</p>
            </div>
            <div class='col col_2 col_offset_5 last section_sep'></div>
        </div>


        <!-- Black Bottom Oatmeal Stout -->
        <div class='cols product ac'>
            <h2>Black Bottom Oatmeal Stout</h2>
            <div id='black_bottom' class='plate'>
            </div>
            <div class='col col_8 col_offset_2 desc_notes last'>
                <p>Oatmeal Stout 7.5% ABV<br/>
                Found at Black Lotus, Clawson</p>

                <p><strong>Town Drunk 1:</strong> “I’m impressed. Drinkable, smooth, non-filling and a great taste. It almost has a warm feel—like a cocoa or brown sugar kind of finish to it. You could pound it all day and not get full.”</p>
                </div>
            <div class='col col_2 col_offset_5 last section_sep'></div>
        </div>
        

        

        

        <?php fin($page['id']); ?>    
        

        
        
        
        
        
<?php
    include_once($doc_root . '/includes/footer.php');
?>