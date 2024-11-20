<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Penggajihan</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        body {
            background-color: #f0f8ff;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 235vh;
            font-family: 'Roboto', sans-serif;
        }

        .form-container {
            background-color: white;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
            width: 420px;
            transition: transform 0.2s;
        }

        .form-container:hover {
            transform: scale(1.02);
        }

        h2, h4 {
            text-align: center;
            color: #333;
            margin-bottom: 10px;
        }

        label {
            margin-bottom: 5px;
            display: block;
            font-weight: 500;
            color: #444;
        }

        input[type="text"], select, input[type="date"], input[type="number"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            box-sizing: border-box;
            border: 2px solid #ccc;
            border-radius: 8px;
            transition: border-color 0.3s;
        }

        input[type="text"]:focus, select:focus, input[type="date"]:focus, input[type="number"]:focus {
            border-color: #007bff;
        }

        .gaji-potongan {
            display: flex;
            justify-content: space-between;
            margin: 16px 0;
        }

        .gaji, .potongan {
            width: 48%;
        }

        h3 {
            text-align: center;
            color: #007bff;
            font-size: 18px;
        }

        .submit-wrapper {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        input[type="submit"] {
            width: 40%;
            background-color: #007bff;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 17px;
            transition: background-color 0.3s, transform 0.2s;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
            transform: scale(1.05);
        }

        img {
            display: block;
            margin: 0 auto 15px;
        }

        @media (max-width: 600px) {
            .form-container {
                width: 100%;
                padding: 15px;
            }

            input[type="submit"] {
                width: 50%;
            }
        }
    </style>
</head>
<body>
    <div class="form-container">
        <img src="yayasn.png" alt="Logo Yayasan" style="width:250px;">
        <h2>PENGGAJIHAN</h2>
        <h2>GURU/KARYAWAN YAYASAN ASSALAAM</h2>
        <h4>Data Penggajihan</h4>
        <form action="latihan5hasil.php" method="post">
            <label for="no">No</label>
            <input type="text" id="no" name="no" placeholder="Masukkan No" required>

            <label for="nama">Nama</label>
            <input type="text" id="nama" name="nama" placeholder="Masukkan Nama" required>

            <label for="unit">Unit Pendidikan</label>
            <select name="unit" id="unit" required>
                <option value="">Pilih unit pendidikan</option>
                <option value="TK">TK</option>
                <option value="SD">SD</option>
                <option value="SMP">SMP</option>
                <option value="SMA">SMA</option>
                <option value="SMK">SMK</option>
            </select>

            <label for="tanggal">Tanggal Gaji</label>
            <input type="date" id="tanggal" name="tanggal" required>

            <div class="gaji-potongan">
                <div class="gaji">
                    <h3>Gaji</h3>
                    <label for="jabatan">Jabatan</label>
                    <select name="jabatan" id="jabatan" required>
                        <option value="">Pilih jabatan</option>
                        <option value="Kepala sekolah">Kepala sekolah</option>
                        <option value="Wakasek">Wakasek</option>
                        <option value="Guru">Guru</option>
                        <option value="OB">OB</option>
                    </select>
                    <br>
                    <label for="lamakerja">Lama kerja (tahun)</label>
                    <input type="number" name="lamakerja" id="lamakerja" required>
                    <br>
                    <label for="statuskerja">Status kerja</label>
                    <select name="statuskerja" id="statuskerja" required>
                        <option value="">Pilih status kerja</option>
                        <option value="Kontrak">Kontrak</option>
                        <option value="Tetap">Tetap</option>
                    </select>
                </div>
                <div class="potongan">
                    <h3>Potongan</h3>
                    <label for="bpjs">BPJS</label>
                    <input type="number" name="bpjs" id="bpjs" required>
                    <br>
                    <label for="pinjaman">Pinjaman</label>
                    <input type="number" name="pinjaman" id="pinjaman" required>
                    <br>
                    <label for="tabungan">Tabungan</label>
                    <input type="number" name="tabungan" id="tabungan" required>
                    <br>
                    <label for="lainnya">Lainnya</label>
                    <input type="number" name="lainnya" id="lainnya" required>
                </div>
            </div>

            <div class="submit-wrapper">
                <input type="submit" value="Submit" name="submit">
            </div>
        </form>
    </div>
</body>
</html>
