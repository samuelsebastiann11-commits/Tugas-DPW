<?php
require_once 'kelas/akunBank.php';

$akun1 = new akunBank("Andi Wijaya", 500000);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Bank</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #11998e;
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
            color: #11998e;
            border-bottom: 2px solid #11998e;
            padding-bottom: 8px;
            margin-bottom: 15px;
        }
        h3 {
            color: #0a6b5e;
            margin: 15px 0 10px 0;
        }
        .info {
            background: #e8f5e9;
            padding: 15px;
            border-radius: 8px;
            margin: 15px 0;
            line-height: 1.8;
        }
        .transaksi {
            background: #fff3e0;
            padding: 15px;
            border-radius: 8px;
            margin: 15px 0;
            line-height: 1.8;
        }
        .footer {
            background: #e3f2fd;
            padding: 15px;
            border-radius: 8px;
            margin-top: 15px;
            line-height: 1.8;
        }
        hr {
            margin: 15px 0;
            border: none;
            border-top: 1px solid #ddd;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Sistem Informasi Bank</h1>
        
        <div class="card">
            <h2>Data Akun Bank</h2>
            
            <div class="info">
                <h3>Data Awal Akun</h3>
                <?php $akun1->tampilkanLaporan(); ?>
            </div>
            
            <div class="transaksi">
                <h3>Tambah Uang</h3>
                <?php $akun1->tambahUang(200000); ?>
                
                <h3>Kurangi Uang</h3>
                <?php $akun1->kurangiUang(75000); ?>
            </div>
            
            <div class="info">
                <h3>Data Akhir Akun</h3>
                <?php $akun1->tampilkanLaporan(); ?>
            </div>
            
            <hr>
            
            <div class="footer">
                <strong>Nama:</strong> Samuel Aldrik Sebastian<br>
                <strong>NIM:</strong> 253307057<br>
                <strong>Jurusan:</strong> Teknologi Informasi<br>
                <strong>Kampus:</strong> Politeknik Negeri Madiun
            </div>
        </div>
    </div>
</body>
</html>