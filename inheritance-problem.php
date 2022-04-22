<?php

class Produk {
    public $judul, 
           $penulis, 
           $penerbit, 
           $harga,
           $jmlHalaman,
           $waktuMain,
           $tipe;
           
    //nilai default      
    public function __construct($judul = "judul", $penulis = " penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0, $waktuMain = 0, $tipe){
      
      $this->judul = $judul;
      $this->penulis = $penulis;
      $this->penerbit = $penerbit;
      $this->harga = $harga;
      $this->jmlHalaman = $jmlHalaman;
      $this->waktuMain = $waktuMain;
      $this->tipe = $tipe;
      
    }
    public function getLabel(){
     return "$this->penulis, $this->penerbit";
      
    }
    public function getInfo(){
     //Komik: Naruto | Masashi Kishimoto, Airlangga  (Rp. 85000) - 100 halaman
 
    $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
    
    if($this->tipe == "Komik"){
      $str .=  " - {$this->jmlHalaman} Halaman";
    } else if($this->tipe == "Game") {
      $str .= " - {$this->waktuMain} Tahun.";
    }
    
    return $str;
    
  }
    
           
  
}


class CetakInfoProduk{
  public function Cetak(Produk $produk)
{
  
  $str = "{$produk->judul}  |  {$produk->getLabel()}  (Rp. {$produk->harga})";
  return $str;
   }
}


$produk1 = new Produk("Naruto", "Masashi Kishimoto", " Airlangga", 85000, 100, 0, "Komik");
$produk2 = new Produk("Free Fire", "Fery Friadhie", " Farel Fajria", 100000, 0, 12, "Game");



//Komik: Naruto | Masashi Kishimoto, Airlangga  (Rp. 85000) - 100 halaman
//Game: Free Fire | Fery Friadhie, Farel Fajria (Rp. 100000) -12 Tahun

echo $produk1->getInfo();
echo "<br>";
echo $produk2->getInfo();
