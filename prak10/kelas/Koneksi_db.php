<?php
class Konek1_db
{
    private $host = "localhost";
    private $user = "root";
    private $pass = "";
    private $name = "bank_db";

    private $db = false;
    private $result = array();

    public function connect()
    {
        $this->db = new mysqli($this->host, $this->user, $this->pass, $this->name);
        
        if ($this->db->connect_error) {
            echo "Koneksi gagal: " . $this->db->connect_error;
            return false;
        }
        
        $this->db->set_charset("utf8");
        echo "Koneksi berhasil";
        return true;
    }

    public function disconnect()
    {
        if ($this->db) {
            $this->db->close();
        }
    }
}

$koneksi = new Konek1_db();
$koneksi->connect();
?>