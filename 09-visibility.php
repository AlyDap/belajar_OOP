<?php

// .= menyambung string tipe konket


class  Produk
{
    public
        $judul,
        $penulis,
        $penerbit;
    protected
        $diskon = 0;
    private
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

    public function getHarga()
    {
        return $this->harga - ($this->harga * $this->diskon / 100);
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

    public function setDiskon($diskon)
    {
        $this->diskon = $diskon;
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

echo $produk1->getHarga();
echo "<br>";
echo $produk2->getHarga();
