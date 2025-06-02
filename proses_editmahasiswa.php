<?php
require_once 'Mahasiswa.php';

if (isset($_POST['edit'])) {
    $id = $_POST['idMahasiswa'];
    $nama = $_POST['namaMahasiswa'];
    $nim = $_POST['nim'];

    try {
        $mahasiswa = new Mahasiswa();
        $mahasiswa->updateMahasiswa($id, $nama, $nim);
        header("Location: viewmahasiswa.php");
        exit;
    } catch (Exception $e) {
        die("Terjadi kesalahan: " . $e->getMessage());
    }
}
?>
