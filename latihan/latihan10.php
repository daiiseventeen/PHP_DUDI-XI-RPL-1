<?php

class PenggajihanKaryawan {
    public $total_potongan;
    public $total_gaji;
    public $gaji; 
    public $tunjangan; 

    public function gaji_pokok($nama, $jabatan) {
        echo "<b> Gaji pokok </b><br>";
        echo "Nama karyawan : $nama<br>";
        echo "Jabatan : $jabatan<br>";

        if ($jabatan == "direktur") {
            $this->gaji = 10000000;
        } elseif ($jabatan == "manager") {
            $this->gaji = 7500000;
        } elseif ($jabatan == "karyawan") {
            $this->gaji = 5000000;
        } elseif ($jabatan == "ob") {
            $this->gaji = 2500000;
        } else {
            $this->gaji = 0;
        }

        echo "Gaji pokok : Rp " . number_format($this->gaji) . "<br>";
    }

    public function tunjangan($pendidikan) {
        echo "<b> Tunjangan </b><br>";
        echo "Pendidikan : $pendidikan<br>";

        if ($pendidikan == "s1") {
            $this->tunjangan = 1000000;
        } elseif ($pendidikan == "sma") {
            $this->tunjangan = 750000;
        } elseif ($pendidikan == "smp") {
            $this->tunjangan = 500000;
        } elseif ($pendidikan == "sd") {
            $this->tunjangan = 250000;
        } else {
            $this->tunjangan = 0;
        }

        echo "Tunjangan pendidikan : Rp " . number_format($this->tunjangan) . "<br>";
    }

    public function potongan($tabungan, $pinjaman) {
        echo "<b> Potongan </b><br>";
        echo "Tabungan : Rp " . number_format($tabungan) . "<br>";
        echo "Pinjaman : Rp " . number_format($pinjaman) . "<br>";
        $this->total_potongan = $tabungan + $pinjaman;
        echo "Total potongan : Rp " . number_format($this->total_potongan) . "<br>";
    }

    public function total_gaji_bersih() {
        echo "<b> Total Gaji Bersih </b><br>";
        $this->total_gaji = $this->gaji + $this->tunjangan - $this->total_potongan;
        echo "Total gaji bersih : Rp " . number_format($this->total_gaji) . "<br>";
    }
}

$cetak = new PenggajihanKaryawan();

$cetak->gaji_pokok("Dudi", "direktur");
echo "<br>";
$cetak->tunjangan("s1");
echo "<br>";
$cetak->potongan(2000000, 1000000);
echo "<br>";
$cetak->total_gaji_bersih();

?>
