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
        $time,
        $tipe;

    public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0.0, $hal = 0, $time = 0, $tipe)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->hal = $hal;
        $this->time = $time;
        $this->tipe = $tipe;
    }

    public function getLabel()
    {
        return "$this->penerbit, $this->penulis";
    }

    public function getInfoLengkap()
    {
        $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp{$this->harga})";
        if ($this->tipe == "Komik") {
            $str .= "-{$this->hal} Halaman.";
        } else if ($this->tipe == "Game") {
            $str .= "-{$this->time} Jam.";
        }
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

$produk1 = new Produk("DragonBall", "Kakek", "sony", 10000, 100, 0, "Komik");
$produk2 = new Produk("Nobita", "Ibu", "wakwa", 444, 0, 50, "Game");
$infoProduk1 = new CetakInfoProduk();

echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();
