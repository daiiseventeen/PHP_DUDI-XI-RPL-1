<?php

$jurusan = "TBSM";
$kelas = "11 TBSM";

if ($jurusan == "RPL") {

    if ($kelas == "10 RPL") {
        echo "ini kelas 10 RPL";
    }elseif ($kelas == "11 RPL") {
        echo "ini kelas 11 RPL";
    }elseif ($kelas == "12 RPL") {
        echo "ini kelas 12 RPL";
    }else {
        echo"belum ada kelas";
    }

}elseif ($jurusan == "TKRO") {

    if ($kelas == "10 TKRO") {
        echo "ini kelas 10 TKRO";
    }elseif ($kelas == "11 TKRO") {
        echo "ini kelas 11 TKRO";
    }elseif ($kelas == "12 TKRO") {
        echo "ini kelas 12 TKRO";
    }else {
        echo"belum ada kelas";
    }

}elseif ($jurusan == "TBSM") {

    if ($kelas == "10 TBSM") {
        echo "ini kelas 10 TBSM";
    }elseif ($kelas == "11 TBSM") {
        echo "ini kelas 11 TBSM";
    }elseif ($kelas == "12 TBSM") {
        echo "ini kelas 12 TBSM";
    }else {
        echo"belum ada kelas";
    }

}else {
    echo"belum ada jurusan";
};
?>