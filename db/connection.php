<?php
$servername = "localhost";
$username = "root";
$password = "admin";
$db_name = "imovelguide";
$conn = new mysqli($servername, $username, $password, $db_name, 3333);
if ($conn->connect_error) {
  die('Connection failed: ' . $conn->connect_error);
}
