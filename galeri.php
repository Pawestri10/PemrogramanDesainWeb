<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Galeri Gambar</title>
    <style>
        .gallery {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }
        .gallery img {
            width: 200px;
            height: 150px;
            object-fit: cover;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
    </style>
</head>
<body>

<h2>Galeri Gambar</h2>
<div class="gallery">
    <?php
    $files = glob("gambar/*.{jpg,jpeg,png,gif,webp}", GLOB_BRACE);
    foreach ($files as $file) {
        echo "<img src='$file' alt='gambar'>";
    }
    ?>
</div>

</body>
</html>
