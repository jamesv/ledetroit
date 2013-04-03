function bon($id) {
    $('#bon_' + $id).load('/bon.php?page_id=' + $id);
    }
    
function galleryShowHide($id) {
    $('#' + $id).toggle();
    }

function galleryShowThumbnail($id, $photo_id) {   
    $('#' + $id + "_rotator").cycle($photo_id);
    galleryShowHide($id + "_rotator_container");
    }