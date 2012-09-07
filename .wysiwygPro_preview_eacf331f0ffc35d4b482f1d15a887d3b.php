<?php
if ($_GET['randomId'] != "WGRxrRJmmrrytR5W5BEVPlMxFGcVKpw9eFhhV95Iwk1LtLtL4P50Ymfexypcefir") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
