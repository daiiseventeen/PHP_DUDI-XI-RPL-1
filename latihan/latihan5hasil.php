<?php

if (isset($_POST['submit'])) {    

$no = $_POST['no'];
$nama = $_POST['nama'];
$unitpddkn = $_POST['unit'];
$tglgaji = $_POST['tanggal'];
$jabatan = $_POST['jabatan'];
$lamakerja = $_POST['lamakerja'];
$statuskerja = $_POST['statuskerja'];
$bpjs = $_POST['bpjs'];
$pinjaman = $_POST['pinjaman'];
$tabungan = $_POST['tabungan'];
$infaq  = $_POST['infaq'];

if ($jabatan == "Kepala sekolah") {
    $gaji = 10000000;
} elseif ($jabatan == "Wakasek") {
    $gaji = 7000000;
} elseif ($jabatan == "Guru") {
    $gaji = 5000000;
} elseif ($jabatan == "Karyawan") {
    $gaji = 2500000;
} else {
    $gaji = 0;
}

if ($lamakerja > 5) {
    $tunjangan = 1000000;
} else {
    $tunjangan = 0;
}

if ($statuskerja == "Tetap") {
    $bonus = 1000000;
} else {
    $bonus = 0;
}

$gajikotor = $gaji + $tunjangan + $bonus; 
$totalpotongan = $bpjs1 + $pinjaman + $tabungan + $dll;
$gajibersih = $gajikotor - $totalpotongan;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Struk gaji</title>
    <style>
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        
        form {
            border: 2px solid black;
            padding: 20px;
            width: 30%;
            border-radius: 10px;
            animation: fadeIn 2s ease-in-out; 
            transition: box-shadow 0.3s ease;
        }

        form:hover {
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.3); 
        }

        h2, h3, td, p {
            color: blue;
            animation: fadeIn 1s ease-in-out;
        }

       
        table {
            width: 55%;
            border-collapse: collapse;
            margin-bottom: 20px;
            animation: fadeIn 1.5s ease-in-out;
        }

        table:hover {
            transform: scale(1.02); 
            transition: transform 0.3s ease;
        }

        table, th, td {
            text-align: left;
            transition: background-color 0.3s ease;
        }

        th, td {
            padding: 10px;
            border-bottom: 1px solid #ddd;
        }

        table tr:hover {
            background-color: #f1f1f1;
        }

        body {
            background-color: #f9f9f9;
            font-family: Arial, sans-serif;
            text-align: center;
        }

        .loading {
            display: none;
            font-size: 18px;
            color: gray;
            margin-bottom: 20px;
        }

        .show-loading {
            display: block;
            animation: fadeIn 1s ease-in-out;
        }

    </style>
</head>
<body>
    <div class="loading" id="loading">Loading...</div>
    
    <center>
        <form action="" method="POST" onsubmit="showLoading()">
            <h2>Struk gaji</h2>
            <p><?php echo "$nama1"; ?></p>
            <h3>Primary card title</h3>
            <table>
                <tr>
                    <td><?php echo "No : $no1"; ?></td>
                </tr>
                <tr>
                    <td><?php echo "Nama : $nama1"; ?></td>
                </tr>
                <tr>
                    <td><?php echo "Unit pendidikan : $unitpddkn"; ?></td>
                </tr>
                <tr>
                    <td><?php echo "Tanggal gaji : $tglgaji"; ?></td>
                </tr>
            </table>
            <table>
                <tr>
                    <td><h3>Gaji</h3></td>
                </tr>
                <tr>
                    <td><?php echo "Jabatan : $jabatan"; ?></td>
                </tr>
                <tr>
                    <td><?php echo "Gaji : Rp.$gaji"; ?></td>
                </tr>
                <tr>
                    <td><?php echo "Lama kerja : $lamakerja tahun"; ?></td>
                </tr>
                <tr>
                    <td><?php echo "Tunjangan lama kerja : Rp.$tunjangan"; ?></td>
                </tr>
                <tr>
                    <td><?php echo "Status kerja : Rp.$statuskerja"; ?></td>
                </tr>
                <tr>
                    <td><?php echo "Bonus : Rp.$bonus"; ?></td>
                </tr>
                <tr>
                    <td><?php echo "Gaji kotor : Rp.$gajikotor"; ?></td>
                </tr>
                <tr>
                    <td><h3>Potongan</h3></td>
                </tr>
                <tr>
                    <td><?php echo "BPJS :  Rp.$bpjs1"; ?></td>
                </tr>
                <tr>
                    <td><?php echo "Pinjaman : Rp.$pinjaman"; ?></td>
                </tr>
                <tr>
                    <td><?php echo "Tabungan : Rp.$tabungan"; ?></td>
                </tr>
                <tr>
                    <td><?php echo "Lainnya : Rp.$dll"; ?></td>
                </tr>
                <tr>
                    <td><?php echo "Total potongan : Rp.$totalpotongan"; ?></td>
                </tr>
                <tr>
                    <td><h3>Total</h3></td>
                </tr>
                <tr>
                    <td><?php echo "Gaji bersih : Rp.$gajibersih"; ?></td>
                </tr>
            </table>
        </form>
    </center>

    <script>
        function showLoading() {
            document.getElementById('loading').classList.add('show-loading');
        }
    </script>
</body>
</html>

