<?php

namespace pbo\marketplace;

require_once('./jasa.php');

use pbo\marketpalce\Produk;

clas jasa {

    use produk;
    
    public function payment(){

        return macth($tipe){\
            "virtual" => "virtual account",
            "qris" => "QRIS"
            default => "pembayaran hanya bisa va dan qris"

        };
    }
}