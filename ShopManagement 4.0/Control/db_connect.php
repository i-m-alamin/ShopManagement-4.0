<?php

$serverName = "localhost";
$userName = "root";
$password = "";
$dbName = "shop";

$conn = new mysqli($serverName, $userName, $password, $dbName);
// Return an error code from the last connection error
if ($conn->connect_errno)
{
  echo "Failed to connect to MYSQL: " .$conn->connect_error;
  exit();
}

?>