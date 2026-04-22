<?php

class Produk {
    public static $jumlahProduk = 0;

    public $namaProduk;
    public $harga;

    public function __construct($nama, $harga) {
        $this->namaProduk = $nama;
        $this->harga = $harga;
    }

    public function tambahProduk() {
        self::$jumlahProduk++;

    }

}

class Transaksi {
    // Method ini sekarang mencetak baris per item seperti di struk
    final public function prosesTransaksi($produk) {
        echo str_pad($produk->namaProduk, 20) . " : Rp " . number_format($produk->harga, 0, ',', '.') . "<br>";
    }
}

// --- SIMULASI ---

$p1 = new Produk("Sling Bag", 3000000); $p1->tambahProduk();
$p2 = new Produk("Sepatu", 2500000);    $p2->tambahProduk();
$p3 = new Produk("Jaket", 12000000); $p3->tambahProduk();

$transaksi = new Transaksi();


echo "<pre>"; 
echo "====================================<br>";
echo "          STRUK PEMBAYARAN          <br>";
echo "====================================<br>";

$transaksi->prosesTransaksi($p1);
$transaksi->prosesTransaksi($p2);
$transaksi->prosesTransaksi($p3);

echo "------------------------------------<br>";
echo "Total Item        : " . Produk::$jumlahProduk . " Produk<br>";
echo "Total Bayar       : Rp " . number_format(($p1->harga + $p2->harga + $p3->harga), 0, ',', '.') . "<br>";
echo "Status Pembayaran : LUNAS<br>";
echo "====================================<br>";
echo "  Terima Kasih Atas Kunjungan Anda   <br>";
echo "====================================<br>";
echo "</pre>";

?>