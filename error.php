<?php
// Nama: [Alfath Akbar Yudiantp]
// NIM : [21060123140178]

$message = isset($_GET['msg']) ? $_GET['msg'] : "Terjadi kesalahan.";
?>

<!doctype html>
<html>
<head>
  <title>Error</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="error-box">
    <h1>⚠ ERROR ⚠</h1>
    <p><?php echo htmlspecialchars($message); ?></p>
    <a href="index.php">⬅ Kembali ke Daftar</a>
  </div>
</body>
</html>
