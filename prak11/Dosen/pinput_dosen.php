<?php
include "../koneksi.php";

if (isset($_POST['input'])) {
    $namaDosen = mysqli_real_escape_string($link, $_POST['namaDosen']);
    $noHP = mysqli_real_escape_string($link, $_POST['noHP']);

    $query = "INSERT INTO t_dosen (namaDosen, noHP) VALUES ('$namaDosen', '$noHP')";
    $result = mysqli_query($link, $query);

    if (!$result) {
        die("Query gagal: " . mysqli_error($link));
    }
    
    mysqli_close($link);
}

header("location: viewdosen.php");
?>