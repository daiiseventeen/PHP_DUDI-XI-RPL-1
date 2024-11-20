<?php

$data = [
    [
        "Nis" => "1001",
        "Nama" => "Haddah",
        "Kelas" => "11 RPL 3",
        "Ekskul" => ["Anggur"] 
    ],
    [
        "Nis" => "1002",
        "Nama" => "Sandi",
        "Kelas" => "11 RPL 1",
        "Ekskul" => ["Alpukat", "Apel"]
    ],
];

foreach ($data as $siswa) {
    echo "Nis : " . $siswa["Nis"] . "<br>";
    echo "Nama : " . $siswa["Nama"] . "<br>";
    echo "Kelas : " . $siswa["Kelas"] . "<br>";
    
    echo "Ekskul : <ul>";
    foreach ($siswa["Ekskul"] as $ekskul) {
        echo "<li>" . $ekskul . "</li>";
    }
    echo "</ul><br><br>";
}

?>
