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

    $gajiPokok = 3250000;
    $tunjangan = 1200000;
    $pajak = 0.1;
    $gajiKotor = $gajiPokok + $tunjangan; //gaji sebelum kena pajak
    $pajakGaji = $gajiKotor * $pajak; //pajak
    $gajiBersih = $gajiKotor - $pajakGaji; //gaji setelah kena pajak

    echo "Setiap bulan, Gaji pokok yang diterima Obi sebesar $gajiPokok, 
    tunjangan jabatan sebesar $tunjangan dan pajaknya penghasilan sebesar $pajak%, 
    total gaji Obi sebelum terkena pajak adalah $gajiKotor, 
    sedangkan potongan pajak Obi adalah sebesar $pajakGaji, 
    jadi gaji bersih yang diterima Obi adalah $gajiBersih.";
    
// PHP Konstanta
    define("nama", "Samuel Aldrik Sebastian");
    echo "<br>" . nama;
    ?>
</body>

</html>