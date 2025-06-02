<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Input Data Mahasiswa</title>
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
    <h1>Input Data Mahasiswa</h1>
    <div class="container">
        <form action="proses_inputmahasiswa.php" method="post" id="form_mahasiswa">
            <fieldset>
                <legend>Input Data Mahasiswa</legend>
                <p>
                    <label for="namaMahasiswa">Nama Mahasiswa:</label>
                    <input type="text" name="namaMahasiswa" id="namaMahasiswa" required>
                </p>
                <p>
                    <label for="nim">NIM:</label>
                    <input type="text" name="nim" id="nim" placeholder="Contoh: 1234567890" required>
                </p>
            </fieldset>
            <p>
                <input type="submit" name="input" value="Simpan">
            </p>
        </form>
    </div>
</body>
</html>
