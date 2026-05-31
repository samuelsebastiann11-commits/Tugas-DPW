<?php
include "../koneksi.php";

if (isset($_POST['submit'])) {
    $kode = mysqli_real_escape_string($link, $_POST['kodeMK']);
    $nama = mysqli_real_escape_string($link, $_POST['namaMK']);
    $sks = mysqli_real_escape_string($link, $_POST['sks']);
    $jam = mysqli_real_escape_string($link, $_POST['jam']);
    
    $query = "INSERT INTO t_matakuliah (kodeMK, namaMK, sks, jam) VALUES ('$kode', '$nama', '$sks', '$jam')";
    
    if (mysqli_query($link, $query)) {
        header("Location: index.php");
    } else {
        die("Gagal simpan: " . mysqli_error($link));
    }
    mysqli_close($link);
}
?>