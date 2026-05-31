<?php
require_once 'Manusia.php';

class Mahasiswa extends Manusia
{
    private $nim;
    private $jurusan;
    private $fakultas;

    public function getNim()
    {
        return $this->nim;
    }

    public function setNim($nim)
    {
        $this->nim = $nim;
    }

    public function getJurusan()
    {
        return $this->jurusan;
    }

    public function setJurusan($jurusan)
    {
        $this->jurusan = $jurusan;
    }

    public function getFakultas()
    {
        return $this->fakultas;
    }

    public function setFakultas($fakultas)
    {
        $this->fakultas = $fakultas;
    }

    public function tampilkanDataMahasiswa()
    {
        echo "Nama: " . $this->getNama() . "<br>";
        echo "NIM: " . $this->getNim() . "<br>";
        echo "Jurusan: " . $this->getJurusan() . "<br>";
        echo "Fakultas: " . $this->getFakultas() . "<br>";
        echo "Umur: " . $this->getUmur() . " tahun<br>";
        echo "NIK: " . $this->nik . "<br>";
    }
}
?>