<?php
// Nama: [Alfath Akbar Yudiantp]
// NIM : [21060123140178]

$host = "localhost";
$user = "root";
$pass = "";
$db   = "kampus";

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
