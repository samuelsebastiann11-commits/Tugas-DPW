<?php
session_start();

try {
    if ($_SERVER["REQUEST_METHOD"] != "POST") {
        throw new Exception("Invalid request method");
    }

    // Mendapatkan data dari form login
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Simulasi autentikasi (diganti dengan metode autentikasi yang sesuai)
    if ($username === "Ilham" && $password === "ilhamganteng") {
        // Set session variables
        $_SESSION["username"] = $username;
        // Redirect ke halaman selamat datang
        header("Location: welcome.php");
        exit();
    } else {
        // Jika autentikasi gagal, tampilkan pesan kesalahan
        throw new Exception("Invalid username or password");
    }
} catch (Exception $e) {
    // Tangkap pengecualian dan tampilkan pesan kesalahan
    $error = $e->getMessage();
    include("session.html"); // Sertakan kembali halaman login dengan pesan kesalahan
}