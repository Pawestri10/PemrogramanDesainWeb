<?php
require_once 'Database.php';

class Dosen {
    private $conn;

    public function __construct() {
        global $link;  // Pastikan ini ada agar variabel $link dari koneksi.php bisa dipakai
        $this->conn = $link;

        if (!$this->conn) {
            die("Koneksi database gagal: " . mysqli_connect_error());
        }
    }

    public function getAllDosen() {
        $query = "SELECT * FROM t_dosen";
        return $this->conn->query($query);
    }

    public function tambahDosen($namaDosen, $noHP) {
        $stmt = $this->conn->prepare("INSERT INTO t_dosen (namaDosen, noHP) VALUES (?, ?)");
        $stmt->bind_param("ss", $namaDosen, $noHP);
        $stmt->execute();
        $stmt->close();
    }
}
