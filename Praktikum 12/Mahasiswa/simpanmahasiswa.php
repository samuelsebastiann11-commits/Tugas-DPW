<?php
include "../koneksi.php";

if (isset($_POST['submit'])) {
    $npm = mysqli_real_escape_string($link, $_POST['npm']);
    $nama = mysqli_real_escape_string($link, $_POST['namaMhs']);
    $prodi = mysqli_real_escape_string($link, $_POST['prodi']);
    $alamat = mysqli_real_escape_string($link, $_POST['alamat']);
    $no_hp = mysqli_real_escape_string($link, $_POST['noHP']);
    
    $query = "INSERT INTO t_mahasiswa VALUES ('$npm', '$nama', '$prodi', '$alamat', '$no_hp')";
    
    if (mysqli_query($link, $query)) {
        header("Location: index.php");
    } else {
        die("Gagal simpan: " . mysqli_error($link));
    }
    mysqli_close($link);
}
?>