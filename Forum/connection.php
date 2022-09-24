<?php
$servername = 'mysql'; //Database ip in this case its localhost
$username = 'Aiden'; //Username
$password = 'PAD'; //Password
$dbname = "Forum"; //Name of the database table


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
//check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
