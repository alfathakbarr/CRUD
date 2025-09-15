<?php
// Nama: [Alfath Akbar Yudiantp]
// NIM : [21060123140178]
include "db.php";

// Pagination
$limit = 10;
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$offset = ($page - 1) * $limit;

// Pencarian
$search = isset($_GET['search']) ? $_GET['search'] : "";
$where = "";
if ($search != "") {
    $where = "WHERE nim LIKE '%$search%' OR nama LIKE '%$search%'";
}

// Hitung total data
$countResult = $conn->query("SELECT COUNT(*) as total FROM mahasiswa $where");
$totalData = $countResult->fetch_assoc()['total'];
$totalPages = ceil($totalData / $limit);

// Query data
$sql = "SELECT * FROM mahasiswa $where LIMIT $limit OFFSET $offset";
$result = $conn->query($sql);
?>

<!doctype html>
<html>
<head>
    <title>Daftar Mahasiswa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1>Daftar Mahasiswa</h1>

<form method="get" action="index.php">
    <input type="text" name="search" placeholder="Cari NIM/Nama" value="<?php echo $search; ?>">
    <button type="submit">Cari</button>
</form>
<a href="tambah.php">+ Tambah Mahasiswa</a> | 
<a href="export.php">Export CSV</a>

<table border="1" cellpadding="8" cellspacing="0">
    <tr>
        <th>ID</th><th>NIM</th><th>Nama</th><th>Prodi</th><th>Aksi</th>
    </tr>
    <?php
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()){
            echo "<tr>
                    <td>{$row['id']}</td>
                    <td>{$row['nim']}</td>
                    <td>{$row['nama']}</td>
                    <td>{$row['prodi']}</td>
                    <td>
                        <a href='edit.php?id={$row['id']}'>Edit</a> | 
                        <a href='hapus.php?id={$row['id']}' onclick=\"return confirm('Yakin hapus?')\">Hapus</a>
                    </td>
                  </tr>";
        }
    } else {
        echo "<tr><td colspan='5'>Belum ada data</td></tr>";
    }
    ?>
</table>

<!-- Pagination -->
<div>
    <?php for($i=1; $i<=$totalPages; $i++): ?>
        <a href="?page=<?php echo $i; ?>&search=<?php echo $search; ?>"><?php echo $i; ?></a>
    <?php endfor; ?>
</div>

</body>
</html>
