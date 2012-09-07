<?php
if ($_GET['randomId'] != "6of8DsE9Fqa45fgxPBxiBwGCsOOPi7rsdoJrGwS5HkQHEFQJcb1vsTMq04Q0HW3C") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
