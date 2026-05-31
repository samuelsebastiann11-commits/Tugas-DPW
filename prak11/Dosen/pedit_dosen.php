<?php
include "../koneksi.php";

if (isset($_POST['edit'])) {
    $id = mysqli_real_escape_string($link, $_POST['idDosen']);
    $namaDosen = mysqli_real_escape_string($link, $_POST['namaDosen']);
    $noHP = mysqli_real_escape_string($link, $_POST['noHP']);

    $query = "UPDATE t_dosen SET namaDosen = '$namaDosen', noHP = '$noHP' WHERE idDosen = '$id'";
    $result = mysqli_query($link, $query);

    if (!$result) {
        die("Query gagal: " . mysqli_error($link));
    }
    
    mysqli_close($link);
}

header("location: viewdosen.php");
?>