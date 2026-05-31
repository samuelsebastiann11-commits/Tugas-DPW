<?php
class Buah2  {
    public $nama;
    public $warna;
    public $berat;

    function set_nama($n) {
        $this->nama = $n;
    }

    // protected function set_color($n) {
    //     $this->warna = $n;
    // }

    // private function set_weight($n) {
    //     $this->berat = $n;
    // }

    public function set_color($n) {
        $this->warna = $n;
    }

    public function set_weight($n) {
        $this->berat = $n;
    }
}

$apel = new Buah2();
$apel->set_nama("Apel");
$apel->set_color("Merah");
$apel->set_weight(250);

echo "Nama buah: " . $apel->nama . "<br>" . "\n";
echo "Warna buah: " . $apel->warna . "<br>" . "\n";
echo "Berat buah: " . $apel->berat . "<br>" . "\n";

// Kesimpulan: method protected dan private tidak bisa dipanggil dari luar kelas.
// Makanya kita ubah jadi public biar bisa diakses objek di luar kelas.
// Coba saja aktifkan baris protected dan private tadi, pasti muncul error fatal.
?>