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
    // Tampilkan poin siswa dengan nomor urut 5
    $students = [
        ["no" => 1, "name" => "Adi", "score" => 75],
        ["no" => 2, "name" => "Joni", "score" => 80],
        ["no" => 3, "name" => "Jihan", "score" => 65],
        ["no" => 4, "name" => "Aya", "score" => 70],
        ["no" => 5, "name" => "Ita", "score" => 85],
        ["no" => 6, "name" => "Budi", "score" => 90],
        ["no" => 7, "name" => "Tini", "score" => 95],
        ["no" => 8, "name" => "Sari", "score" => 65]
    ];

    foreach ($students as $student) {
        if ($student["no"] == 5) {
            echo "Poin siswa dengan nomor urut 5 : " . $student["score"] . PHP_EOL . "<br>";
        }
    }
    //Tampilkan semua nama siswa yang memiliki poin 90
    foreach ($students as $student) {
        if ($student["score"] == 90) {
            echo "Nama siswa yang memiliki poin 90 : " . $student["name"] . PHP_EOL . "<br>";
        }
    }
    //Tampilkan semua nama siswa yang memiliki poin 100 (hasil: tidak ada)
    foreach ($students as $student) {
        if ($student["score"] == 100) {
            echo "Nama siswa yang memiliki poin 100 : " . $student["name"] . PHP_EOL;
        }
    }
    echo "Nama siswa yang memiliki poin 100 : Tidak Ada" . PHP_EOL;

// PHP Konstanta
    define("nama", "Samuel Aldrik Sebastian");
    echo "<br>" . nama;
    ?>
</body>

</html>