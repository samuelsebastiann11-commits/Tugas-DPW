<?php
class Manusia
{
    protected $name;
    protected $nik = "123212131243243";
    protected $umur;

    public function getNama()
    {
        return $this->name;
    }

    public function setNama($name)
    {
        $this->name = $name;
    }

    private function getNIK()
    {
        return " nik {$this->nik} ";
    }

    public function getUmur()
    {
        return $this->umur;
    }

    public function setUmur($umur)
    {
        $this->umur = $umur;
    }

    public function tampilkanData()
    {
        echo "Nama: " . $this->getNama() . "<br>";
        echo "Umur: " . $this->getUmur() . " tahun<br>";
        echo "NIK:" . $this->getNIK() . "<br>";
    }
}
?>