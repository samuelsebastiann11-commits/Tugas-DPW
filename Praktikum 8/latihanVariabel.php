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
    $h1 = "Senin";
    $h2 = "Selasa";
    $h3 = "Rabu";
    $h4 = "Kamis";
    $h5 = "Jum'at";
    $h6 = "Sabtu";
    $h7 = "Minggu";
    echo "Hari ini adalah hari $h1 <br>";
    echo "Setelah hari $h1 adalah hari $h2 <br>";
    echo "Setelah hari $h2 adalah hari $h3 <br>";
    echo "Setelah hari $h3 adalah hari $h4 <br>";
    echo "Setelah hari $h4 adalah hari $h5 <br>";
    echo "Setelah hari $h5 adalah hari $h6 <br>";
    echo "Setelah hari $h6 adalah hari $h7 <br>";
    
    // PHP Konstanta
    define("nama", "Samuel Aldrik Sebastian");
    echo "<br>" . nama;
    ?>
</body>

</html>