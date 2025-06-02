<?php
require_once 'Dosen.php';

$dosen = new Dosen();
$dataDosen = $dosen->getAllDosen(); // pastikan method ini ada di class Dosen
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Daftar Dosen</title>
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
    <h1>Daftar Dosen</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Nama Dosen</th>
            <th>No HP</th>
            <th>Aksi</th>
        </tr>
        <?php while ($row = $dataDosen->fetch_assoc()) : ?>
            <tr>
                <td><?= htmlspecialchars($row['idDosen']) ?></td>
                <td><?= htmlspecialchars($row['namaDosen']) ?></td>
                <td><?= htmlspecialchars($row['noHP']) ?></td>
                <td class="action">
                    <a href="editdosen.php?idDosen=<?= $row['idDosen'] ?>">Edit</a>
                    <a href="hapusdosen.php?idDosen=<?= $row['idDosen'] ?>" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
                </td>
            </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>
