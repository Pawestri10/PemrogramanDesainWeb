<?php
require_once 'Dosen.php';

if (isset($_GET["idDosen"])) {
    $idDosen = $_GET["idDosen"];
    
    $dosen = new Dosen();
    $result = $dosen->hapusDosenById($idDosen);

    if (!$result) {
        die("Gagal menghapus data.");
    }
}

header("Location: viewdosen.php");
exit;
?>
