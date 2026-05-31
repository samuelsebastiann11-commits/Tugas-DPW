<?php
class akunBank
{
    private $nama;
    private $jumlahUang;

    public function __construct($nama = "", $saldoAwal = 0)
    {
        $this->nama = $nama;
        $this->jumlahUang = $saldoAwal;
    }

    public function getNama()
    {
        return $this->nama;
    }

    public function setNama($nama)
    {
        $this->nama = $nama;
    }

    public function tambahUang($jumlah)
    {
        if ($jumlah > 0) {
            $this->jumlahUang += $jumlah;
            echo "Berhasil menambah: Rp " . number_format($jumlah, 0, ',', '.') . "<br>";
        } else {
            echo "Jumlah harus lebih dari 0!<br>";
        }
    }

    public function kurangiUang($jumlah)
    {
        if ($jumlah > 0 && $this->jumlahUang >= $jumlah) {
            $this->jumlahUang -= $jumlah;
            echo "Berhasil mengurangi: Rp " . number_format($jumlah, 0, ',', '.') . "<br>";
        } elseif ($jumlah <= 0) {
            echo "Jumlah harus lebih dari 0!<br>";
        } else {
            echo "Saldo tidak mencukupi!<br>";
        }
    }

    public function tampilkanSaldo()
    {
        return "Rp " . number_format($this->jumlahUang, 0, ',', '.');
    }

    public function hitungPajak()
    {
        $pajak = $this->jumlahUang * 0.11;
        return "Rp " . number_format($pajak, 0, ',', '.');
    }

    public function tampilkanLaporan()
    {
        echo "Pemilik Akun: " . $this->getNama() . "<br>";
        echo "Saldo: " . $this->tampilkanSaldo() . "<br>";
        echo "Pajak 11%: " . $this->hitungPajak() . "<br>";
    }
}
?>