<?php
$dbServerName="localhost";
$dbUserName="id19927465_bojanpet55";
$dbPassword="Piperka51EAnastasija?";
$dbName ="id19927465_product";
$conn = mysqli_connect($dbServerName,$dbUserName,$dbPassword,$dbName);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
