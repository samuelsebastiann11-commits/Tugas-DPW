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
        <h1>➕ TAMBAH DATA MATAKULIAH</h1>
        
        <form action="pinput_matakuliah.php" method="post">
            <fieldset>
                <legend>Form Input Matakuliah</legend>
                
                <label for="kodeMK">Kode Matakuliah :</label>
                <input type="number" name="kodeMK" id="kodeMK" placeholder="Contoh: 101" required>
                
                <label for="namaMK">Nama Matakuliah :</label>
                <input type="text" name="namaMK" id="namaMK" placeholder="Contoh: Pemrograman Web" required>
                
                <label for="sks">Jumlah SKS :</label>
                <input type="number" name="sks" id="sks" placeholder="Contoh: 3" required>
                
                <label for="jam">Jam Per Minggu :</label>
                <input type="number" name="jam" id="jam" placeholder="Contoh: 6" required>
            </fieldset>
            
            <div style="display: flex; gap: 12px;">
                <button type="submit" name="input" class="btn btn-add">💾 SIMPAN</button>
                <a href="viewmatakuliah.php" class="btn btn-edit">❌ BATAL</a>
            </div>
        </form>
        
        <div class="footer">
            <p>Samuel Aldrik Sebastian | Teknologi Informasi | Kelas 2B | Politeknik Negeri Madiun</p>
        </div>
    </div>
</body>
</html>