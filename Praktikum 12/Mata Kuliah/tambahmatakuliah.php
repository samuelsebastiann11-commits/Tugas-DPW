<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Matakuliah</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <div class="container-form">
        <h1>Tambah Matakuliah</h1>
        <form action="simpan.php" method="post">
            <fieldset>
                <legend>Form Matakuliah</legend>
                <label>Kode MK :</label>
                <input type="number" name="kodeMK" required>
                <label>Nama Matakuliah :</label>
                <input type="text" name="namaMK" required>
                <label>SKS :</label>
                <input type="number" name="sks" required>
                <label>Jam :</label>
                <input type="number" name="jam" required>
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