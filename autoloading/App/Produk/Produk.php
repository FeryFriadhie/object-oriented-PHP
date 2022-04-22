<?php
Abstract class Produk {
    protected $judul, 
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
    
abstract public function getInfo();

}

?>