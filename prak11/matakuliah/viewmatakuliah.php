<?php
include "../koneksi.php";

$keyword = isset($_GET['keyword']) ? mysqli_real_escape_string($link, $_GET['keyword']) : '';

if ($keyword != '') {
    $query = "SELECT * FROM t_matakuliah WHERE namaMK LIKE '%$keyword%' ORDER BY kodeMK ASC";
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
        <h1>📖 DATA MATAKULIAH</h1>
        
        <div class="search-container">
            <a href="../index.php" class="btn btn-primary">← KEMBALI</a>
            <form action="viewmatakuliah.php" method="get" class="search-form">
                <input type="text" name="keyword" placeholder="🔍 Cari nama matakuliah..." value="<?php echo htmlspecialchars($keyword); ?>">
                <button type="submit" class="btn btn-primary">CARI</button>
                <?php if($keyword): ?>
                    <a href="viewmatakuliah.php" class="btn btn-edit">RESET</a>
                <?php endif; ?>
            </form>
            <a href="input.php" class="btn btn-add">+ TAMBAH MATAKULIAH</a>
        </div>
        
        <table>
            <thead>
                <tr>
                    <th>Kode MK</th>
                    <th>Nama Matakuliah</th>
                    <th>SKS</th>
                    <th>Jam/Minggu</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php if (mysqli_num_rows($result) > 0): ?>
                    <?php while($data = mysqli_fetch_assoc($result)): ?>
                        <tr>
                            <td><?php echo $data['kodeMK']; ?></td
                            <td><?php echo htmlspecialchars($data['namaMK']); ?></td
                            <td><?php echo $data['sks']; ?> SKS</td
                            <td><?php echo $data['jam']; ?> Jam</td
                            <td class="table-actions">
                                <a href="editmatakuliah.php?kodeMK=<?php echo $data['kodeMK']; ?>" class="btn btn-edit">EDIT</a>
                                <a href="hapusmatakuliah.php?kodeMK=<?php echo $data['kodeMK']; ?>" class="btn btn-delete" onclick="return confirm('Yakin ingin menghapus data ini?')">HAPUS</a>
                            </td
                        </tr
                    <?php endwhile; ?>
                <?php else: ?>
                    <tr
                        <td colspan="5" style="text-align: center;">⚠️ Data tidak ditemukan</td
                    </tr
                <?php endif; ?>
            </tbody>
        </table
        <div class="footer">
            <p>Samuel Aldrik Sebastian | Teknologi Informasi | Kelas 2B | Politeknik Negeri Madiun</p>
        </div>
    </div>
</body>
</html>
<?php mysqli_close($link); ?>