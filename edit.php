<?php
// Nama: [Alfath Akbar Yudiantp]
// NIM : [21060123140178]

include "db.php";

$id = $_GET['id'];
$result = $conn->query("SELECT * FROM mahasiswa WHERE id=$id");
$data = $result->fetch_assoc();
?>

<!doctype html>
<html>
<head>
  <title>Edit Mahasiswa</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h1>Edit Mahasiswa</h1>

  <form method="post" action="update.php" class="retro-form">
    <input type="hidden" name="id" value="<?php echo $data['id']; ?>">

    <p>
      <label>NIM:</label><br>
      <input type="text" name="nim" value="<?php echo $data['nim']; ?>" required>
    </p>
    <p>
      <label>Nama:</label><br>
      <input type="text" name="nama" value="<?php echo $data['nama']; ?>" required>
    </p>
    <p>
      <label>Prodi:</label><br>
      <input type="text" name="prodi" value="<?php echo $data['prodi']; ?>" required>
    </p>

    <button type="submit">💾 Update</button>
    <a href="index.php">⬅ Kembali</a>
  </form>
</body>
</html>
