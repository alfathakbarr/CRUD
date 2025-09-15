
<!doctype html>
<html>
<head>
  <title>Tambah Mahasiswa</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h1>Tambah Mahasiswa</h1>

  <form method="post" action="simpan.php" class="retro-form">
    <p>
      <label>NIM:</label><br>
      <input type="text" name="nim" required>
    </p>
    <p>
      <label>Nama:</label><br>
      <input type="text" name="nama" required>
    </p>
    <p>
      <label>Prodi:</label><br>
      <input type="text" name="prodi" required>
    </p>
    <button type="submit">💾 Simpan</button>
    <a href="index.php">⬅ Kembali</a>
  </form>
</body>
</html>
