<?php

$servername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "loginsystem";

$conn = mysqli_connect($servername, $dbUsername, $password, $dbName);

if (!$conn) {
  die("connection failed: ".mysqli_connect_error());
}
