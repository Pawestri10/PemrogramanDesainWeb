<?php
require_once 'Matakuliah.php';

if (isset($_POST['input'])) {
    $namaMatakuliah = $_POST['namaMatakuliah'] ?? '';
    $sks = $_POST['sks'] ?? '';

    try {
        $matkul = new Matakuliah();
        $matkul->tambahMatakuliah($namaMatakuliah, $sks);
        header("Location: viewmatakuliah.php");
        exit;
    } catch (Exception $e) {
        die("Terjadi kesalahan: " . $e->getMessage());
    }
}
?>