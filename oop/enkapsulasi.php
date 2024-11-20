<?php

class contoh{

    // ada p3 protected,protec,dan private
    public $nama = "daffa";


    public function perkenalan() {
        echo "assalaamualaikum";
    }
}

$cetak = new contoh();

echo $cetak->perkenalan();
echo $cetak->nama;
?>