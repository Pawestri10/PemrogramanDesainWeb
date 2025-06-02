<?php
require_once 'Database.php';

class Matakuliah {
    private $conn;

    public function __construct() {
        $this->conn = new mysqli("localhost", "root", "", "modul11");
        if ($this->conn->connect_error) {
            throw new Exception("Koneksi gagal: " . $this->conn->connect_error);
        }
    }

    public function tambahMatakuliah($nama, $kode) {
        $stmt = $this->conn->prepare("INSERT INTO t_matakuliah (namaMatakuliah, kodeMatakuliah) VALUES (?, ?)");
        $stmt->bind_param("ss", $nama, $kode);
        $stmt->execute();
        $stmt->close();
    }

    public function getAllMatakuliah() {
        $query = "SELECT * FROM t_matakuliah ORDER BY idMatakuliah ASC";
        return $this->conn->query($query);
    }

    public function getMatakuliahById($id) {
        $stmt = $this->conn->prepare("SELECT * FROM t_matakuliah WHERE idMatakuliah = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }

    public function updateMatakuliah($id, $nama, $kode) {
        $stmt = $this->conn->prepare("UPDATE t_matakuliah SET namaMatakuliah = ?, kodeMatakuliah = ? WHERE idMatakuliah = ?");
        $stmt->bind_param("ssi", $nama, $kode, $id);
        $stmt->execute();
        $stmt->close();
    }

    public function hapusMatakuliah($id) {
        $stmt = $this->conn->prepare("DELETE FROM t_matakuliah WHERE idMatakuliah = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $stmt->close();
    }
}
?>
