<?php
$host = "localhost";
$user = "root";
$passw = "";
$db = "altclick";
/* Attempt to connect to MySQL database */
$link = mysqli_connect($host, $user, $passw, $db);

// Check connection
if ($link === false) {
     die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>