<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Belajar PHP">
    <meta name="keywords" content="253307057">
    <meta name="author" content="Samuel Aldrik Sebastian">
    <link rel="icon" href="gambar/logopnm.png">
    <title> Latihan PHP</title>
</head>

<body>
    <h1>Halaman PHP Saya</h1>

    <?php

    $nomor = 5;
    switch ($nomor) {
        case 1:
            echo "Satu";
            break;
        case 2:
            echo "Dua";
            break;
        case 3:
            echo "Tiga";
            break;
        case 4:
            echo "Empat";
            break;
        case 5:
            echo "Lima";
            break;
        case 6:
            echo "Enam";
            break;
        case 7:
            echo "Tujuh";
            break;
        case 8:
            echo "Delapan";
            break;
        case 9:
            echo "Sembilan";
            break;
        default:
            echo "Nomor tidak dikenal!";
    }
    echo "<br>";
// PHP Konstanta
    define("nama", "Samuel Aldrik Sebastian");
    echo "<br>" . nama;
    ?>
</body>

</html>