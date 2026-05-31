<?php
include "../koneksi.php";

$id = isset($_GET['id']) ? mysqli_real_escape_string($link, $_GET['id']) : 0;
$query = "SELECT * FROM t_matakuliah WHERE kodeMK = '$id'";
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
    <title>Edit Matakuliah</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <div class="container-form">
        <h1>Edit Matakuliah</h1>
        <form action="update.php" method="post">
            <input type="hidden" name="kodeMK" value="<?php echo $data['kodeMK']; ?>">
            <fieldset>
                <legend>Form Edit Matakuliah</legend>
                <label>Kode MK :</label>
                <input type="text" value="<?php echo $data['kodeMK']; ?>" disabled>
                <label>Nama Matakuliah :</label>
                <input type="text" name="namaMK" value="<?php echo htmlspecialchars($data['namaMK']); ?>" required>
                <label>SKS :</label>
                <input type="number" name="sks" value="<?php echo $data['sks']; ?>" required>
                <label>Jam :</label>
                <input type="number" name="jam" value="<?php echo $data['jam']; ?>" required>
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