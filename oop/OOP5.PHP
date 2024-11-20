<!-- construct and destruct -->
<?php

class kucing{

     public function __construct() {
        echo "saya kucing";
        echo "<br>";
    }

    public function makan() {
        echo "whiskas";
    }

    public function minum() {
        echo "air";
    }

    public function __destruct()
    {
        echo "suara kucing meonggggggmek";
        
    }
}

$cetak = new kucing();


$cetak->makan();
echo "<br>";
$cetak->minum();
echo "<br>";
?>