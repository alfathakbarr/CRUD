<?php
// Nama: [Alfath Akbar Yudiantp]
// NIM : [21060123140178]
include "db.php";

$id = $_GET['id'];

// Query delete
$sql = "DELETE FROM mahasiswa WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    header("Location: index.php");
} else {
    echo "Error: " . $conn->error;
}
?>
