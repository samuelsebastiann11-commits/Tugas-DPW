<?php
include "../koneksi.php";

if (isset($_GET["idDosen"])) {
    $id = mysqli_real_escape_string($link, $_GET["idDosen"]);
    
    $query = "SELECT * FROM t_dosen WHERE idDosen = '$id'";
    $result = mysqli_query($link, $query);
    
    if (!$result) {
        die("Query Error: " . mysqli_error($link));
    }
    
    $data = mysqli_fetch_assoc($result);
    
    $idDosen = $data["idDosen"];
    $namaDosen = $data["namaDosen"];
    $noHP = $data["noHP"];
} else {
    header("location: viewdosen.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Dosen</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <div class="container-form">
        <h1>✏️ Edit Data Dosen</h1>

        <form action="pedit_dosen.php" method="post">
            <fieldset>
                <legend>Form Edit Dosen</legend>

                <input type="hidden" name="idDosen" value="<?php echo $idDosen; ?>">

                <label for="idDosenDisabled">ID :</label>
                <input type="text" id="idDosenDisabled" value="<?php echo $idDosen; ?>" disabled>

                <label for="namaDosen">Nama Dosen :</label>
                <input type="text" name="namaDosen" id="namaDosen" value="<?php echo htmlspecialchars($namaDosen); ?>" required>

                <label for="noHP">No HP :</label>
                <input type="text" name="noHP" id="noHP" value="<?php echo htmlspecialchars($noHP); ?>" required>
            </fieldset>

            <div style="display: flex; gap: 12px;">
                <button type="submit" name="edit" value="simpan" class="btn btn-add">🔄 Update</button>
                <a href="viewdosen.php" class="btn btn-edit">❌ Batal</a>
            </div>
        </form>
    </div>
</body>
</html>
<?php mysqli_close($link); ?>