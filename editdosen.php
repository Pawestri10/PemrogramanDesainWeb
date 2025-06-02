<?php
require_once 'Dosen.php';

if (!isset($_GET['id'])) {
    header("Location: viewdosen.php");
    exit;
}

$idDosen = (int) $_GET['id'];

$dosenObj = new Dosen();
$data = $dosenObj->getDosenById($idDosen);

if (!$data) {
    die("Data dosen tidak ditemukan.");
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Edit Data Dosen</title>
    <style>
        h1 {
            text-align: center;
        }
        .container {
            width: 400px;
            margin: auto;
        }
        fieldset {
            border-radius: 8px;
            padding: 20px;
        }
        label {
            display: inline-block;
            width: 100px;
        }
        input[type="text"] {
            width: 100%;
            padding: 5px;
        }
        input[type="submit"] {
            padding: 8px 16px;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <h1>Edit Data</h1>
    <div class="container">
        <form id="form_dosen" action="proses_editdosen.php" method="post">
            <fieldset>
                <legend>Edit Data Dosen</legend>
                <p>
                    <label>ID:</label>
                    <input type="hidden" name="idDosen" value="<?= htmlspecialchars($data['idDosen']) ?>">
                    <input type="text" value="<?= htmlspecialchars($data['idDosen']) ?>" disabled>
                </p>
                <p>
                    <label for="namaDosen">Nama Dosen:</label>
                    <input type="text" name="namaDosen" id="namaDosen" value="<?= htmlspecialchars($data['namaDosen']) ?>" required>
                </p>
                <p>
                    <label for="noHP">No HP:</label>
                    <input type="text" name="noHP" id="noHP" value="<?= htmlspecialchars($data['noHP']) ?>" required>
                </p>
            </fieldset>
            <p>
                <input type="submit" name="edit" value="Update Data">
            </p>
        </form>
    </div>
</body>
</html>
