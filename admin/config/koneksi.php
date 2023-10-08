<?php
$servername 	= "localhost";
$username		= "root";
$password 		= "";
$dbname 		= "nikf1965_deas";

$connection = mysqli_connect($servername, $username, $password, $dbname);
if (!$connection){
        die("Connection Failed:".mysqli_connect_error());
    }
?>