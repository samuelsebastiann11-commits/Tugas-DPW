<?php
include "../koneksi.php";

if (isset($_GET["kodeMK"])) {
    $id = mysqli_real_escape_string($link, $_GET["kodeMK"]);
    
    $query = "SELECT * FROM t_matakuliah WHERE kodeMK='$id'";
    $result = mysqli_query($link, $query);
    
    if (!$result) {
        die("Query Error: " . mysqli_error($link));
    }
    
    $data = mysqli_fetch_assoc($result);
    
    $kodeMK = $data["kodeMK"];
    $namaMK = $data["namaMK"];
    $sks = $data["sks"];
    $jam = $data["jam"];
} else {
    header("location: viewmatakuliah.php");
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
        <h1>✏️ EDIT DATA MATAKULIAH</h1>
        
        <form action="pedit_matakuliah.php" method="post">
            <fieldset>
                <legend>Form Edit Matakuliah</legend>
                
                <input type="hidden" name="kodeMK" value="<?php echo $kodeMK; ?>">
                
                <label for="kodeMKDisabled">Kode Matakuliah :</label>
                <input type="text" name="kodeMKDisabled" id="kodeMKDisabled" value="<?php echo $kodeMK; ?>" disabled>
                
                <label for="namaMK">Nama Matakuliah :</label>
                <input type="text" name="namaMK" id="namaMK" value="<?php echo htmlspecialchars($namaMK); ?>" required>
                
                <label for="sks">Jumlah SKS :</label>
                <input type="number" name="sks" id="sks" value="<?php echo $sks; ?>" required>
                
                <label for="jam">Jam Per Minggu :</label>
                <input type="number" name="jam" id="jam" value="<?php echo $jam; ?>" required>
            </fieldset>
            
            <div style="display: flex; gap: 12px;">
                <button type="submit" name="edit" class="btn btn-add">🔄 UPDATE</button>
                <a href="viewmatakuliah.php" class="btn btn-edit">❌ BATAL</a>
            </div>
        </form>
        
        <div class="footer">
            <p>Samuel Aldrik Sebastian | Teknologi Informasi | Kelas 2B | Politeknik Negeri Madiun</p>
        </div>
    </div>
</body>
</html>
<?php mysqli_close($link); ?>