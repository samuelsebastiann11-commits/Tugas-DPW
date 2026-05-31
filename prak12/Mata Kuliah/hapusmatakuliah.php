<?php
include "../koneksi.php";

$id = isset($_GET['id']) ? mysqli_real_escape_string($link, $_GET['id']) : 0;
$query = "DELETE FROM t_matakuliah WHERE kodeMK='$id'";

if (mysqli_query($link, $query)) {
    header("Location: index.php");
} else {
    die("Gagal hapus: " . mysqli_error($link));
}
mysqli_close($link);
?>