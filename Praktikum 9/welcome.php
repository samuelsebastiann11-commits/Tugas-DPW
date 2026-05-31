<?php
session_start();

// Memeriksa apakah pengguna sudah login
if (!isset($_SESSION["username"])) {
    // Jika belum, redirect ke halaman login
    header("Location: login.html");
    exit();
}

// Mengambil username dari session
$username = $_SESSION["username"];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Welcome, <?php echo $username; ?></h2>
    <p>Granada dikalahkan Real Madrid dalam laga pekan ke-35 Liga Spanyol 2023/24 di Nuevo Estadio de Los Carmenes pada Sabtu (11/5) malam WIB. Skor akhir 0-4.
        Dengan hasil ini, Real Madrid yang telah mengunci titel Liga Spanyol berada di puncak dengan 90 poin. Sementara, Granada menempati urutan 19 dengan 21 poin.</p>
    <a href="session.html">Logout</a>
</body>

</html>