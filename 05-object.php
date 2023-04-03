<?php

// use Produk as GlobalProduk;

class Produk
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
}

class CetakInfoProduk
{
    public function cetak(Produk $produk)
    {
        $str = "{$produk->judul}  | {$produk->getLabel()} (Rp{$produk->harga})";
        return $str;
    }
}

$produk1 = new Produk("DragonBall", "Kakek", "sony", 10000);
$produk2 = new Produk("Nobita", "Ibu", "wakwa", 444);
$infoProduk1 = new CetakInfoProduk();

// $produk3 = new Produk("Borut", "Nenek", "PS2", 500);
echo "Komik :" . $produk1->getLabel() . "<br>";
echo "Game : " . $produk2->getLabel() . "<br>";
echo $infoProduk1->cetak($produk1);
