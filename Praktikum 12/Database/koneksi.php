<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "db_akademik";

$link = mysqli_connect($host, $user, $pass, $db);

if (!$link) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

mysqli_set_charset($link, "utf8");
?>