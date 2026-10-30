<?php

//manghil file propertyconstant
require('./propertyconstant.php');

use pbo\marketplace\produk;

//object
 $produk = new produk('P0001','laptop',10000000,5);

  // hitung PAJAK
  //$pajak = produk::PAJAK * 100;
  //$jumlahpajak =  $produk->harga * produk::PAJAK; //1.100.000

  //total
  //$total =  $produk->harga +  $jumlahpajak;


  //hasil 
echo "produk: ". $produk->nama;
echo "<br>";

echo "harga: ". $produk->harga;
echo "<br>";

echo "stok: ". $produk->stok;
echo "<br>";

echo "pajak: ". $produk->pajak()."%";
echo "<br>";

echo "total harga setelah pajak: rp". $produk->total();