<?php

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
        return "$this->judul ditulis oleh $this->penerbit";
    }
}

$produk1 = new Produk("Naruto", "Orang", "wong", 5);
$produk2 = new Produk("Doraemon", "Nobita", "Sakura", 1.9);
$produk3 = new Produk("Mancing Mania");

echo "Komik : " . $produk1->getLabel() . "<hr>";
echo "Game : " . $produk2->getLabel();
var_dump($produk3);
