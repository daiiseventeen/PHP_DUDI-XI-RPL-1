<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penggajihan Karyawan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: grey;
            margin: 0;
            padding: 20px;
        }
        .container {
            background-color: white;
            padding: 20px;
            margin: 0 auto;
            width: 50%;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #333;
        }
        b {
            color: #007bff;
        }
        .result {
            margin-bottom: 20px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #e9ecef;
        }
        .result p {
            margin: 5px 0;
        }
        .highlight {
            font-weight: bold;
            color: #28a745;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Penggajihan Karyawan</h1>
    <?php

    class PenggajihanKaryawan {
        public $total_potongan;
        public $total_gaji;
        public $gaji; 
        public $tunjangan; 

        public function gaji_pokok($nama, $jabatan) {
            echo "<div class='result'><b> Gaji pokok </b><br>";
            echo "<p>Nama karyawan : <span class='highlight'>$nama</span></p>";
            echo "<p>Jabatan : <span class='highlight'>$jabatan</span></p>";

            if ($jabatan == "Direktur") {
                $this->gaji = 10000000;
            } elseif ($jabatan == "Manager") {
                $this->gaji = 7500000;
            } elseif ($jabatan == "Karyawan") {
                $this->gaji = 5000000;
            } elseif ($jabatan == "Ob") {
                $this->gaji = 2500000;
            } else {
                $this->gaji = 0;
            }

            echo "<p>Gaji pokok : Rp " . number_format($this->gaji) . "</p></div>";
        }

        public function tunjangan($pendidikan) {
            echo "<div class='result'><b> Tunjangan </b><br>";
            echo "<p>Pendidikan : <span class='highlight'>$pendidikan</span></p>";

            if ($pendidikan == "S1") {
                $this->tunjangan = 1000000;
            } elseif ($pendidikan == "SMA") {
                $this->tunjangan = 750000;
            } elseif ($pendidikan == "SMP") {
                $this->tunjangan = 500000;
            } elseif ($pendidikan == "SD") {
                $this->tunjangan = 250000;
            } else {
                $this->tunjangan = 0;
            }

            echo "<p>Tunjangan pendidikan : Rp " . number_format($this->tunjangan) . "</p></div>";
        }

        public function potongan($tabungan, $pinjaman) {
            echo "<div class='result'><b> Potongan </b><br>";
            echo "<p>Tabungan : Rp " . number_format($tabungan) . "</p>";
            echo "<p>Pinjaman : Rp " . number_format($pinjaman) . "</p>";
            $this->total_potongan = $tabungan + $pinjaman;
            echo "<p>Total potongan : Rp " . number_format($this->total_potongan) . "</p></div>";
        }

        public function total_gaji_bersih() {
            echo "<div class='result'><b> Total Gaji Bersih </b><br>";
            $this->total_gaji = $this->gaji + $this->tunjangan - $this->total_potongan;
            echo "<p>Total gaji bersih : Rp " . number_format($this->total_gaji) . "</p></div>";
        }
    }

    $cetak = new PenggajihanKaryawan();

    $cetak->gaji_pokok("Dudi", "Direktur");
    echo "<br>";
    $cetak->tunjangan("S1");
    echo "<br>";
    $cetak->potongan(2000000, 1000000);
    echo "<br>";
    $cetak->total_gaji_bersih();

    ?>
</div>

</body>
</html>
