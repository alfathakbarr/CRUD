<?php
// Nama: [Isi Nama Anda]
// NIM : [Isi NIM Anda]

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
