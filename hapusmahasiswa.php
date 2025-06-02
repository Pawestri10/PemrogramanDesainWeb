<?php
require_once 'Mahasiswa.php';

if (isset($_GET['idMahasiswa'])) {
    $id = $_GET['idMahasiswa'];

    try {
        $mahasiswa = new Mahasiswa();
        $mahasiswa->hapusMahasiswa($id);
    } catch (Exception $e) {
        die("Terjadi kesalahan: " . $e->getMessage());
    }
}
header("Location: viewmahasiswa.php");
exit;
?>