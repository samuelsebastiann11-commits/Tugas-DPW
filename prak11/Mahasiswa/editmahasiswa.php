<?php
include "../koneksi.php";
if (isset($_GET["npm"])) {
    $id = mysqli_real_escape_string($link, $_GET["npm"]);
    $query = "SELECT * FROM t_mahasiswa WHERE npm='$id'";
    $result = mysqli_query($link, $query);
    if (!$result) die("Query Error: " . mysqli_error($link));
    $data = mysqli_fetch_assoc($result);
    $npm = $data["npm"];
    $namaMhs = $data["namaMhs"];
    $prodi = $data["prodi"];
    $alamat = $data["alamat"];
    $noHP = $data["noHP"];
} else {
    header("location: viewmahasiswa.php");
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
        <h1>✏️ EDIT DATA MAHASISWA</h1>
        <form action="pedit_mahasiswa.php" method="post">
            <fieldset>
                <legend>Form Edit Mahasiswa</legend>
                <input type="hidden" name="npm" value="<?php echo $npm; ?>">
                <label>NPM :</label>
                <input type="text" value="<?php echo $npm; ?>" disabled>
                <label>Nama Mahasiswa :</label>
                <input type="text" name="namaMhs" value="<?php echo htmlspecialchars($namaMhs); ?>" required>
                <label>Program Studi :</label>
                <input type="text" name="prodi" value="<?php echo htmlspecialchars($prodi); ?>" required>
                <label>Alamat :</label>
                <input type="text" name="alamat" value="<?php echo htmlspecialchars($alamat); ?>" required>
                <label>No HP :</label>
                <input type="text" name="noHP" value="<?php echo htmlspecialchars($noHP); ?>">
            </fieldset>
            <div style="display: flex; gap: 12px;">
                <button type="submit" name="edit" class="btn btn-add">UPDATE</button>
                <a href="viewmahasiswa.php" class="btn btn-edit">BATAL</a>
            </div>
        </form>
        <div class="footer"><p>Samuel Aldrik Sebastian | TI 2B | Politeknik Negeri Madiun</p></div>
    </div>
</body>
</html>
<?php mysqli_close($link); ?>