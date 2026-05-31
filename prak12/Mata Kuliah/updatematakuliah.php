<?php
include "../koneksi.php";

if (isset($_POST['submit'])) {
    $kode = mysqli_real_escape_string($link, $_POST['kodeMK']);
    $nama = mysqli_real_escape_string($link, $_POST['namaMK']);
    $sks = mysqli_real_escape_string($link, $_POST['sks']);
    $jam = mysqli_real_escape_string($link, $_POST['jam']);
    
    $query = "UPDATE t_matakuliah SET namaMK='$nama', sks='$sks', jam='$jam' WHERE kodeMK='$kode'";
    
    if (mysqli_query($link, $query)) {
        header("Location: index.php");
    } else {
        die("Gagal update: " . mysqli_error($link));
    }
    mysqli_close($link);
}
?>