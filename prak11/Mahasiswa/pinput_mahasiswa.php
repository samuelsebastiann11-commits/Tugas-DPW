<?php
include "../koneksi.php";
if (isset($_POST['input'])) {
    $npm = mysqli_real_escape_string($link, $_POST['npm']);
    $namaMhs = mysqli_real_escape_string($link, $_POST['namaMhs']);
    $prodi = mysqli_real_escape_string($link, $_POST['prodi']);
    $alamat = mysqli_real_escape_string($link, $_POST['alamat']);
    $noHP = mysqli_real_escape_string($link, $_POST['noHP']);
    
    $query = "INSERT INTO t_mahasiswa (npm, namaMhs, prodi, alamat, noHP) VALUES ('$npm', '$namaMhs', '$prodi', '$alamat', '$noHP')";
    if (!mysqli_query($link, $query)) {
        die("Query gagal: " . mysqli_error($link));
    }
    mysqli_close($link);
}
header("location: viewmahasiswa.php");
?>