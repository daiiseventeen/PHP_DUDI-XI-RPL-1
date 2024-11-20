<?php
$nama = "Hana";
$jk = "Perempuan";
$jenis= "minuman";
$menu = "jus";
$jumlah = 7;

echo "-----------RESTORAN SELALU RAME-----------<br>";

if ($jenis == "makanan")  {
    echo "Nama : $nama <br>";
    echo "Jenis kelamin : $jk<br>";
    echo "Jenis : $jenis<br>";

    if ($menu == "nasi goreng") {
        $harga = 10000;
        $total = $harga * $jumlah;
        echo "Menu : $menu <br>";
        echo "Harga : $harga <br>";
        echo "Jumlah : $jumlah <br>";
        if ($total >= 50000) {
            $diskon = $total / 100 * 20;
            $bayar = $total - $diskon;
            echo "Total : $total <br>";
            echo "Diskon 20% : $diskon <br>";
            echo "Total bayar : $bayar <br>";
        }else {
            echo "total bayar : $total";
        }
    }

  elseif ($menu == "mie goreng") {
        $harga = 15000;
        $total = $harga * $jumlah;
        echo "Menu : $menu <br>";
        echo "Harga : $harga <br>";
        echo "Jumlah : $jumlah <br>";
        if ($total >= 50000) {
            $diskon = $total / 100 * 20;
            $bayar = $total - $diskon;
            echo "Total : $total <br>";
            echo "Diskon 20% : $diskon <br>";
            echo "Total bayar : $bayar <br>";
        }else {
            echo "total bayar : $total";
        }
    }elseif ($menu == "ayam goreng") {
        $harga = 20000;
        $total = $harga * $jumlah;
        echo "Menu : $menu <br>";
        echo "Harga : $harga <br>";
        echo "Jumlah : $jumlah <br>";
        if ($total >= 50000) {
            $diskon = $total / 100 * 20;
            $bayar = $total - $diskon;
            echo "Total : $total <br>";
            echo "Diskon 20% : $diskon <br>";
            echo "Total bayar : $bayar <br>";
        }else {
            echo "total bayar : $total";
        }
    }
}elseif($jenis == "minuman")  {
    echo "Nama : $nama <br>";
    echo "Jenis kelamin : $jk<br>";
    echo "Jenis : $jenis<br>";

    if ($menu == "Air mineral") {
        $harga = 5000;
        $total = $harga * $jumlah;
        echo "Menu : $menu <br>";
        echo "Harga : $harga <br>";
        echo "Jumlah : $jumlah <br>";
        if ($total >= 50000) {
            $diskon = $total / 100 * 20;
            $bayar = $total - $diskon;
            echo "Total : $total <br>";
            echo "Diskon 20% : $diskon <br>";
            echo "Total bayar : $bayar <br>";
        }else {
            echo "total bayar : $total";
        }
    }

  elseif ($menu == "Fresh tea") {
        $harga = 7000;
        $total = $harga * $jumlah;
        echo "Menu : $menu <br>";
        echo "Harga : $harga <br>";
        echo "Jumlah : $jumlah <br>";
        if ($total >= 50000) {
            $diskon = $total / 100 * 20;
            $bayar = $total - $diskon;
            echo "Total : $total <br>";
            echo "Diskon 20% : $diskon <br>";
            echo "Total bayar : $bayar <br>";
        }else {
            echo "total bayar : $total";
        }
    }elseif ($menu == "jus") {
        $harga = 12000;
        $total = $harga * $jumlah;
        echo "Menu : $menu <br>";
        echo "Harga : $harga <br>";
        echo "Jumlah : $jumlah <br>";
        if ($total >= 50000) {
            $diskon = $total / 100 * 20;
            $bayar = $total - $diskon;
            echo "Total : $total <br>";
            echo "Diskon 20% : $diskon <br>";
            echo "Total bayar : $bayar <br>";
        }else {
            echo "total bayar : $total";
        }
    }
}

?>