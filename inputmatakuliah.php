<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Input Data Matakuliah</title>
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
            width: 120px;
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
    <h1>Input Data Matakuliah</h1>
    <div class="container">
        <form action="proses_inputmatakuliah.php" method="post">
            <fieldset>
                <legend>Input Data Matakuliah</legend>
                <p>
                    <label for="namaMatakuliah">Nama Matakuliah:</label>
                    <input type="text" name="namaMatakuliah" id="namaMatakuliah" required>
                </p>
                <p>
                    <label for="sks">Jumlah SKS:</label>
                    <input type="text" name="sks" id="sks" placeholder="Contoh: 3" required>
                </p>
            </fieldset>
            <p>
                <input type="submit" name="input" value="Simpan">
            </p>
        </form>
    </div>
</body>
</html>
