<?php
class Buah {
    public $nama;
    protected $warna;
    private $berat;

    public function __construct($nama, $warna, $berat) {
        $this->nama = $nama;
        $this->warna = $warna;
        $this->berat = $berat;
    }

    public function getNama() {
        return $this->nama;
    }

    public function getWarna() {
        return $this->warna;
    }

    public function getBerat() {
        return $this->berat;
    }
    
}

$apel = new Buah("Apel", "Merah", 250);
echo $apel->getNama(); 
echo $apel->getWarna(); 
echo $apel->getBerat(); 

// Kesimpulan: properti protected ($warna) dan private ($berat) tidak bisa diakses langsung dari luar kelas.
// Solusinya kita menggunakan method getter (getWarna dan getBerat) untuk mengambil nilainya.
// Sedangkan properti public ($nama) sebenarnya bisa diakses langsung, tapi tetap pakai getter biar konsisten.
?>