<?php

// data json
$dataJSON = '
    [
{
    "nama" : "Nurul huda",
    "alamat" : "Bandung"    
},
{
    "nama" : "Kenzo ilham alhaqi",
    "alamat" : "Jakarta"    
}

    ]';


    // dikonversikan ke JSON
    $list = json_decode($dataJSON);

    // tampilkan ke JSON
    foreach ($list as $mahasiswa) {
        echo "Nama : {$mahasiswa->nama} <br>";
        echo "Alamat : {$mahasiswa->alamat} <br>";
        echo "<hr>";
    }
?>