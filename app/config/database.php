<?php
$servername = "db";
$database = "netzone";
$username = "root";
$password = "root";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

$conn->set_charset('utf8mb4');
return $conn;

