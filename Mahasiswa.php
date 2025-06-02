<?php
require_once 'Database.php';

class Mahasiswa {
    private $conn;

    public function __construct() {
        $this->conn = new mysqli("localhost", "root", "", "modul11");
        if ($this->conn->connect_error) {
            throw new Exception("Koneksi gagal: " . $this->conn->connect_error);
        }
    }

    public function tambahMahasiswa($nama, $nim) {
        $stmt = $this->conn->prepare("INSERT INTO t_mahasiswa (namaMahasiswa, nim) VALUES (?, ?)");
        $stmt->bind_param("ss", $nama, $nim);
        $stmt->execute();
        $stmt->close();
    }

    public function getAllMahasiswa() {
        $query = "SELECT * FROM t_mahasiswa ORDER BY idMahasiswa ASC";
        return $this->conn->query($query);
    }

    public function getMahasiswaById($id) {
        $stmt = $this->conn->prepare("SELECT * FROM t_mahasiswa WHERE idMahasiswa = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }

    public function updateMahasiswa($id, $nama, $nim) {
        $stmt = $this->conn->prepare("UPDATE t_mahasiswa SET namaMahasiswa = ?, nim = ? WHERE idMahasiswa = ?");
        $stmt->bind_param("ssi", $nama, $nim, $id);
        $stmt->execute();
        $stmt->close();
    }

    public function hapusMahasiswa($id) {
        $stmt = $this->conn->prepare("DELETE FROM t_mahasiswa WHERE idMahasiswa = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $stmt->close();
    }
}
?>
