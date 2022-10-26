<?php
// $servername = "localhost";
// $username = "root";
// $password = "";
// $databasename = "class_contact_mgt";

$servername = "us-cdbr-east-06.cleardb.net";
$username = "be939ffb871918";
$password = "87cca276";
$databasename = " heroku_b87a9cd1fc84562";

// Create connection
$connect = mysqli_connect($servername, $username, $password, $databasename);

// Check connection
if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}
