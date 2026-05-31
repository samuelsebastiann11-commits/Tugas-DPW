<?php
include "../koneksi.php";

$cari = isset($_GET['cari']) ? mysqli_real_escape_string($link, $_GET['cari']) : '';

if ($cari != '') {
    $query = "SELECT * FROM t_matakuliah WHERE namaMK LIKE '%$cari%' ORDER BY kodeMK ASC";
    $result = mysqli_query($link, $query);
} else {
    $query = "SELECT * FROM t_matakuliah ORDER BY kodeMK ASC";
    $result = mysqli_query($link, $query);
}

if (!$result) {
    die("Query Error: " . mysqli_error($link));
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Matakuliah</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <div class="container">
        <h1>Data Matakuliah</h1>
        
        <div class="search-container">
            <a href="../index.php" class="btn btn-primary">Kembali</a>
            <form action="index.php" method="get" class="search-form">
                <input type="text" name="cari" placeholder="Cari nama matakuliah..." value="<?php echo htmlspecialchars($cari); ?>">
                <button type="submit" class="btn btn-primary">Cari</button>
                <?php if($cari): ?>
                    <a href="index.php" class="btn btn-edit">Reset</a>
                <?php endif; ?>
            </form>
            <a href="tambah.php" class="btn btn-add">Tambah Matakuliah</a>
        </div>
        
        <table>
            <thead>
                <tr>
                    <th>Kode MK</th>
                    <th>Nama Matakuliah</th>
                    <th>SKS</th>
                    <th>Jam</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php if (mysqli_num_rows($result) > 0): ?>
                    <?php while($row = mysqli_fetch_assoc($result)): ?>
                        <tr>
                            <td><?php echo $row['kodeMK']; ?></td>
                            <td><?php echo htmlspecialchars($row['namaMK']); ?></td>
                            <td><?php echo $row['sks']; ?> SKS</td
                            <td><?php echo $row['jam']; ?> Jam</td
                            <td class="table-actions">
                                <a href="edit.php?id=<?php echo $row['kodeMK']; ?>" class="btn btn-edit">Edit</a>
                                <a href="hapus.php?id=<?php echo $row['kodeMK']; ?>" class="btn btn-delete" onclick="return confirm('Yakin hapus?')">Hapus</a>
                            </td
                        </tr
                    <?php endwhile; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="5" style="text-align:center;">Data tidak ditemukan</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
        <div class="footer"><p>Sistem Informasi Akademik</p></div>
    </div>
</body>
</html>
<?php mysqli_close($link); ?>