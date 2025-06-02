<?php
require_once 'Dosen.php';

if (isset($_POST['edit'])) {
    $idDosen = $_POST['idDosen'] ?? '';
    $namaDosen = $_POST['namaDosen'] ?? '';
    $noHP = $_POST['noHP'] ?? '';

    $dosen = new Dosen();
    $result = $dosen->updateDosen($idDosen, $namaDosen, $noHP);

    if (!$result) {
        die("Gagal mengupdate data dosen.");
    }

    header("Location: viewdosen.php");
    exit;
}
?>
