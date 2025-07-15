<?php
echo "<h1>Hello World</h1>";

$dataDiri = [
    'nama' => 'Dudi',
    'jk' => 'Laki-laki',
    'makanan kesukaan' => 'Nasi Goreng',
    'minuman kesukaan' => 'Teh Manis',
    'hobi' => 'Volly, Boxing',
    'alamat' => 'Jl. Raya Kopo No. 506',

];

echo "<h2> ini data diri saya : </h2>";
foreach ($dataDiri as $key => $value) {
    echo "<strong>$key</strong>: $value <br>";
}

?>