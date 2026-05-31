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

    // data kelas dengan array 2 dimensi
    $array = array(
        "1B" => ["Samuel", "Aldrik", "Sebastian"],
        "2B" => ["Tesalonika", "Agnes", "Imelda"]
    );

    // menampilkan data array
    print_r($array);

    echo "<br>";
    
    // menampilkan kelas 1B
    print_r($array['1B']);

    echo "<br>";
    
    // menampilkan kelas 2B dengan index 0
    echo $array['2B'][0] . "<br>";
    //tampilkan Aldrik
    echo $array['1B'][1] . "<br>";
    //tampilkan Tesalonika
    echo $array['2B'][0] . "<br>";

    // data kelas bisa ditulis juga dengan
    $array_simple = [
        "1B" => ["Samuel", "Aldrik", "Sebastian"],
        "2B" => ["Tesalonika", "Agnes", "Imelda"]
    ];
 // PHP Konstanta
    define("nama", "Samuel Aldrik Sebastian");
    echo "<br>" . nama;
    ?>
</body>

</html>