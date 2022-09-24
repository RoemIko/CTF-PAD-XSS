<?php
$server = 'mysql:3306'; //Database ip in this case its localhost
$user = 'READDATABASE'; //Username
$pass = 'MAYBELOOKHERE'; //Password
$db = 'DATABASEPAD'; //Name of the database table

// Create connection
$connect = new mysqli($server, $user, $pass, $db, true);

//check connection
if ($connect->connect_error) {
    echo die("Connection failed: " . $connect->connect_error);
}


$sql = "SELECT * FROM Flagphp";
$result = $connect->query($sql);

if ($result->num_rows > 0) {
  echo "dit is de flag: <br>";
  // Shows data on HTML page through ECHO.
  while($row = $result->fetch_assoc()) {
    echo $row["flag"];
  }
} else {
  echo "0 results";
}
$connect->close();
?>
