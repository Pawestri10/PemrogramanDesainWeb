<?php
require_once 'Matakuliah.php';

if (!isset($_GET['id'])) {
    header("Location: viewmatakuliah.php");
    exit;
}

$id = $_GET['id'];
$matkul = new Matakuliah();
$data = $matkul->getMatakuliahById($id);

if (!$data) {
    die("Data tidak ditemukan.");
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Edit Matakuliah</title>
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
    <h1>Edit Matakuliah</h1>
    <div class="container">
        <form action="proses_editmatakuliah.php" method="post">
            <fieldset>
                <legend>Edit Data Matakuliah</legend>
                <input type="hidden" name="idMatakuliah" value="<?= $data['idMatakuliah'] ?>">
                <p>
                    <label>Nama Matakuliah:</label>
                    <input type="text" name="namaMatakuliah" value="<?= $data['namaMatakuliah'] ?>" required>
                </p>
                <p>
                    <label>SKS:</label>
                    <input type="text" name="sks" value="<?= $data['sks'] ?>" required>
                </p>
            </fieldset>
            <p>
                <input type="submit" name="edit" value="Update Data">
            </p>
        </form>
    </div>
</body>
</html>