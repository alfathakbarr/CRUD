<?php
include "db.php";

$nim  = $_POST['nim'];
$nama = $_POST['nama'];
$prodi= $_POST['prodi'];

// Cek NIM unik
$check = $conn->query("SELECT * FROM mahasiswa WHERE nim='$nim'");
if ($check->num_rows > 0) {
    echo "Error: NIM sudah ada. <a href='tambah.php'>Kembali</a>";
    exit;
}

$sql = "INSERT INTO mahasiswa (nim,nama,prodi) VALUES ('$nim','$nama','$prodi')";
if ($conn->query($sql) === TRUE) {
    header("Location: index.php");
} else {
    echo "Error: " . $conn->error;
}
if ($conn->query($sql) === TRUE) {
    header("Location: index.php");
} else {
    $msg = urlencode("Gagal menyimpan data: " . $conn->error);
    header("Location: error.php?msg=$msg");
}

?>

