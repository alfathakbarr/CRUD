<?php
// Nama: [Isi Nama Anda]
// NIM : [Isi NIM Anda]

include "db.php";

$id   = $_POST['id'];
$nim  = $_POST['nim'];
$nama = $_POST['nama'];
$prodi= $_POST['prodi'];

// Update data
$sql = "UPDATE mahasiswa SET nim='$nim', nama='$nama', prodi='$prodi' WHERE id=$id";
if ($conn->query($sql) === TRUE) {
    header("Location: index.php");
} else {
    echo "Error: " . $conn->error;
}
?>
