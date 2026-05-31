<?php
include "../koneksi.php";

if (isset($_POST['submit'])) {
    $id = mysqli_real_escape_string($link, $_POST['idDosen']);
    $nama = mysqli_real_escape_string($link, $_POST['namaDosen']);
    $no_hp = mysqli_real_escape_string($link, $_POST['noHP']);
    
    $query = "UPDATE t_dosen SET namaDosen='$nama', noHP='$no_hp' WHERE idDosen='$id'";
    
    if (mysqli_query($link, $query)) {
        header("Location: index.php");
    } else {
        die("Gagal update: " . mysqli_error($link));
    }
    mysqli_close($link);
}
?>