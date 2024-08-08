<?php

$servername = "localhost"; //server
$username = "root"; //username
$password = ""; //password
$dbname = "code_camp_bd_fos";  //database

// Create connection
$db = mysqli_connect($servername, $username, $password, $dbname, 3307); // connecting 
// Check connection
if (!$db) {       //checking connection to DB	
    die("Connection failed: " . mysqli_connect_error());
}

?>