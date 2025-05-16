<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Proses Pendaftaran</title>
</head>
<body>
  <h2>Data Pendaftaran</h2>
  Selamat datang <b><?php echo $_GET["nama"]; ?></b><br>
  NIM : <?php echo $_GET["nim"]; ?><br>
  Email : <?php echo $_GET["email"]; ?><br>
  Tempat, Tanggal Lahir : <?php echo $_GET["tempat"]; ?>, <?php echo $_GET["ttl"]; ?><br>
  Alamat : <?php echo $_GET["alamat"]; ?><br>
  Jenis Kelamin : <?php echo $_GET["gender"]; ?><br>
</body>
</html>
