<?php
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "duan_quanao";

$conn = mysqli_connect($hostname, $username, $password, $dbname);
if (!$conn) {
  echo "Database connection error" . mysqli_connect_error();
  exit();
} else {
  mysqli_set_charset($conn, 'UTF8');
  return $conn;
}