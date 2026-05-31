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

    // contoh fungsi
    function writeMsg($nama)
    {
        echo "Selamat datang " . $nama . "<br>";
    }
    writeMsg("Samuel"); // pemanggilan fungsi

    // fungsi dengan mengirim nilai balik
    function tambah(int $angka1, int $angka2)
    {
        $a = $angka1 + $angka2;
        return $a; //mengirim nilai $a ke pemanggil
    }
    $hasil = tambah(19, 22);
    echo ($hasil);
 // PHP Konstanta
    define("nama", "Samuel Aldrik Sebastian");
    echo "<br>" . nama;
    ?>
</body>

</html>