<?php
require_once 'Matakuliah.php';

if (isset($_POST['edit'])) {
    $id = $_POST['idMatakuliah'];
    $namaMatakuliah = $_POST['namaMatakuliah'];
    $sks = $_POST['sks'];

    try {
        $matkul = new Matakuliah();
        $matkul->updateMatakuliah($id, $namaMatakuliah, $sks);
        header("Location: viewmatakuliah.php");
        exit;
    } catch (Exception $e) {
        die("Terjadi kesalahan: " . $e->getMessage());
    }
}
?>