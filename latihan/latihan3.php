<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<style>
    img {
        width: 265px;
    }
</style>
<body>
    <center>
    <form action="" method="POST">
        <img src="logo1.png" alt="" class="img">
        <h2>Form Biodata Diri</h2>
    <table>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><input type="text" name="nama"></td>
        </tr>
        <tr>
            <td>Tempat lahir</td>
            <td>:</td>
            <td><input type="text" name="tempat_lahir" ></td>
        </tr>
        <tr>
            <td>Tanggal lahir</td>
            <td>:</td>
            <td><input type="date" name="tanggal_lahir" ></td>
        </tr>
        <tr>
            <td>Jenis kelamin</td>
            <td>:</td>
            <td><input type="radio" name="jenis_kelamin" value="Laki-laki" >Laki-laki
            <input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan</td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><textarea name="alamat" id="" style="width: 205px; height: 100px;"></textarea></td>
        </tr>
        <tr>
            <td>Agama</td>
            <td>:</td>
            <td>
            <select name="agama" id="">
                <option value="islam">islam</option>
                <option value="kristen">kristen</option>
                <option value="Buddha">Buddha</option>
                <option value="Konghucu">Konghucu</option>
            </select>
            </td>
        </tr>
        <tr>
            <td>Pendidikan terakhir</td>
            <td>:</td>
            <td>
            <select name="pendidikan" id="" style="width: 105px;">
                <option value="SD">SD</option>
                <option value="SMP">SMP</option>
                <option value="SMK">SMK</option>
                <option value="Kuliah">Kuliah</option>
            </select>
            </td>
        </tr>
        <tr>
            <td>Status</td>
            <td>:</td>
            <td>
            <select name="status" id="">
                <option value="Sudah menikah">Sudah menikah</option>
                <option value="Belum menikah">Belum menikah</option>
            </select>
            </td>
        </tr>
        <tr>
            <td>Hobi</td>
            <td>:</td>
            <td>
                <input type="checkbox" name="hobi" id="" value="Membaca">Membaca
                <input type="checkbox" name="hobi" id="" value="Menulis">Menulis
                <input type="checkbox" name="hobi" id="" value="Ngepush">Ngepush
            </td>
        </tr>
        <tr>
            <td>Cita-cita</td>
            <td>:</td>
            <td>
            <select name="cita_cita" id="">
                <option value="Programmer">Programmer</option>
                <option value="penambang batu bara">penambang batu bara</option>
            </select>
            </td>
        </tr>
        <tr>
            <td>Kata-kata bijak</td>
            <td>:</td>
            <td><textarea name="kata_kata" id="" style="width: 205px; height: 100px;"></textarea></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td><input type="submit" name="proses" value="KIRIM" style="border-radius: 10px; width: 100px;margin-top: 20px;"></td>
        </tr>
    </table>
    </form>

    <?php
    if (isset($_POST['proses'])) {
        $nama_lengkap1 = $_POST['nama'];
        $tempat_lahir1 = $_POST['tempat_lahir'];
        $tanggal_lahir1 = $_POST['tanggal_lahir'];
        $jenis_kelamin1 = $_POST['jenis_kelamin'];
        $alamat1 = $_POST['alamat'];
        $agama1 = $_POST['agama'];
        $pendidikan_terakhir1 = $_POST['pendidikan'];
        $status1 = $_POST['status'];
        $hobi1 = $_POST['hobi'];
        $cita_cita1 = $_POST['cita_cita'];
        $kata_kata1 = $_POST['kata_kata'];

        echo "<center><h2>Hasil Biodata Diri</h2>";
        echo "<table cellpadding='10' cellspacing='0'>";
        echo "<tr>
        <td>Nama</td>
        <td>: $nama_lengkap1</td>
        </tr>";
        echo "<tr>
        <td>Tempat lahir</td>
        <td>: $tempat_lahir1</td>
        </tr>";
        echo "<tr>
        <td>Tanggal lahir</td>
        <td>: $tanggal_lahir1</td>
        </tr>";
        echo "<tr>
        <td>Jenis kelamin</td>
        <td>: $jenis_kelamin1</td>
        </tr>";
        echo "<tr>
        <td>Alamat</td>
        <td>: $alamat1</td>
        </tr>";
        echo "<tr>
        <td>Agama</td>
        <td>: $agama1</td>
        </tr>";
        echo "<tr>
        <td>Pendidikan terakhir</td>
        <td>: $pendidikan_terakhir1</td>
        </tr>";
        echo "<tr>
        <td>Status</td>
        <td>: $status1</td>
        </tr>";
        echo "<tr>
        <td>Hobi</td>
        <td>: $hobi1</td>
        </tr>";
        echo "<tr>
        <td>Cita-cita</td>
        <td>: $cita_cita1</td>
        </tr>";
        echo "<tr>
        <td>Kata-kata bijak</td>
        <td>: $kata_kata1</td>
        </tr>";
        echo "</table></center>";
    }
    ?>
    </center>
</body>
</html>
