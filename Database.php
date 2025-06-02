<?php
class Database {
    private $host = "127.0.0.1:3308";
    private $username = "root";
    private $password = "";
    private $dbname = "modul11";
    private $conn;

    public function __construct() {
        $this->conn = new mysqli(
            $this->host, $this->username, $this->password, $this->dbname
        );
        if ($this->conn->connect_error) {
            die("Koneksi gagal: " . $this->conn->connect_error);
        }
    }

    public function getConnection() {
        return $this->conn;
    }
}
?>
