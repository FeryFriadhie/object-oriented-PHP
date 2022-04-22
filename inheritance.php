<?php

class Produk {
    public $judul, 
           $penulis, 
           $penerbit, 
           $harga,
           $jmlHalaman,
           $waktuMain;
        
           
    //nilai default      
    public function __construct($judul = "judul", $penulis = " penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0, $waktuMain = 0){
      
      $this->judul = $judul;
      $this->penulis = $penulis;
      $this->penerbit = $penerbit;
      $this->harga = $harga;
      $this->jmlHalaman = $jmlHalaman;
      $this->waktuMain = $waktuMain;
      
      
    }
    public function getLabel(){
     return "$this->penulis, $this->penerbit";
      
    }
    public function getInfoProduk(){
 
    $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
    
    
    return $str;
    
  }
    
           
  
}


class Komik extends Produk {
  public function getInfoProduk() {
  
  $str = "Komik : " . parent::getInfoProduk(). " - {$this->jmlHalaman} Halaman.";
  return $str;
   
  }
  
}

class Game extends Produk{
  public function getInfoProduk(){
  
    $str = "Game : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->waktuMain} Tahun.";
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


$produk1 = new Komik("Naruto", "Masashi Kishimoto", " Airlangga", 85000, 100, 0);


$produk2 = new Game("Free Fire", "Fery Friadhie", " Farel Fajria", 100000, 0, 12);






echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
