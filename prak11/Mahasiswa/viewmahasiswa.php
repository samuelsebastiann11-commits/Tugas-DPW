<?php
include "../koneksi.php";

$keyword = isset($_GET['keyword']) ? mysqli_real_escape_string($link, $_GET['keyword']) : '';

if ($keyword != '') {
    $query = "SELECT * FROM t_mahasiswa WHERE namaMhs LIKE '%$keyword%' ORDER BY npm ASC";
    $result = mysqli_query($link, $query);
} else {
    $query = "SELECT * FROM t_mahasiswa ORDER BY npm ASC";
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
    <title>Data Mahasiswa</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <div class="container">
        <h1>👨‍🎓 DATA MAHASISWA</h1>
        
        <div class="search-container">
            <a href="../index.php" class="btn btn-primary">← KEMBALI</a>
            <form action="viewmahasiswa.php" method="get" class="search-form">
                <input type="text" name="keyword" placeholder="Cari nama mahasiswa..." value="<?php echo htmlspecialchars($keyword); ?>">
                <button type="submit" class="btn btn-primary">CARI</button>
                <?php if($keyword): ?>
                    <a href="viewmahasiswa.php" class="btn btn-edit">RESET</a>
                <?php endif; ?>
            </form>
            <a href="input.php" class="btn btn-add">+ TAMBAH MAHASISWA</a>
        </div>
        
        <table>
            <thead>
                <tr><th>NPM</th><th>Nama Mahasiswa</th><th>Prodi</th><th>Alamat</th><th>No HP</th><th>Aksi</th></tr>
            </thead>
            <tbody>
                <?php if (mysqli_num_rows($result) > 0): ?>
                    <?php while($data = mysqli_fetch_assoc($result)): ?>
                        <tr>
                            <td><?php echo $data['npm']; ?></td>
                            <td><?php echo htmlspecialchars($data['namaMhs']); ?></td>
                            <td><?php echo htmlspecialchars($data['prodi']); ?></td>
                            <td><?php echo htmlspecialchars($data['alamat']); ?></td>
                            <td><?php echo htmlspecialchars($data['noHP']); ?></td>
                            <td class="table-actions">
                                <a href="editmahasiswa.php?npm=<?php echo $data['npm']; ?>" class="btn btn-edit">EDIT</a>
                                <a href="hapusmahasiswa.php?npm=<?php echo $data['npm']; ?>" class="btn btn-delete" onclick="return confirm('Yakin hapus?')">HAPUS</a>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                <?php else: ?>
                    <tr><td colspan="6" style="text-align:center;">Data tidak ditemukan</td></tr>
                <?php endif; ?>
            </tbody>
        </table>
        <div class="footer"><p>Samuel Aldrik Sebastian | TI 2B | Polinema</p></div>
    </div>
</body>
</html>
<?php mysqli_close($link); ?>