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
        <h1>➕ Tambah Data Dosen</h1>

        <form action="pinput_dosen.php" method="post">
            <fieldset>
                <legend>Form Input Dosen</legend>

                <label for="namaDosen">Nama Dosen :</label>
                <input type="text" name="namaDosen" id="namaDosen" placeholder="Contoh: Dr. Ahmad Budiman, M.Kom" required>

                <label for="noHP">No HP :</label>
                <input type="text" name="noHP" id="noHP" placeholder="Contoh: 081234567890" required>
            </fieldset>

            <div style="display: flex; gap: 12px;">
                <button type="submit" name="input" value="simpan" class="btn btn-add">💾 Simpan</button>
                <a href="viewdosen.php" class="btn btn-edit">❌ Batal</a>
            </div>
        </form>
    </div>
</body>
</html>