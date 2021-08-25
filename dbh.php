<?php
// Connecting to the Database
$dbservername = getenv("DB_SERVER");
$dbusername = getenv("DB_USERNAME");
$dbpassword = getenv("DB_PASSWORD");
$database = getenv("DB_NAME");

// Create a connection
$conn = mysqli_connect($dbservername, $dbusername, $dbpassword, $database);
// Die if connection was not successful
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
  
?>

