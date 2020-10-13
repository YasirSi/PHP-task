<?php

$siteurl = "http://localhost:8080/mysql%20%php%20%2/";

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "outlet";

$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);


if ($conn->connect_error)
{
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
