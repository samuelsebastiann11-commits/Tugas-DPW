<?php
include "../koneksi.php";

$keyword = isset($_GET['keyword']) ? mysqli_real_escape_string($link, $_GET['keyword']) : '';

if ($keyword != '') {
    $query = "SELECT * FROM t_dosen WHERE namaDosen LIKE '%$keyword%' ORDER BY idDosen ASC";
    $result = mysqli_query($link, $query);
} else {
    $query = "SELECT * FROM t_dosen ORDER BY idDosen ASC";
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
    <title>Data Dosen</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <div class="container">
        <h1>👨‍🏫 Data Dosen</h1>

        <div class="search-container">
            <a href="../index.php" class="btn btn-primary">← Kembali</a>

            <form action="viewdosen.php" method="get" class="search-form">
                <input type="text" name="keyword" placeholder="Cari nama dosen..." value="<?php echo htmlspecialchars($keyword); ?>">
                <button type="submit" class="btn btn-primary">Cari</button>
                <?php if($keyword): ?>
                    <a href="viewdosen.php" class="btn btn-edit">Reset</a>
                <?php endif; ?>
            </form>

            <a href="input.php" class="btn btn-add">+ Tambah Dosen</a>
        </div>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Dosen</th>
                    <th>No HP</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php if (mysqli_num_rows($result) > 0): ?>
                    <?php while($data = mysqli_fetch_assoc($result)): ?>
                        <tr>
                            <td><?php echo $data['idDosen']; ?></td>
                            <td><?php echo htmlspecialchars($data['namaDosen']); ?></td>
                            <td><?php echo htmlspecialchars($data['noHP']); ?></td>
                            <td class="table-actions">
                                <a href="editdosen.php?idDosen=<?php echo $data['idDosen']; ?>" class="btn btn-edit">Edit</a>
                                <a href="hapusdosen.php?idDosen=<?php echo $data['idDosen']; ?>" class="btn btn-delete" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="4" style="text-align: center;">⚠️ Data tidak ditemukan</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
<?php mysqli_close($link); ?>