<?php

// class induk
class kendaraan{
    // property
    public $warna = "hitam";
    // method
   public function a() {
        echo "rodanya ada dua";
   }

}


    // class anak
    class mobil extends kendaraan{

        public function b() {
            echo $this->a();
            echo "<br>";
            echo "warna saya adalah $this->warna";
        }
    }

    $cetak = new mobil();

    echo $cetak->b();
   
?>