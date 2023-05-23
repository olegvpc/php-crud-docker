<?php
$host = 'host.docker.internal';
// $host = 'mysql';
$databaseName = 'php_crud';
$user = 'root';
$pass = 'root';
$port = 3306;

// Open a new connection to the MySQL server
$mysqli = mysqli_connect($host, $user, $pass, $databaseName, $port);
// $conn = new mysqli($host, $user, $pass);

if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
  }

// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// } 
// echo "Connected to MySQL successfully!";
?>