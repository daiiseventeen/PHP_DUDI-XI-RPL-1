<?php
// 
function menghitungLuasPersegi($s1, $s2){
    echo"1. Sebuah persegi memiliki sisi 4 cm.<br>";
    echo" rumusnya adalah L = s x s.<br>";
    echo"Sisi pertama $s1 cm<br>";
    echo"Sisi kedua $s2 cm<br>";
    $hasil = $s1 * $s2;
    echo"Jadi luas persegi adalah: $hasil cm²<br>";
}

menghitungLuasPersegi(4,4);

echo"<br><br>";

function menghitungLuasPersegiPanjang($P, $L){
    echo"2. Ridwan membeli kertas berbentuk persegi panjang dengan panjang 10 cm dan lebar 3 cm.<br>";
    echo"rumusnya adalah L = p x l.<br>";
    echo"Panjang: $P cm<br>";
    echo"Lebar: $L cm<br>";
    $hasil = $P * $L;
    echo"Jadi luas persegi panjang adalah: $hasil cm²<br>";
}

menghitungLuasPersegiPanjang(10, 3);

echo"<br><br>";

function menghitungLuasSegitiga($alas, $tinggi){
    echo"3. Menghitung luas segitiga dengan alas 10 cm dan tinggi 3 cm.<br>";
    echo"rumusnya adalah 1/2 x a x t <br>";
    echo"Alas: $alas cm<br>";
    echo"Tinggi: $tinggi cm<br>";
    $hasil = 0.5 * $alas * $tinggi;
    echo"Jadi luas segitiga adalah: $hasil cm²<br>";
}

menghitungLuasSegitiga(10, 3);

echo"<br><br>";

function menghitungLuasLingkaran($jariJari){
    echo"4. Menghitung luas lingkaran dengan jari-jari 10 cm.<br>";
    echo"rumusnya adalah  L = π x r² <br>";
    echo"Jari-jari: $jariJari cm<br>";
    $hasil = 3.14 * $jariJari * $jariJari;
    echo"Jadi luas lingkaran adalah: $hasil cm²<br>";
}

menghitungLuasLingkaran(10);

echo"<br><br>";

?>
