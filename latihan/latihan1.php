<?php

$nama = "Dudi Similikiti";
$kelas = "XI RPL 1";
$indo = 80;
$inggris = 70;
$mtk = 80;
$produktif = 90;
$rata_rata = $indo + $inggris + $mtk + $produktif;
$rata_rata /= 4;

echo "<b>Nama :</b> $nama <br>";
echo "<b>Kelas : </b>$kelas <br>";
echo "<b>Nilai B.indonesia : </b>$indo<br>";
echo "<b>Nilai B.inggris : </b>$inggris<br>";
echo "<b>Nilai Matematika : </b>$mtk<br>";
echo "<b>Nilai Produktif : </b>$produktif<br>";
echo "<b>Rata-rata : </b>$rata_rata<br>";
echo "<b>----------------------------- <br>";

if ($rata_rata > 75 ) {
    echo "<b>Status : *Anda Lulus*</b>";
}else{
    echo "<b>Status : *Anda tidak lulus*</b>";
}
?>