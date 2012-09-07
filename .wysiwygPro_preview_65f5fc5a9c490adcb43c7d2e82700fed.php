<?php
if ($_GET['randomId'] != "qX2ggiWeAawl1nqQxzjk4EuxTAGrAAPKZlfi5L68rauSaeFOFP6akFtqQDsiofxI") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
