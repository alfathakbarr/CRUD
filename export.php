<?php
// Nama: [Alfath Akbar Yudiantp]
// NIM : [21060123140178]

include "db.php";

// Set header supaya file otomatis ter-download
header("Content-Type: text/csv");
header("Content-Disposition: attachment; filename=mahasiswa.csv");

// Buka output stream
$output = fopen("php://output", "w");

// Tulis header kolom
fputcsv($output, ["ID", "NIM", "Nama", "Prodi"]);

// Ambil data dari database
$result = $conn->query("SELECT * FROM mahasiswa ORDER BY id ASC");
while($row = $result->fetch_assoc()){
    fputcsv($output, $row);
}

// Tutup output stream
fclose($output);
exit;
?>
