<?php
$servername = getenv('DB_HOST') ?: 'db';
$database = getenv('DB_NAME') ?: 'netzone';
$username = getenv('DB_USER') ?: 'root';
$password = getenv('DB_PASSWORD') ?: '';

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Koneksi database gagal.");
}

$conn->set_charset('utf8mb4');

return $conn;
