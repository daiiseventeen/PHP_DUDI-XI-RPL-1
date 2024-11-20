<?php

// membuat array assosiatif
$artikel = [
    "judul" => "Belajar programmer",
    "penulis" => "petanikode",
    "view" => 128,
    "tanggal" => "17 juli 2007"
];

// mencetaj isi array assosiatif
echo "<h2>".$artikel["judul"]."</h2>";
echo "<p> oleh : ".$artikel["penulis"]."</p>";
echo "<p> view : ".$artikel["view"]."</p>";
echo "<p> tanggal : ".$artikel["tanggal"]."</p>";
?>