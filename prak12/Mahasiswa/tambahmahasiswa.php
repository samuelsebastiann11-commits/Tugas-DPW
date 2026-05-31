<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Mahasiswa</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <div class="container-form">
        <h1>Tambah Mahasiswa</h1>
        <form action="simpan.php" method="post">
            <fieldset>
                <legend>Form Mahasiswa</legend>
                <label>NPM :</label>
                <input type="number" name="npm" required>
                <label>Nama Mahasiswa :</label>
                <input type="text" name="namaMhs" required>
                <label>Program Studi :</label>
                <input type="text" name="prodi" required>
                <label>Alamat :</label>
                <input type="text" name="alamat" required>
                <label>No HP :</label>
                <input type="text" name="noHP">
            </fieldset>
            <div style="display: flex; gap: 12px;">
                <button type="submit" name="submit" class="btn btn-add">Simpan</button>
                <a href="index.php" class="btn btn-edit">Batal</a>
            </div>
        </form>
        <div class="footer"><p>Sistem Informasi Akademik</p></div>
    </div>
</body>
</html>