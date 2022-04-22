<?php

require_once 'App/init.php';

$produk1 = new Komik("Naruto", "Masashi Kishimoto", " Airlangga", 85000, 100);
$produk2 = new Game("Free Fire", "Fery Friadhie", " Farel Fajria", 100000, 12);


$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk ( $produk1 );
$cetakProduk->tambahProduk ( $produk2 );
echo $cetakProduk->cetak();

echo "<hr>";
use App\Produk\User as ProdukUser;
use App\Service\User as ServiceUser;

new ProdukUser();
echo "<br>";
new ServiceUser();
?>
