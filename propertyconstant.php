<?php

class produk{

//property
   public string $kode;
   public string $nama;
   public int $harga;
   public int $stok;
   
   public const PAJAK = 0.11;

   public function __construct($kode,$nama,$harga,$stok){
      $this->kode = $kode;
      $this->nama = $nama;
      $this->harga = $harga;
      $this->stok = $stok;
   }

   public function pajak(){
      return self::PAJAK * 100;
   }
   public function total(){
      return $this->harga + ($this->harga * self::PAJAK);
   }
}
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