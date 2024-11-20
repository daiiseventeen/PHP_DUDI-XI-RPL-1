<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran Siswa Baru</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f0f4f8;
            font-family: 'Arial', sans-serif;
        }
        .container {
            background-color: #ffffff;
            border-radius: 12px;
            box-shadow: 0px 8px 20px rgba(0, 0, 0, 0.15);
            padding: 30px;
            margin-top: 40px;
            max-width: 800px;
        }
        h2 {
            color: #333;
            font-weight: bold;
            margin-bottom: 20px;
            padding-bottom: 10px;
            border-bottom: 3px solid grey;
        }
        .form-group label {
            font-weight: bold;
        }
        .submit-button {
            text-align: center;
            margin-top: 30px;
        }
        .submit-button input[type="submit"] {
            background-color: #007bff;
            color: white;
            padding: 10px 25px;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            font-size: 18px;
            font-weight: bold;
        }
        .submit-button input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="text-center">Data Diri Calon Pendaftar</h2>
        <form action="latihan12H.php" method="post">
            <!-- Data Diri-->
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="jurusan">Jurusan</label>
                    <select class="form-control" name="jurusan" id="jurusan">
                        <option>jurusan</option>
                        <option value="Rekayasa perangkat lunak">Rekayasa perangkat lunak</option>
                        <option value="Teknik kendaraan ringan otomotif">Teknik kendaraan ringan otomotif</option>
                        <option value="Teknik bisnis sepeda motor">Teknik bisnis sepeda motor</option>
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="jk">Jenis Kelamin</label>
                    <select class="form-control" name="jk" id="jk">
                        <option value="laki-laki">Laki-Laki</option>
                        <option value="perempuan">Perempuan</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="namasiswa">Nama Lengkap</label>
                <input type="text" class="form-control" name="namasiswa" id="namasiswa">
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="tempatLahir">Tempat Lahir</label>
                    <input type="text" class="form-control" name="tempatLahir" id="tempatLahir">
                </div>
                <div class="form-group col-md-6">
                    <label for="tanggal">Tanggal Lahir</label>
                    <input type="date" class="form-control" name="tanggalL" id="tanggal" required>
                </div>
            </div>
            <div class="form-group">
                <label for="nohpsiswa">No HP Siswa</label>
                <input type="number" class="form-control" name="nohpsiswa" id="nohpsiswa">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" id="email">
            </div>
            
            <!-- Alamat-->
            <h2 class="text-center">Alamat Calon Pendaftar</h2>
            <div class="form-group">
                <label for="provinsi">Provinsi</label>
                <select class="form-control" name="provinsi" id="provinsi">
                    <option value="Aceh">Aceh</option>
                    <option value="Sumatera Utara">Sumatera Utara</option>
                    <option value="Sumatera Barat">Sumatera Barat</option>
                    <option value="Riau">Riau</option>
                    <option value="Kepulauan Riau">Kepulauan Riau</option>
                    <option value="Jambi">Jambi</option>
                    <option value="Sumatera Selatan">Sumatera Selatan</option>
                    <option value="Bangka Belitung">Bangka Belitung</option>
                    <option value="Bengkulu">Bengkulu</option>
                    <option value="Lampung">Lampung</option>
                    <option value="DKI Jakarta">DKI Jakarta</option>
                    <option value="Jawa Barat">Jawa Barat</option>
                    <option value="Banten">Banten</option>
                    <option value="Jawa Tengah">Jawa Tengah</option>
                    <option value="DI Yogyakarta">DI Yogyakarta</option>
                    <option value="Jawa Timur">Jawa Timur</option>
                    <option value="Bali">Bali</option>
                    <option value="Nusa Tenggara Barat">Nusa Tenggara Barat</option>
                    <option value="Nusa Tenggara Timur">Nusa Tenggara Timur</option>
                    <option value="Kalimantan Barat">Kalimantan Barat</option>
                    <option value="Kalimantan Tengah">Kalimantan Tengah</option>
                    <option value="Kalimantan Selatan">Kalimantan Selatan</option>
                    <option value="Kalimantan Timur">Kalimantan Timur</option>
                    <option value="Kalimantan Utara">Kalimantan Utara</option>
                    <option value="Sulawesi Utara">Sulawesi Utara</option>
                    <option value="Gorontalo">Gorontalo</option>
                    <option value="Sulawesi Tengah">Sulawesi Tengah</option>
                    <option value="Sulawesi Barat">Sulawesi Barat</option>
                    <option value="Sulawesi Selatan">Sulawesi Selatan</option>
                    <option value="Sulawesi Tenggara">Sulawesi Tenggara</option>
                    <option value="Maluku">Maluku</option>
                    <option value="Maluku Utara">Maluku Utara</option>
                    <option value="Papua">Papua</option>
                    <option value="Papua Barat">Papua Barat</option>
                </select>
            </div>
            <div class="form-group">
                <label for="kab_kota">Kab/Kota</label>
                <input type="text" class="form-control" name="kab_kota" id="kab_kota">
            </div>
            <div class="form-group">
                <label for="kecamatan">Kecamatan</label>
                <input type="text" class="form-control" name="kecamatan" id="kecamatan">
            </div>
            <div class="form-group">
                <label for="desa_kelurahan">Desa/Kelurahan</label>
                <input type="text" class="form-control" name="desa_kelurahan" id="desa_kelurahan">
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea class="form-control" name="alamat" id="alamat" rows="3"></textarea>
            </div>
            <div class="form-group">
                <label for="kodepos">Kode Pos</label>
                <input type="number" class="form-control" name="kodepos" id="kodepos">
            </div>
            
            <!-- Data Asal Sekolah -->
            <h2 class="text-center">Data Asal Sekolah</h2>
            <div class="form-group">
                <label for="asalsekolah">Nama Asal Sekolah</label>
                <input type="text" class="form-control" name="asalsekolah" id="asalsekolah">
            </div>
            <div class="form-group">
                <label for="alamatsekolah">Alamat Sekolah</label>
                <textarea class="form-control" name="alamatsekolah" id="alamatsekolah" rows="3"></textarea>
            </div>

            <!-- Data Orang Tua-->
            <h2 class="text-center">Data Orang Tua</h2>
            <div class="form-group">
                <label for="namaortu">Nama Lengkap Ayah/Ibu</label>
                <input type="text" class="form-control" name="namaortu" id="namaortu">
            </div>
            <div class="form-group">
                <label for="pekerjaanortu">Pekerjaan Ayah/Ibu</label>
                <input type="text" class="form-control" name="pekerjaanortu" id="pekerjaanortu">
            </div>
            <div class="form-group">
                <label for="noortu">No HP Ortu</label>
                <input type="number" class="form-control" name="noortu" id="noortu">
            </div>
            <div class="form-group">
                <label for="alamatortu">Alamat Lengkap</label>
                <textarea class="form-control" name="alamatortu" id="alamatortu" rows="3"></textarea>
            </div>

            <div class="submit-button">
                <input type="submit" name="submit" value="Submit">
            </div>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
