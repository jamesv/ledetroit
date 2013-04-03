<?php
    $page = array(
        'title' => 'Music Events',
        'class' => 'music'
    );
    
    $doc_root = $_SERVER['DOCUMENT_ROOT'];
    include_once($doc_root . '/includes/header.php'); 
?>
        <!-- Containers -->
        <div class='cols ac'>
            list of events            
        </div>
        
<?php
    include_once($doc_root . '/includes/footer.php');
?>