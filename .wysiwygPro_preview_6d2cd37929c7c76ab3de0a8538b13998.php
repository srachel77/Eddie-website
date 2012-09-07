<?php
if ($_GET['randomId'] != "a2X1UXRbYcHewgJ3bSm3ME4llZXcJpu93tNHgg2R_VwrBjQ_kxPY6gLMuR5H_ziH") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
