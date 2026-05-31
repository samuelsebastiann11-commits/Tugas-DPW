<?php
include "../koneksi.php";
if (isset($_GET['npm'])) {
    $npm = mysqli_real_escape_string($link, $_GET['npm']);
    $query = "DELETE FROM t_mahasiswa WHERE npm='$npm'";
    if (!mysqli_query($link, $query)) {
        die("Gagal hapus: " . mysqli_error($link));
    }
    mysqli_close($link);
}
header("location: viewmahasiswa.php");
?>