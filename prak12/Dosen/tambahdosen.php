<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Dosen</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <div class="container-form">
        <h1>Tambah Dosen</h1>
        <form action="simpan.php" method="post">
            <fieldset>
                <legend>Form Dosen</legend>
                <label>Nama Dosen :</label>
                <input type="text" name="namaDosen" required>
                <label>No HP :</label>
                <input type="text" name="noHP" required>
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