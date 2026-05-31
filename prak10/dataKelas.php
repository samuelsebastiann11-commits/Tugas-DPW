<?php
require_once 'kelas/Mahasiswa.php';

$mhs = new Mahasiswa();
$mhs->setNama("Samuel Aldrik Sebastian");
$mhs->setUmur(20);
$mhs->setNim("253307057");
$mhs->setJurusan("Teknologi Informasi");
$mhs->setFakultas("Vokasi");
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Kelas</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #1e3c72;
            padding: 20px;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
        }
        .card {
            background: white;
            border-radius: 12px;
            padding: 25px;
            margin-bottom: 20px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        }
        h1 {
            color: white;
            text-align: center;
            margin-bottom: 20px;
        }
        h2 {
            color: #1e3c72;
            border-bottom: 2px solid #1e3c72;
            padding-bottom: 8px;
            margin-bottom: 15px;
        }
        .info {
            background: #e8f0fe;
            padding: 15px;
            border-radius: 8px;
            margin: 15px 0;
            line-height: 1.8;
        }
        .footer {
            background: #fff8e1;
            padding: 15px;
            border-radius: 8px;
            margin-top: 15px;
            line-height: 1.8;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Data Kelas (Inheritance)</h1>
        
        <div class="card">
            <h2>Data Mahasiswa</h2>
            
            <div class="info">
                <?php $mhs->tampilkanDataMahasiswa(); ?>
            </div>
            
            <div class="footer">
                <strong>Kampus:</strong> Politeknik Negeri Madiun
            </div>
        </div>
    </div>
</body>
</html>