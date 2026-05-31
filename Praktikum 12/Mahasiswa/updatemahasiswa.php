<?php
include "../koneksi.php";

if (isset($_POST['submit'])) {
    $npm = mysqli_real_escape_string($link, $_POST['npm']);
    $nama = mysqli_real_escape_string($link, $_POST['namaMhs']);
    $prodi = mysqli_real_escape_string($link, $_POST['prodi']);
    $alamat = mysqli_real_escape_string($link, $_POST['alamat']);
    $no_hp = mysqli_real_escape_string($link, $_POST['noHP']);
    
    $query = "UPDATE t_mahasiswa SET namaMhs='$nama', prodi='$prodi', alamat='$alamat', noHP='$no_hp' WHERE npm='$npm'";
    
    if (mysqli_query($link, $query)) {
        header("Location: index.php");
    } else {
        die("Gagal update: " . mysqli_error($link));
    }
    mysqli_close($link);
}
?>