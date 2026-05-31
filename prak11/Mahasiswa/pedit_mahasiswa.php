<?php
include "../koneksi.php";
if (isset($_POST['edit'])) {
    $npm = mysqli_real_escape_string($link, $_POST['npm']);
    $namaMhs = mysqli_real_escape_string($link, $_POST['namaMhs']);
    $prodi = mysqli_real_escape_string($link, $_POST['prodi']);
    $alamat = mysqli_real_escape_string($link, $_POST['alamat']);
    $noHP = mysqli_real_escape_string($link, $_POST['noHP']);
    
    $query = "UPDATE t_mahasiswa SET namaMhs='$namaMhs', prodi='$prodi', alamat='$alamat', noHP='$noHP' WHERE npm='$npm'";
    if (!mysqli_query($link, $query)) {
        die("Query gagal: " . mysqli_error($link));
    }
    mysqli_close($link);
}
header("location: viewmahasiswa.php");
?>