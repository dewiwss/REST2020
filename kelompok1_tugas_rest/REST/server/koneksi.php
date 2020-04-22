<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "example";

// Create connection
$link = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$link) {
    die("Connection failed: " . mysqli_connect_error());
}
//select database
mysqli_select_db($link, "example") or die("Could not select database");

?>