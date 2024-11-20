<?php

$provinsi = "jawa timur";
$kota = "nganjuk";

if ($provinsi == "jawa barat") {

    echo "Welcome to jabar <br>";

    if ($kota == "bandung") {
        echo "ini kota bandung";
    }elseif ($kota == "cimahi") {
        echo "ini kota cimahi";
    }elseif ($kota == "bogor") {
        echo "ini kota bogor";
    }elseif ($kota == "bekasi") {
        echo "ini kota bekasi";
    }elseif ($kota == "depok") {
        echo "ini kota depok";
    }
    else {
        echo"belum ada kota di jawa barat";
    }

}elseif ($provinsi == "jawa tengah") {

    echo "Welcome to jateng <br>";

    if ($kota == "semarang") {
        echo "ini kota semarang";
    }elseif ($kota == "tegal") {
        echo "ini kota tegal";
    }elseif ($kota == "karanganyar") {
        echo "ini kota karanganyar";
    }elseif ($kota == "pekalongan") {
        echo "ini kota pekalongan";
    }elseif ($kota == "salatiga") {
        echo "ini kota salatiga";
    }
    else {
        echo"belum ada kota di jawa tengah";
    }

}elseif ($provinsi == "jawa timur") {

    echo "Welcome to jatim <br>";

    if ($kota == "nganjuk") {
        echo "ini kota nganjuk";
    }elseif ($kota == "surabya") {
        echo "ini kota surabaya";
    }elseif ($kota == "trenggalek") {
        echo "ini kota trenggalek";
    }elseif ($kota == "gresik") {
        echo "ini kota gresik";
    }elseif ($kota == "pamekasan") {
        echo "ini kota pamekasan";
    }
    else {
        echo"belum ada kota di jawa timur";
    }

}else {
    echo"belum ada provinsi";
};
?>