<?php

$novel =[ [
    "Judul" => "Dilan 1991",
    "Penulis" => "pidi baik",
    "Tanggal_rilis" => "20 november 2024",
    "Penerbit" => "Airlangga",
    ],
    [
    "Judul" => "Laskar Pelangi",
    "Penulis" => "Andrea Hirata",
    "Tanggal_rilis" => "2005",
    "Penerbit" => "Bentang Pustaka",
    ],
    [
    "Judul" => "Pulang",
    "Penulis" => "Leila S. Chudori",
    "Tanggal_rilis" => "2012",
    "Penerbit" => "KPG (Kepustakaan Populer Gramedia)",
    
    ],
    [
    "Judul" => "Bumi Manusia",
    "Penulis" => "Pramoedya Ananta Toer",
    "Tanggal_rilis" => "1980",
    "Penerbit" => "Hasta Mitra",
    ],
    [
    "Judul" => "5 CM",
    "Penulis" => "Donny Dhirgantoro",
    "Tanggal_rilis" => "2005",
    "Penerbit" => "Grasindo",
    ]
    ];

    foreach ($novel as $cerita ) {
        echo "Judul : ".$cerita["Judul"]."<br>";
        echo "Penulis: ".$cerita["Penulis"]."<br>";
        echo "Tanggal_rilis : ".$cerita["Tanggal_rilis"]."<br>";
        echo "Penerbit : ".$cerita["Penerbit"]."<br>";
        echo "<br>";
    }




?>