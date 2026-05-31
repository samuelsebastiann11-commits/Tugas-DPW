<?php
include "../koneksi.php";

if (isset($_GET['kodeMK'])) {
    $kodeMK = mysqli_real_escape_string($link, $_GET['kodeMK']);
    
    $query = "DELETE FROM t_matakuliah WHERE kodeMK='$kodeMK'";
    
    if (mysqli_query($link, $query)) {
        // Sukses
    } else {
        die("Gagal menghapus data: " . mysqli_error($link));
    }
    
    mysqli_close($link);
}

header("location: viewmatakuliah.php");
?>