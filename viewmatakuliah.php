<?php
require_once 'Matakuliah.php';

$matkul = new Matakuliah();
$dataMatkul = $matkul->getAllMatakuliah();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Daftar Matakuliah</title>
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
    <h1>Daftar Matakuliah</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Nama Matakuliah</th>
            <th>SKS</th>
            <th>Aksi</th>
        </tr>
        <?php while ($row = $dataMatkul->fetch_assoc()) : ?>
            <tr>
                <td><?= htmlspecialchars($row['idMatakuliah']) ?></td>
                <td><?= htmlspecialchars($row['namaMatakuliah']) ?></td>
                <td><?= htmlspecialchars($row['sks']) ?></td>
                <td class="action">
                    <a href="editmatakuliah.php?id=<?= $row['idMatakuliah'] ?>">Edit</a>
                    <a href="hapusmatakuliah.php?id=<?= $row['idMatakuliah'] ?>" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
                </td>
            </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>
