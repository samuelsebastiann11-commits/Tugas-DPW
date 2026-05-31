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

    $warna = "merah";
    switch ($warna) {
        case "merah":
            echo "Warna adalah merah";
            break;
        case "hijau":
            echo "Warna adalah hijau";
            break;
        default:
            echo "Warna tidak dikenal!";
    }
    echo "<br>";
// PHP Konstanta
    define("nama", "Samuel Aldrik Sebastian");
    echo "<br>" . nama;
    ?>
</body>

</html>