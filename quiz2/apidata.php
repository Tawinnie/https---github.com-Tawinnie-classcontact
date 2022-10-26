<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <a href="Index.php">Add Your Contact</a><br>
</body>

</html>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$databasename = "class_contact_mgt";

// Create connection
$connect = new mysqli($servername, $username, $password, $databasename);
// Check connection
if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
}

$sql = "SELECT * FROM phonebook";
$result = $connect->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $id = $row["pid"];
        $name = $row["pname"];
        $phone = $row["pphoned"];
        echo "Name: " .  $name . "- Phone: " . $phone . "<br>";
    }
} else {
    echo "0 results";
}