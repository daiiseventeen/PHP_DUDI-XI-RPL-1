<?php
// mmbuat fungsi
function perkenalan($nama, $tempat_lahir, $tanggal_lahir, $jenis_kelamin, $agama, $alamat, $hobi){
  echo "Perkenalkan, nama saya" . $nama."<br>";
  echo "saya lahir : " .$tempat_lahir . "<br>";
  echo "tanggal lahir saya :" .  $tanggal_lahir. "<br>";
  echo "jenis saya : " . $jenis_kelamin. "<br>";
  echo "agama saya : " . $agama. "<br>";
  echo "alamat saya :". $alamat . "<br>";
  echo "hobi saya :". $hobi ."<br>";
}

function menghitung($angka1, $angka2) {
    echo"Bilangan ke 1 : $angka1<br>";
    echo"Bilangan ke 2 : $angka2<br>";
    $hasil = $angka1 + $angka2;
    echo"Hasilnya : $hasil";
}

// pemanggilan
perkenalan("hendri" ,  "dimana ya",  "19",  "lakiii",  "islam",  "knnnnlll",  "diemm");

echo"<br>";

menghitung(10, 20);
?>