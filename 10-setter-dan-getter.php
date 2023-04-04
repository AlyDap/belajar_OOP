<?php

// .= menyambung string tipe konket

use Produk as GlobalProduk;

class  Produk
{
    private
        $judul,
        $penulis,
        $penerbit,
        $harga,
        $diskon = 0;

    public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0.0)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getJudul()
    {
        return $this->judul;
    }

    public function setJudul($judul)
    {
        if (!is_string($judul)) {
            throw new Exception("Judul harus String");
        }
        $this->judul = $judul;
    }
    public function setPenulis($penulis)
    {
        $this->penulis = $penulis;
    }
    public function setPenerbit($penerbit)
    {
        $this->penerbit = $penerbit;
    }
    public function getPenulis()
    {
        return $this->penulis;
    }
    public function getPenerbit()
    {
        return $this->penerbit;
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
    public function setHarga($harga)
    {
        $this->harga = $harga;
    }

    public function getHarga()
    {
        return $this->harga - ($this->harga * $this->diskon / 100);
    }

    public function setDiskon($diskon)
    {
        $this->diskon = $diskon;
    }
    public function getDiskon()
    {
        return $this->diskon . "%";
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
$produk2 = new Game("Nobita", "Ibu", "wakwa", 2000, 50);
$infoProduk1 = new CetakInfoProduk();

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
echo "<hr>";


$produk2->setDiskon(10);
echo $produk2->getDiskon();
echo "<br>";
echo $produk1->getHarga();
echo "<br>";
echo $produk2->getHarga();
echo "<hr>";
$produk1->setHarga(25000);
$produk2->setHarga(22000);
$produk1->setDiskon(5);
echo $produk1->getDiskon();
echo "<br>";

echo $produk1->getHarga();
echo "<br>";
echo $produk2->getHarga();
echo "<hr>";

echo $produk1->getJudul();
$produk1->setJudul("ahaha");
echo $produk1->getJudul();
$produk1->setPenerbit("yyyy");
echo $produk1->getPenerbit();
