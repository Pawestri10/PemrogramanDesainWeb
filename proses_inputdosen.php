<?php
require_once 'Dosen.php';

if (isset($_POST['input'])) {
    $namaDosen = $_POST['namaDosen'] ?? '';
    $noHP = $_POST['noHP'] ?? '';

    try {
        $dosen = new Dosen();
        $dosen->tambahDosen($namaDosen, $noHP);
        header("Location: viewdosen.php");
        exit;
    } catch (Exception $e) {
        die("Terjadi kesalahan: " . $e->getMessage());
    }
}
?>
