<?php
require_once 'Mahasiswa.php';

$mahasiswa = new Mahasiswa();
$dataMahasiswa = $mahasiswa->getAllMahasiswa();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Daftar Mahasiswa</title>
    <style>
        table {
            width: 80%;
            margin: auto;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: center;
        }
        h1 {
            text-align: center;
        }
        .action {
            display: flex;
            justify-content: center;
            gap: 10px;
        }
    </style>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Nama Mahasiswa</th>
            <th>NIM</th>
            <th>Aksi</th>
        </tr>
        <?php while ($row = $dataMahasiswa->fetch_assoc()) : ?>
            <tr>
                <td><?= htmlspecialchars($row['idMahasiswa']) ?></td>
                <td><?= htmlspecialchars($row['namaMahasiswa']) ?></td>
                <td><?= htmlspecialchars($row['nim']) ?></td>
                <td class="action">
                    <a href="editmahasiswa.php?idMahasiswa=<?= $row['idMahasiswa'] ?>">Edit</a>
                    <a href="hapusmahasiswa.php?idMahasiswa=<?= $row['idMahasiswa'] ?>" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
                </td>
            </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>
