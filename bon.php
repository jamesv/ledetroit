<?php
    $doc_root = $_SERVER['DOCUMENT_ROOT']; 
    include_once($doc_root . '/includes/functions.php');
    
    $page_id = $_GET['page_id'];
    print bonSet($page_id);
?>