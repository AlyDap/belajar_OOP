<?php

// .= menyambung string tipe konket


class  Produk
{
    public
        $judul,
        $penulis,
        $penerbit,
        $harga;

    public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0.0)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getLabel()
    {
        return "$this->penerbit, $this->penulis";
    }

    public function getInfoProduk()
    {
        $str = "{$this->judul} | {$this->getLabel()} (Rp{$this->harga})";

        return $str;
    }
}

class Komik extends Produk
{
    public $hal;
    public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0.0, $hal = 0)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->hal = $hal;
    }
    public function getInfoProduk()
    {
        $str = "Komik : " . parent::getInfoProduk() . " - {$this->hal} Halaman";
        return $str;
    }
}

class Game extends Produk
{
    public $time;
    public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0.0,  $time = 0)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->time = $time;
    }
    public function getInfoProduk()
    {
        $str = "Game : " . parent::getInfoProduk() . " - {$this->time} Jam";
        return $str;
    }
}

class CetakInfoProduk
{
    public function cetak(Produk $produk)
    {
        $str = "{$produk->judul}  | {$produk->getLabel()} (Rp{$produk->harga})";
        return $str;
    }
}

$produk1 = new Komik("DragonBall", "Kakek", "sony", 10000, 100);
$produk2 = new Game("Nobita", "Ibu", "wakwa", 444, 50);
$infoProduk1 = new CetakInfoProduk();

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
echo "<br>";
echo $infoProduk1->cetak($produk1);
echo "<br>";
echo $infoProduk1->cetak($produk2);
