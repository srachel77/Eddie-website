<?php
if ($_GET['randomId'] != "AMxAxxcVlmnaStTuuHq_hkb0_W_wyZ7j7tyVzN79fVLAoBGpI2A1p3JnG4RONi25") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
