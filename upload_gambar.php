<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Upload File</title>
    <meta name="description" content="Belajar PHP">
    <meta name="keywords" content="tulis nama anda disini">
    <meta name="author" content="tulis nama anda disini">
</head>
<body>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
    <label>Pilih Gambar yang akan di upload :</label><br>
    <input type="file" name="gambar" id="gambar1"><br>
    <input type="submit" value="Upload Image" name="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {
    $target_dir = "gambar/";
    $target_file = $target_dir . basename($_FILES["gambar"]["name"]);
    $uploadOk = 1;
    $tipeGambar = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Cek apakah file adalah gambar
    $check = getimagesize($_FILES["gambar"]["tmp_name"]);
    if ($check !== false) {
        echo "File berupa citra/gambar - " . $check["mime"] . ".<br>";
        $uploadOk = 1;
    } else {
        echo "File bukan gambar.<br>";
        $uploadOk = 0;
    }

    // Cek apakah file sudah ada
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.<br>";
        $uploadOk = 0;
    }

    // Cek ukuran file (maks 500KB)
    if ($_FILES["gambar"]["size"] > 500000) {
        echo "Sorry, file anda terlalu besar.<br>";
        $uploadOk = 0;
    }

    // Filter format file
    if ($tipeGambar != "jpg" && $tipeGambar != "png" && $tipeGambar != "jpeg" && $tipeGambar != "gif") {
        echo "Sorry, hanya file JPG, JPEG, PNG & GIF yang diperbolehkan.<br>";
        $uploadOk = 0;
    }

    // Cek apakah $uploadOk masih 1
    if ($uploadOk == 0) {
        echo "Sorry, file anda gagal diupload.<br>";
    } else {
        if (move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_file)) {
            echo "File " . htmlspecialchars(basename($_FILES["gambar"]["name"])) . " berhasil diupload.<br>";
        } else {
            echo "Sorry, ada error saat upload.<br>";
        }
    }
}
?>

</body>
</html>