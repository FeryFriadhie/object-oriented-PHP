<?php
//static keyword
Class ContohStatic {
  public static $angka = 1;
  public static function halo(){
    return "Halo ". self::$angka++ . " Kali.";
  }
  
}

echo ContohStatic::$angka;
echo "<br>";
echo ContohStatic::halo();
echo "<br>";
echo ContohStatic::halo();
echo "<hr>";

//Oophp
Class Contoh {
  public static $angka = 1;
  
  public function hai(){
    return "Hai ". self::$angka++ . " Kali. <br>";
    
  }
}

$obj = new Contoh;
echo $obj->hai();
echo $obj->hai();
echo $obj->hai();

echo "<hr>";

$obj2 = new Contoh;
echo $obj2->hai();
echo $obj2->hai();
echo $obj2->hai();

echo "<hr>";
?>
