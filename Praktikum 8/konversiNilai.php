<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Belajar PHP">
    <meta name="keywords" content="253307057">
    <meta name="author" content="Samuel Aldrik Sebastian">
    <link rel="icon" href="gambar/logopnm.png">
    <title>Latihan PHP</title>
</head>

<body>
    <h1>Halaman PHP Saya</h1>

    <?php

    $nilai = 22;

    if ($nilai <= 59) {
        echo "Konversi nilai anda adalah C";
    } elseif ($nilai <= 69) {
        echo "Konversi nilai anda adalah BC";
    } elseif ($nilai <= 79) {
        echo "Konversi nilai anda adalah B";
    } elseif ($nilai <= 89) {
        echo "Konversi nilai anda adalah AB";
    } else {
        echo "Konversi nilai anda adalah A";
    }
// PHP Konstanta
    define("nama", "Samuel Aldrik Sebastian");
    echo "<br>" . nama;
    ?>
</body>

</html>