<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Input Data Dosen</title>
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
    <h1>Input Data</h1>
    <div class="container">
        <form id="form_dosen" action="proses_inputdosen.php" method="post">
            <fieldset>
                <legend>Input Data Dosen</legend>
                <p>
                    <label for="namaDosen">Nama Dosen:</label>
                    <input type="text" name="namaDosen" id="namaDosen" required>
                </p>
                <p>
                    <label for="noHP">No HP:</label>
                    <input type="text" name="noHP" id="noHP" placeholder="Contoh: 08647886562997" required>
                </p>
            </fieldset>
            <p>
                <input type="submit" name="input" value="Simpan">
            </p>
        </form>
    </div>
</body>
</html>
