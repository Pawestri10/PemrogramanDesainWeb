<?php
require_once 'Matakuliah.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    try {
        $matkul = new Matakuliah();
        $matkul->hapusMatakuliah($id);
    } catch (Exception $e) {
        die("Gagal menghapus data: " . $e->getMessage());
    }
}

header("Location: viewmatakuliah.php");
exit;
?>