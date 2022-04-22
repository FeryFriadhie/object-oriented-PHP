<?php

 

class Produk {
    public $judul, 
           $penulis, 
           $penerbit, 
           $harga;
           
    //nilai default      
    public function __construct($judul = "judul", $penulis = " penulis", $penerbit = "penerbit", $harga = 0){
      
      $this->judul = $judul;
      $this->penulis = $penulis;
      $this->penerbit = $penerbit;
      $this->harga = $harga;
      
    }
    
    
           
    public function getLabel(){
     return "$this->penulis, $this->penerbit";
      
    }      
           
  
  
}



$produk1 = new Produk("Naruto", "Masashi Kishimoto", " Airlangga", 85000);


//$produk3->judul = "Naruto";
//$produk3->penulis = "Masashi Kishimoto";
//$produk3->penerbit = "Airlangga";
//$produk3->harga = 85000;
/// var_dump($produk3);

//echo "Komik : $produk3->penulis, $produk3->penerbit";
//echo"<br>";
//echo $produk3->getLabel();
//echo"<hr>";

$produk2 = new Produk("Free Fire", "Fery", " Farel Fajria", 100000);
$produk3 = new Produk("Mobile Legend");


//$produk4->judul = "Free Fire";
//$produk4->penulis = "Fery";
//$produk4->penerbit = "Farel Fajria";
//$produk4->harga = 100000;


echo "Komik : " . $produk1->getLabel();
echo "<br>";
echo "Game : " . $produk2->getLabel();
echo "<br>";
var_dump($produk3);
