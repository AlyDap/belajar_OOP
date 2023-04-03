<?php

// .= menyambung string tipe konket


class  Produk
{
    public
        $judul,
        $penulis,
        $penerbit,
        $harga,
        $hal,
        $time;

    public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0.0, $hal = 0, $time = 0)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->hal = $hal;
        $this->time = $time;
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
    public function getInfoProduk()
    {
        $str = "Komik : {$this->judul} | {$this->getLabel()} (Rp{$this->harga}) - {$this->hal} Halaman";
        return $str;
    }
}

class Game extends Produk
{
    public function getInfoProduk()
    {
        $str = "Game : {$this->judul} | {$this->getLabel()} (Rp{$this->harga}) - {$this->time} Jam";
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

$produk1 = new Komik("DragonBall", "Kakek", "sony", 10000, 100, 0);
$produk2 = new Game("Nobita", "Ibu", "wakwa", 444, 0, 50);
$infoProduk1 = new CetakInfoProduk();

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
