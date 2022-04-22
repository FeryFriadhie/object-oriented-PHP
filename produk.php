<?php

 

class Produk {
    public $judul = "judul",
           $penulis = "Penulis", 
           $penerbit = "Penerbit",
           $harga = 20000;
           
    public function getLabel(){
     return "$this->penulis, $this->penerbit";
      
    }      
           
  
  
}

$produk3 = new Produk();
$produk3->judul = "Naruto";
$produk3->penulis = "Masashi Kishimoto";
$produk3->penerbit = "Airlangga";
$produk3->harga = 85000;

$produk4 = new Produk();
$produk4->judul = "Free Fire";
$produk4->penulis = "Fery";
$produk4->penerbit = "Farel Fajria";
$produk4->harga = 100000;


echo "Komik : " . $produk3->getLabel();
echo "<br>";
echo "Game : " . $produk4->getLabel();
