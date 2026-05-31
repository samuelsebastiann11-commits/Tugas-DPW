<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Belajar PHP">
    <meta name="keywords" content="233307051">
    <meta name="author" content="Ilham Aris">
    <title>Gambar</title>
</head>

<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
        <p><label for="">Pilih gambar yang akan diupload</label><br><br>
            <input type="file" name="gambar" value="Pilih Gambar" id="gambar1">
        </p>
        <input type="submit" value="Upload Image" name="submit">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $target_dir = "img/";
        $target_file = $target_dir . basename($_FILES["gambar"]["name"]);
        $uploadOk = 1;
        $tipeGambar = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        // cek data apakah menggunakan post
        if (isset($_POST["submit"])) {
            // cek file apakah berupa gambar
            $check = getimagesize($_FILES["gambar"]["tmp_name"]);
            if ($check !== false) {
                echo "File berupa citra/gambar - " . $check["mime"] . ".";
                $uploadOk = 1;
                // simpan ke folder gambar
            } else {
                echo "File bukan gambar.";
                $uploadOk = 0;
            }
        }

        // cek file apakah nama sama
        if (file_exists($target_file)) {
            echo "Sorry, file already exist.";
            $uploadOk = 0;
        }

        // cek file size
        if ($_FILES["gambar"]["size"] > 5000000) {
            echo " Sorry, file anda terlalu besar.";
            $uploadOk = 0;
        }

        // filter format 
        if ($tipeGambar != "jpg" && $tipeGambar != "png" && $tipeGambar != "jpeg" && $tipeGambar != "gif") {
            echo "Sorry, hanya file JPG, JPEG, PNG, & GIF.";
            $uploadOk = 0;
        }

        // cek if $uploadOk telah sesuai dengan kriteria
        if ($uploadOk == 0) {
            echo "Sorry, File anda gagal upload.";
        } else {
            // proses upload file
            if (move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_file)) {
                echo "file " . htmlspecialchars(basename($_FILES["gambar"]["name"])) . "berhasil upload.";
            } else {
                echo "Sorry, ada error saat upload.";
            }
        }
    }
    ?>
</body>

</html>