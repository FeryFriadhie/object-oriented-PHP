<?php

use Produk as GlobalProduk;

abstract class Produk {
    private $judul, 
            $penulis,
            $penerbit, 
            $harga, 
            $diskon = 0;
        
           
    //nilai default      
    public function __construct($judul = "judul", $penulis = " penulis", $penerbit = "penerbit", $harga = 0){
      
      $this->judul = $judul;
      $this->penulis = $penulis;
      $this->penerbit = $penerbit;
      $this->harga = $harga;
    }
    
    public function setjudul( $judul ){
      $this->judul = $judul;
    }
    
    public function getjudul(){
      return $this->judul;
    }
    
    public function setpenulis( $penulis ){
      $this->penulis = $penulis;
    }
    
    public function getpenulis(){
      return $this->penulis;
    }
    
    public function setpenerbit( $penerbit ){
      $this->penerbit = $penerbit;
    }
    
    public function getpenerbit(){
      return $this->penerbit;
    }
    
    public function setDiskon($diskon ){
      $this->Diskon = $diskon;
    }
    
    public function getDiskon(){
      return $this->diskon;
    }
    
    public function setHarga( $harga ){
      $this->harga = $harga;
    }
    
    public function getHarga(){
        return $this->harga - ($this->harga * $this->diskon / 100);
      }
      
    public function getLabel(){
     return "$this->penulis, $this->penerbit";
      
    }
    
    //Class abstract
    abstract public function getInfoProduk();
    
    public function getInfo (){
    $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
    
    return $str;
    
  }
}


class Komik extends Produk {
  public $jmlHalaman;
  public function __construct($judul = "judul", $penulis = " penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0){
    
  parent::__construct($judul, $penulis, $penerbit, $harga);

  $this->jmlHalaman = $jmlHalaman;
    
  }
  public function getInfoProduk() {
  $str = "Komik : " . $this->getInfo(). " - {$this->jmlHalaman} Halaman.";
  return $str;
   
  }
  
}

class Game extends Produk{
  public $waktuMain;
  public function __construct($judul = "judul", $penulis = " penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0){
    
  parent::__construct($judul, $penulis, $penerbit, $harga); 

    $this->waktuMain = $waktuMain;
  }

     
  
 public function getInfoProduk(){
    $str = "Game : ". $this->getInfo(). " - {$this->waktuMain} Tahun.";
    return $str;
  }
}


class CetakInfoProduk {
  public $daftarProduk = array();
  public function tambahProduk (Produk $produk) {
    $this->daftarProduk[] = $produk;
    
  } 
  
  public function Cetak() {
  $str = "DAFTAR PRODUK : <br>";
  foreach ($this->daftarProduk as $p) {
    
    $str .= "- {$p->getInfoProduk()} <br>";
  }
  
  return $str;
   }
}


$produk1 = new Komik("Naruto", "Masashi Kishimoto", " Airlangga", 85000, 100);
$produk2 = new Game("Free Fire", "Fery Friadhie", " Farel Fajria", 100000, 12);


$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk ( $produk1 );
$cetakProduk->tambahProduk ( $produk2 );
echo $cetakProduk->cetak();

