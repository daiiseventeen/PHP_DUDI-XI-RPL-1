<?php

$artikel =[ [
    "judul" => "Belajar programmer",
    "penulis" => "petanikode",
    "view" => 128,
    "tanggal" => "17 juli 2007"
    ],
    [
    "judul" => "Belajar programmer",
    "penulis" => "programming unpas",
    "view" => 228,
    "tanggal" => "10 juni 2000"
    ],
    [
    "judul" => "Belajar programmer",
    "penulis" => "coekode",
    "view" => 1228,
    "tanggal" => "17 jmei 2009"
    
    ],
    [
    "judul" => "Belajar programmer",
    "penulis" => "kodein",
    "view" => 1218,
    "tanggal" => "1 juni 2002"
    ]
    ];

    foreach ($artikel as $majalah ) {
        echo "Judul : ".$majalah["judul"]."<br>";
        echo "penulis: ".$majalah["penulis"]."<br>";
        echo "view : ".$majalah["view"]."<br>";
        echo "Tanggal : ".$majalah["tanggal"]."<br>";
        echo    "<br>";
    }




?>