<?php

class bangun_datar{

    public $luasPersegi;
    public $luasPersegiPanjang;
    public $luasSegitiga;
    public $luasLingkaran;

    public function menghitungLuasPersegi($s1, $s2){
        echo"1. Sebuah persegi memiliki sisi 4 cm.<br>";
        echo" rumusnya adalah L = s x s.<br>";
        echo"Sisi pertama $s1 cm<br>";
        echo"Sisi kedua $s2 cm<br>";
        $this->luasPersegi = $s1 * $s2;
        echo"Jadi luas persegi adalah: $this->luasPersegi cm²<br>";
    }

    public function menghitungLuasPersegiPanjang($P, $L){
        echo"2. Ridwan membeli kertas berbentuk persegi panjang dengan panjang 10 cm dan lebar 3 cm.<br>";
        echo"rumusnya adalah L = p x l.<br>";
        echo"Panjang: $P cm<br>";
        echo"Lebar: $L cm<br>";
        $this->luasPersegiPanjang = $P * $L;
        echo"Jadi luas persegi panjang adalah: $this->luasPersegiPanjang cm²<br>";
    }

    public function menghitungLuasSegitiga($alas, $tinggi){
        echo"3. Menghitung luas segitiga dengan alas 10 cm dan tinggi 3 cm.<br>";
        echo"rumusnya adalah 1/2 x a x t <br>";
        echo"Alas: $alas cm<br>";
        echo"Tinggi: $tinggi cm<br>";
        $this->luasSegitiga = 0.5 * $alas * $tinggi;
        echo"Jadi luas segitiga adalah: $this->luasSegitiga cm²<br>";
    }

    function menghitungLuasLingkaran($jariJari){
        echo"4. Menghitung luas lingkaran dengan jari-jari 10 cm.<br>";
        echo"rumusnya adalah  L = π x r² <br>";
        echo"Jari-jari: $jariJari cm<br>";
        $this->luasLingkaran = 3.14 * $jariJari * $jariJari;
        echo"Jadi luas lingkaran adalah: $this->luasLingkaran cm²<br>";
    }

}

$cetak = new bangun_datar();

$cetak->menghitungLuasPersegi(4,4);
echo"<br>";
$cetak->menghitungLuasPersegiPanjang(10,3);
echo"<br>";
$cetak->menghitungLuasSegitiga(10,3);
echo"<br>";
$cetak->menghitungLuasLingkaran(10);
?>