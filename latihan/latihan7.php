      <?php

$data = [
    [
        "Nama Pemilik" => "Haddah",
        "Daftar Buah Kesukaan" => [
            [
                "Nama Buah" => "Anggur",
                "Anak Buah" => [
                    "jenis1" => "Anggur Merah", 
                    "jenis2" => "Anggur Hijau"
                ]
            ]
        ]
    ],
    [
        "Nama Pemilik" => "Sandi",
        "Daftar Buah Kesukaan" => [
            [
                "Nama Buah" => "Alpukat",
                "Anak Buah" => [
                    "jenis1" =>"Alpukat Mentega", 
                    "jenis2" =>"Alpukat Hijau"
                ]
            ],
            [
                "Nama Buah" => "Apel",
                "Anak Buah" => [
                    "jenis1" => "Apel Fuji",
                    "jenis2" => "Apel Malang"
                ]
            ]
        ]
    ],
];

foreach ($data as $buah) {
    echo "Nama Pemilik : " . $buah["Nama Pemilik"] . "<br>";
    
    echo "Daftar Buah Kesukaan : <ul>";
    foreach ($buah["Daftar Buah Kesukaan"] as $kesukaan) {
        echo "<li>" . $kesukaan["Nama Buah"] . "</li>";
        foreach ($kesukaan["Anak Buah"] as $anakBuah) {
            echo " - " . $anakBuah . " <br> ";
        }
    }
    echo "</ul><br><br>";
}

?>
