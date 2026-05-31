<?php
include "../koneksi.php";

if (isset($_POST['edit'])) {
    $kodeMK = mysqli_real_escape_string($link, $_POST['kodeMK']);
    $namaMK = mysqli_real_escape_string($link, $_POST['namaMK']);
    $sks = mysqli_real_escape_string($link, $_POST['sks']);
    $jam = mysqli_real_escape_string($link, $_POST['jam']);
    
    $query = "UPDATE t_matakuliah SET namaMK='$namaMK', sks='$sks', jam='$jam' WHERE kodeMK='$kodeMK'";
    
    if (mysqli_query($link, $query)) {
        // Sukses
    } else {
        die("Query gagal dijalankan: " . mysqli_error($link));
    }
    
    mysqli_close($link);
}

header("location: viewmatakuliah.php");
?>