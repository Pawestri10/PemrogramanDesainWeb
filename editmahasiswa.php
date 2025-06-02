<?php
require_once 'Mahasiswa.php';

if (!isset($_GET['idMahasiswa'])) {
    header("Location: viewmahasiswa.php");
    exit;
}

$mahasiswa = new Mahasiswa();
$data = $mahasiswa->getMahasiswaById($_GET['idMahasiswa']);

if (!$data) {
    die("Mahasiswa tidak ditemukan");
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Edit Mahasiswa</title>
    <style>
        h1 { text-align: center; }
        .container { width: 400px; margin: auto; }
        fieldset { border-radius: 8px; padding: 20px; }
        label { display: inline-block; width: 120px; }
        input[type="text"] { width: 100%; padding: 5px; }
        input[type="submit"] { padding: 8px 16px; margin-top: 10px; }
    </style>
</head>
<body>
    <h1>Edit Mahasiswa</h1>
    <div class="container">
        <form action="proses_editmahasiswa.php" method="post">
            <fieldset>
                <legend>Edit Data Mahasiswa</legend>
                <input type="hidden" name="idMahasiswa" value="<?= $data['idMahasiswa'] ?>">
                <p>
                    <label for="namaMahasiswa">Nama Mahasiswa:</label>
                    <input type="text" name="namaMahasiswa" value="<?= $data['namaMahasiswa'] ?>" required>
                </p>
                <p>
                    <label for="nim">NIM:</label>
                    <input type="text" name="nim" value="<?= $data['nim'] ?>" required>
                </p>
            </fieldset>
            <p><input type="submit" name="edit" value="Update Data"></p>
        </form>
    </div>
</body>
</html>
