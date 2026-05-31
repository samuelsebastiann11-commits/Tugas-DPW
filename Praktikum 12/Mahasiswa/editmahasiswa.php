<?php
include "../koneksi.php";

$id = isset($_GET['id']) ? mysqli_real_escape_string($link, $_GET['id']) : 0;
$query = "SELECT * FROM t_mahasiswa WHERE npm = '$id'";
$result = mysqli_query($link, $query);
$data = mysqli_fetch_assoc($result);

if (!$data) {
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Mahasiswa</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <div class="container-form">
        <h1>Edit Mahasiswa</h1>
        <form action="update.php" method="post">
            <input type="hidden" name="npm" value="<?php echo $data['npm']; ?>">
            <fieldset>
                <legend>Form Edit Mahasiswa</legend>
                <label>Nama Mahasiswa :</label>
                <input type="text" name="namaMhs" value="<?php echo htmlspecialchars($data['namaMhs']); ?>" required>
                <label>Program Studi :</label>
                <input type="text" name="prodi" value="<?php echo htmlspecialchars($data['prodi']); ?>" required>
                <label>Alamat :</label>
                <input type="text" name="alamat" value="<?php echo htmlspecialchars($data['alamat']); ?>" required>
                <label>No HP :</label>
                <input type="text" name="noHP" value="<?php echo htmlspecialchars($data['noHP']); ?>">
            </fieldset>
            <div style="display: flex; gap: 12px;">
                <button type="submit" name="submit" class="btn btn-add">Update</button>
                <a href="index.php" class="btn btn-edit">Batal</a>
            </div>
        </form>
        <div class="footer"><p>Sistem Informasi Akademik</p></div>
    </div>
</body>
</html>
<?php mysqli_close($link); ?>