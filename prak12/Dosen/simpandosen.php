<?php
include "../koneksi.php";

if (isset($_POST['submit'])) {
    $nama = mysqli_real_escape_string($link, $_POST['namaDosen']);
    $no_hp = mysqli_real_escape_string($link, $_POST['noHP']);
    
    $query = "INSERT INTO t_dosen (namaDosen, noHP) VALUES ('$nama', '$no_hp')";
    
    if (mysqli_query($link, $query)) {
        header("Location: index.php");
    } else {
        die("Gagal simpan: " . mysqli_error($link));
    }
    mysqli_close($link);
}
?>