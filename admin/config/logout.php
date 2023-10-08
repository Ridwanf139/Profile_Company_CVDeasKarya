<?php
session_start();
if ($_REQUEST['status'] == "true") {
    if(ISSET($_SESSION['username'])){
       UNSET($_SESSION['username']);
       header("location: ../../login.php");
    }
}
session_destroy();
header("location: ../../login.php");
?>
