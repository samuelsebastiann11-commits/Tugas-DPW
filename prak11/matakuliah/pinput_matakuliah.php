<?php
include "../koneksi.php";

if (isset($_POST['input'])) {
    $kodeMK = mysqli_real_escape_string($link, $_POST['kodeMK']);
    $namaMK = mysqli_real_escape_string($link, $_POST['namaMK']);
    $sks = mysqli_real_escape_string($link, $_POST['sks']);
    $jam = mysqli_real_escape_string($link, $_POST['jam']);
    
    $query = "INSERT INTO t_matakuliah (kodeMK, namaMK, sks, jam) VALUES ('$kodeMK', '$namaMK', '$sks', '$jam')";
    
    if (mysqli_query($link, $query)) {
        // Sukses
    } else {
        die("Query gagal dijalankan: " . mysqli_error($link));
    }
    
    mysqli_close($link);
}

header("location: viewmatakuliah.php");
?>