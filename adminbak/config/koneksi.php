<?php
$servername 	= "localhost";
$username		= "nikf1965_deas";
$password 		= "3[pL83jcsR2{";
$dbname 		= "nikf1965_deas";

$connection = mysqli_connect($servername, $username, $password, $dbname);
if (!$connection){
        die("Connection Failed:".mysqli_connect_error());
    }
?>