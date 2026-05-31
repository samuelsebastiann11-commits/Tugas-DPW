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
        <h1>➕ TAMBAH DATA MAHASISWA</h1>
        <form action="pinput_mahasiswa.php" method="post">
            <fieldset>
                <legend>Form Input Mahasiswa</legend>
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
                <button type="submit" name="input" class="btn btn-add">SIMPAN</button>
                <a href="viewmahasiswa.php" class="btn btn-edit">BATAL</a>
            </div>
        </form>
        <div class="footer"><p>Samuel Aldrik Sebastian | TI 2B | Polinema</p></div>
    </div>
</body>
</html>