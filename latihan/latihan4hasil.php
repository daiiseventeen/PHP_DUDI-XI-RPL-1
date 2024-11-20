<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Nilai Ujian</title>
    <style>
        body {
            background-color: grey;
        }
        table {
            background-color: white;
            padding: 50px;
            border-radius: 10px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
            width: 400px;
            margin-top: 50px;
            border: 4px solid blue;
        }
        td {
            padding: 10px;
        }
        h2 {
            color: black;
        }
    </style>
</head>
<body>
    <center>
        <?php
        if (isset($_POST['proses'])) {
            $nama_lengkap1 = $_POST['nama'];
            $kelas1 = $_POST['kelas'];
            $jurusan1 = $_POST['jurusan'];
            $nilai_indo = $_POST['indonesia'];
            $nilai_inggris = $_POST['inggris'];
            $nilai_mtk = $_POST['matematika'];
            $nilai_produktif = $_POST['produktif'];

            // Mengecek apakah ada form yang belum diisi
            if (empty($nama_lengkap1) || empty($kelas1) || empty($jurusan1) || empty($nilai_indo) || empty($nilai_inggris) || empty($nilai_mtk) || empty($nilai_produktif)) {
                echo "<h3 style='color: white;'>Silakan isi semua form</h3>";
            } else {
                $rata = ($nilai_indo + $nilai_inggris + $nilai_mtk + $nilai_produktif) / 4;

                echo "<h2>Hasil Nilai Ujian</h2>";
                echo "<table cellpadding='10' cellspacing='0'>";
                echo "<tr><td>Nama</td><td>:</td><td>$nama_lengkap1</td></tr>";
                echo "<tr><td>Kelas</td><td>:</td><td>$kelas1</td></tr>";
                echo "<tr><td>Jurusan</td><td>:</td><td>$jurusan1</td></tr>";
                echo "<tr><td>Nilai B.Indonesia</td><td>:</td><td>$nilai_indo</td></tr>";
                echo "<tr><td>Nilai B.Inggris</td><td>:</td><td>$nilai_inggris</td></tr>";
                echo "<tr><td>Nilai Matematika</td><td>:</td><td>$nilai_mtk</td></tr>";
                echo "<tr><td>Nilai Produktif</td><td>:</td><td>$nilai_produktif</td></tr>";
                echo "<tr><td>Rata-rata</td><td>:</td><td>$rata</td></tr>";

                $status = ($rata > 75) ? "Anda lulus" : "Anda tidak lulus";
                echo "<tr><td>Status</td><td>:</td><td>$status</td></tr>";
                echo "</table>";
            }
        }
        ?>
    </center>
</body>
</html>
