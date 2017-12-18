<?php
$servername = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password) or die("Unable to connect to the host");
$sql = mysqli_select_db ($conn, 'testdb') or die("unable to connect to database");


//$db = new mysqli('localhost', $user, $pass, $db) or die("Unable to connect to database");

//$link = mysqli_connect('localhost', $user, $pass) or die("Couldn't make connection.");
//$db = mysqli_select_db($link, DB_NAME) or die("Couldn't select database");

?>
