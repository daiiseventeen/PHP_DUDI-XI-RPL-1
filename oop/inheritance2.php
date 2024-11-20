<?php

class BangunDatar {

    public $luas;
    public $keliling;

}

class Luas extends BangunDatar {

    public function menghitungLuasPersegi($s1, $s2){
        echo "1. Sebuah persegi memiliki sisi 4 cm.<br>";
        echo "Rumusnya adalah L = s x s.<br>";
        echo "Sisi pertama: $s1 cm<br>";
        echo "Sisi kedua: $s2 cm<br>";
        $this->luas = $s1 * $s2;
        echo "Jadi luas persegi adalah: $this->luas cm²<br>";
    }

    public function menghitungLuasPersegiPanjang($P, $L){
        echo "2. Ridwan membeli kertas berbentuk persegi panjang dengan panjang 10 cm dan lebar 3 cm.<br>";
        echo "Rumusnya adalah L = p x l.<br>";
        echo "Panjang: $P cm<br>";
        echo "Lebar: $L cm<br>";
        $this->luas = $P * $L;
        echo "Jadi luas persegi panjang adalah: $this->luas cm²<br>";
    }

    public function menghitungLuasSegitiga($alas, $tinggi){
        echo "3. Menghitung luas segitiga dengan alas 10 cm dan tinggi 3 cm.<br>";
        echo "Rumusnya adalah 1/2 x a x t <br>";
        echo "Alas: $alas cm<br>";
        echo "Tinggi: $tinggi cm<br>";
        $this->luas = 0.5 * $alas * $tinggi;
        echo "Jadi luas segitiga adalah: $this->luas cm²<br>";
    }

    public function menghitungLuasLingkaran($jariJari){
        echo "4. Menghitung luas lingkaran dengan jari-jari 10 cm.<br>";
        echo "Rumusnya adalah L = π x r² <br>";
        echo "Jari-jari: $jariJari cm<br>";
        $this->luas = 3.14 * $jariJari * $jariJari;
        echo "Jadi luas lingkaran adalah: $this->luas cm²<br>";
    }
}

class Keliling extends BangunDatar {

    public function menghitungKelilingPersegi($s1){
        echo "Sebuah persegi memiliki sisi 10 cm. Berapakah keliling dari persegi tersebut?<br>";
        echo "Rumusnya adalah K = 4 x s.<br>";
        echo "Sisi: $s1 cm<br>";
        $this->keliling = 4 * $s1;
        echo "Maka, keliling persegi dengan sisi $s1 cm adalah $this->keliling cm.<br>";
    }

    public function menghitungKelilingPersegiPanjang($P, $L){
        echo "Menghitung keliling persegi panjang dengan panjang 10 cm dan lebar 3 cm.<br>";
        echo "Rumusnya adalah K = 2 x (p + l).<br>";
        echo "Panjang: $P cm<br>";
        echo "Lebar: $L cm<br>";
        $this->keliling = 2 * ($P + $L);
        echo "Jadi keliling persegi panjang adalah: $this->keliling cm.<br>";
    }

    public function menghitungKelilingSegitiga($s1, $s2, $s3){
        echo "Menghitung keliling segitiga dengan sisi-sisi 10 cm, 6 cm, dan 8 cm.<br>";
        echo "Rumusnya adalah K = s1 + s2 + s3.<br>";
        echo "Sisi 1: $s1 cm<br>";
        echo "Sisi 2: $s2 cm<br>";
        echo "Sisi 3: $s3 cm<br>";
        $this->keliling = $s1 + $s2 + $s3;
        echo "Jadi keliling segitiga adalah: $this->keliling cm.<br>";
    }

    public function menghitungKelilingLingkaran($jariJari){
        echo "Menghitung keliling lingkaran dengan jari-jari 10 cm.<br>";
        echo "Rumusnya adalah K = 2 x π x r.<br>";
        echo "Jari-jari: $jariJari cm<br>";
        $this->keliling = 2 * 3.14 * $jariJari;
        echo "Jadi keliling lingkaran adalah: $this->keliling cm.<br>";
    }
}

$cetakLuas = new Luas();
$cetakKeliling = new Keliling();

$cetakLuas->menghitungLuasPersegi(4, 4);
echo "<br>";
$cetakLuas->menghitungLuasPersegiPanjang(10, 3);
echo "<br>";
$cetakLuas->menghitungLuasSegitiga(10, 3);
echo "<br>";
$cetakLuas->menghitungLuasLingkaran(10);

echo "<h2>Keliling</h2>";

$cetakKeliling->menghitungKelilingPersegi(10);
echo "<br>";
$cetakKeliling->menghitungKelilingPersegiPanjang(10, 3);
echo "<br>";
$cetakKeliling->menghitungKelilingSegitiga(10, 6, 8);
echo "<br>";
$cetakKeliling->menghitungKelilingLingkaran(10);

?>
