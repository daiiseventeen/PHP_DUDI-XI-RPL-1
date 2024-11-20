<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Pendaftaran Siswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 200vh;
            margin: 0;
        }
        .card {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
            padding: 25px;
            max-width: 650px;
            width: 100%;
            margin: 20px;
        }
        .card h2 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
            font-size: 24px;
            border-bottom: 2px solid #ddd;
            padding-bottom: 10px;
        }
        .card table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
        }
        .card table th, .card table td {
            text-align: left;
            padding: 12px;
            border-bottom: 1px solid #ddd;
        }
        .card table th {
            background-color: #f2f2f2;
            font-weight: bold;
            color: #555;
            width: 35%;
        }
        .card table td {
            color: #555;
        }
        .card .section-title {
            font-size: 18px;
            color: #0066cc;
            margin-top: 20px;
            border-bottom: 1px solid #ddd;
            padding-bottom: 5px;
        }
    </style>
</head>
<body>

<?php
if (isset($_POST['submit'])) {
    $jrsn = $_POST['jurusan'];
    $namasiswa = $_POST['namasiswa'];
    $jk = $_POST['jk'];
    $tempat_L = $_POST['tempatLahir'];
    $tanggal_L = $_POST['tanggalL'];
    $nohp_siswa = $_POST['nohpsiswa'];
    $email = $_POST['email'];
    $provinsi = $_POST['provinsi'];
    $kab = $_POST['kab_kota'];
    $kec = $_POST['kecamatan'];
    $desa = $_POST['desa_kelurahan'];
    $alamat = $_POST['alamat'];
    $kode = $_POST['kodepos'];
    $asal_sekolah = $_POST['asalsekolah'];
    $alamat_sekolah = $_POST['alamatsekolah'];
    $namaortu = $_POST['namaortu'];
    $pekerjaan = $_POST['pekerjaanortu'];
    $no_ortu = $_POST['noortu'];
    $alamat_ortu = $_POST['alamatortu'];


    class siswa_baru{

        public function namaSiswa($jrsn2, $namasiswa2, $jk2, $tempat_L2, $tanggal_L2, $nohp_siswa2, $email2) {
            echo "<tr><th>Jurusan</th><td> $jrsn2 </td></tr>";
            echo "<tr><th>Nama Siswa</th><td> $namasiswa2 </td></tr>";
            echo "<tr><th>Jenis Kelamin</th><td> $jk2 </td></tr>";
            echo "<tr><th>Tempat Lahir</th><td> $tempat_L2 </td></tr>";
            echo "<tr><th>Tanggal Lahir</th><td> $tanggal_L2 </td></tr>";
            echo "<tr><th>No HP Siswa</th><td> $nohp_siswa2 </td></tr>";
            echo "<tr><th>Email</th><td> $email2 </td></tr>";
        }

        public function alamatSiswa($provinsi2, $kab2, $kec2, $desa2 , $alamat2, $kode2 ) {
            echo "<tr><th>Provinsi</th><td> $provinsi2 </td></tr>";
            echo "<tr><th>Kabupaten/Kota</th><td> $kab2 </td></tr>";
            echo "<tr><th>Kecamatan</th><td> $kec2 </td></tr>";
            echo "<tr><th>Desa/Kelurahan</th><td> $desa2 </td></tr>";
            echo "<tr><th>Alamat</th><td> $alamat2 </td></tr>";
            echo "<tr><th>Kode Pos</th><td> $kode2 </td></tr>";
        }

        public function asalSekolah($asal_sekolah2, $alamat_sekolah2) {
            echo "<tr><th>Asal Sekolah</th><td> $asal_sekolah2 </td></tr>";
            echo "<tr><th>Alamat Sekolah</th><td> $alamat_sekolah2 </td></tr>";
        }

        public function dataOrtu($namaortu2, $pekerjaan2, $no_ortu2, $alamat_ortu2) {
            echo "<tr><th>Nama Orang Tua</th><td> $namaortu2 </td></tr>";
            echo "<tr><th>Pekerjaan Orang Tua</th><td> $pekerjaan2 </td></tr>";
            echo "<tr><th>No HP Orang Tua</th><td> $no_ortu2 </td></tr>";
            echo "<tr><th>Alamat Orang Tua</th><td> $alamat_ortu2 </td></tr>";
        }
    }

    echo "<div class='card'>";
    echo "<h2>Hasil Pendaftaran Siswa</h2>";
    echo "<div class='section-title'>Data Siswa</div>";
    echo "<table>";

    $print = new siswa_baru();
    $print->namaSiswa($jrsn, $namasiswa, $jk, $tempat_L, $tanggal_L, $nohp_siswa, $email);

    echo "</table>";
    echo "<div class='section-title'>Alamat Siswa</div>";
    echo "<table>";
    $print->alamatSiswa($provinsi, $kab, $kec, $desa, $alamat, $kode);

    echo "</table>";
    echo "<div class='section-title'>Asal Sekolah</div>";
    echo "<table>";
    $print->asalSekolah($asal_sekolah, $alamat_sekolah);

    echo "</table>";
    echo "<div class='section-title'>Data Orang Tua</div>";
    echo "<table>";
    $print->dataOrtu($namaortu, $pekerjaan, $no_ortu, $alamat_ortu);

    echo "</table>";
    echo "</div>";
}
?>

</body>
</html>
