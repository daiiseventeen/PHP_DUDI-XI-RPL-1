<?php

// buat clas
class kucing{

    //property
    var $warna;
    var $jenis;
    
    //method manusia
    public function makan(){
        echo "Kucing makan whiskas <br/>";
    }
    
    public function minum(){
        echo "kucing suka minum <br/>";
    }
    
}
//instansiasi class kucing
$cetak = new kucing();

//memanggil method makan
echo $cetak->makan();

//memanggil method minum
echo $cetak->minum();

// memanggil property
echo $cetak->warna = "kuning";
echo "<br>";
echo $cetak->warna = "persia";