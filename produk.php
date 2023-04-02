<?php

class Produk
{
    public
        $judul = "Judul",
        $penulis = "Penulis",
        $penerbit = false,
        $harga = 0;

    public function getLabel()
    {
        return "$this->judul ditulis oleh $this->penerbit";
    }
}

// $produk1 = new Produk();
// $produk1->judul = "Naruto";
// var_dump($produk1);

// $produk2 = new Produk();
// $produk2->judul = "Boruto";
// $produk2->tahun = 2021.2;
// var_dump($produk2);

$produk3 = new Produk();
$produk3->judul = "Naruto";
$produk3->penulis = "orang";
$produk3->penerbit = "wong";
$produk3->harga = 3000;

$produk4 = new Produk();
$produk4->judul = "Doraemon";
$produk4->penerbit = "baratss";
$produk4->penulis = "tulisss";
$produk4->harga = 999;

echo "komik : $produk3->penulis, $produk3->penerbit";
echo "<br>";
echo $produk3->getLabel();
echo "<br>";
echo "Komik : " . $produk3->getLabel() . "<hr>";
echo "Game : " . $produk4->getLabel();
