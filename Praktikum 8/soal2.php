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
    // Total uang yang akan diambil Ani
    $totalUang = 1387500;
    $totalUang2 = 1387500;

    // Array yang berisi nilai pecahan uang
    $pecahanUang = array(100000, 50000, 20000, 10000, 5000, 2000, 500);

    // Inisialisasi array untuk menyimpan banyaknya masing-masing pecahan uang
    $banyakPecahan = array();

    // Loop untuk menghitung banyaknya masing-masing pecahan uang yang diperoleh Ani
    foreach ($pecahanUang as $pecahan) {
        // Hitung banyaknya pecahan uang yang diperoleh Ani
        $jumlahPecahan = floor($totalUang / $pecahan);
        // Simpan hasil ke dalam array
        $banyakPecahan[$pecahan] = $jumlahPecahan;
        // Kurangi total uang dengan nilai pecahan yang sudah dihitung
        $totalUang -= $jumlahPecahan * $pecahan;
    }

    // Tampilkan hasil
    echo "Jumlah tabungan Rp. " . number_format($totalUang2) . "<br>";
    foreach ($banyakPecahan as $pecahan => $jumlah) {
        echo "Jumlah pecahan Rp. " . number_format($pecahan) . " : " . $jumlah . " lembar <br>";
    }
    // PHP Konstanta
    define("nama", "Samuel Aldrik Sebastian");
    echo "<br>" . nama;
    ?>

</body>

</html>