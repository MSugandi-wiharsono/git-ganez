<?php

//manghil file propertyconstant
require('./propertyconstant.php');

use pbo\marketplace\produk;

//object
 $produk = new produk();

 $produk->setkode('P0001')->setnama('laptop')->setharga('10000000')->setstok('5');

  // hitung PAJAK
  //$pajak = produk::PAJAK * 100;
  //$jumlahpajak =  $produk->harga * produk::PAJAK; //1.100.000

  //total
  //$total =  $produk->harga +  $jumlahpajak;


  //hasil 
echo "produk: ". $produk->getnama();
echo "<br/>";

echo "harga: ". $produk->getharga();
echo "<br/>";

echo "stok: ". $produk->getstok();
echo "<br/>";

echo "pajak: ". $produk->pajak()."%";
echo "<br/>";

echo "total harga setelah pajak: rp". $produk->total();