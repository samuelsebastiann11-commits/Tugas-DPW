<?php
include "../koneksi.php";

if (isset($_GET['idDosen'])) {
    $id = mysqli_real_escape_string($link, $_GET['idDosen']);

    $query = "DELETE FROM t_dosen WHERE idDosen = '$id'";
    $result = mysqli_query($link, $query);

    if (!$result) {
        die("Gagal menghapus: " . mysqli_error($link));
    }
    
    mysqli_close($link);
}

header("location: viewdosen.php");
?>