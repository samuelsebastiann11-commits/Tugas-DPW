<?php
require_once 'kelas/Manusia.php';

$budi = new Manusia();
$budi->setNama("Budi Santoso");
$budi->setUmur(25);

$saya = new Manusia();
$saya->setNama("Samuel Aldrik Sebastian");
$saya->setUmur(20);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Praktikum OOP - Manusia</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #667eea;
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
            color: #667eea;
            border-bottom: 2px solid #667eea;
            padding-bottom: 8px;
            margin-bottom: 15px;
        }
        .info {
            background: #f0f4ff;
            padding: 15px;
            border-radius: 8px;
            margin: 15px 0;
            line-height: 1.8;
        }
        .identitas {
            background: #e8f5e9;
            padding: 15px;
            border-radius: 8px;
            margin-top: 15px;
            line-height: 1.8;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Praktikum 10 - PHP OOP</h1>
        
        <div class="card">
            <h2>Data Budi</h2>
            <div class="info">
                <?php $budi->tampilkanData(); ?>
            </div>

            <h2>Identitas Saya</h2>
            <div class="info">
                <?php $saya->tampilkanData(); ?>
            </div>
            
            <div class="identitas">
                <strong>NIM:</strong> 253307057<br>
                <strong>Jurusan:</strong> Teknologi Informasi<br>
                <strong>Kampus:</strong> Politeknik Negeri Madiun
            </div>
        </div>
    </div>
</body>
</html>