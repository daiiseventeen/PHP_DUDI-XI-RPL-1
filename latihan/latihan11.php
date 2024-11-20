<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <h2>Rapot siswa</h2>
        <form action="latihan11H.php" method="post">
            <table>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td>:</td>
                <td><input type="text" name="kelas"></td>
            </tr>
            <tr>
                <td>Jurusan </td>
                <td>:</td>
                <td>
                <select name="jurusan">
                        <option value="TKRO">Rekayasa perangkat lunak</option>
                        <option value="TBSM">Teknik kendaraan ringan otomotif</option>
                        <option value="RPL">Teknik bisnis sepeda motor</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td><h3>Nilai Matematika</h3></td>
            </tr>

            <tr>
                <td>Nilai Harian</td>
                <td>:</td>
                <td><input type="text" name="mtkharian"></td>
            </tr>
            <tr>
                <td>Nilai Tugas</td>
                <td>:</td>
                <td><input type="text" name="mtktugas"></td>
            </tr>
            <tr>
                <td>Nilai UTS</td>
                <td>:</td>
                <td><input type="text" name="mtkuts"></td>
            </tr>
            <tr>
                <td>Nilai UAS</td>
                <td>:</td>
                <td><input type="text" name="mtkuas"></td>
            </tr>

            <tr>
                <td><h3>Nilai Indonesia</h3></td>
            </tr>

            <tr>
                <td>Nilai Harian</td>
                <td>:</td>
                <td><input type="text" name="indoharian"></td>
            </tr>
            <tr>
                <td>Nilai Tugas</td>
                <td>:</td>
                <td><input type="text" name="indotugas"></td>
            </tr>
            <tr>
                <td>Nilai UTS</td>
                <td>:</td>
                <td><input type="text" name="indouts"></td>
            </tr>
            <tr>
                <td>Nilai UAS</td>
                <td>:</td>
                <td><input type="text" name="indouas"></td>
            </tr>

            <tr>
                <td><h3>Nilai Inggris</h3></td>
            </tr>

            <tr>
                <td>Nilai Harian</td>
                <td>:</td>
                <td><input type="text" name="ingharian"></td>
            </tr>
            <tr>
                <td>Nilai Tugas</td>
                <td>:</td>
                <td><input type="text" name="ingtugas"></td>
            </tr>
            <tr>
                <td>Nilai UTS</td>
                <td>:</td>
                <td><input type="text" name="inguts"></td>
            </tr>
            <tr>
                <td>Nilai UAS</td>
                <td>:</td>
                <td><input type="text" name="inguas"></td>
            </tr>

            <tr>
                <td><h3>Nilai Produktif</h3></td>
            </tr>

            <tr>
                <td>Nilai Harian</td>
                <td>:</td>
                <td><input type="text" name="pdkharian"></td>
            </tr>
            <tr>
                <td>Nilai Tugas</td>
                <td>:</td>
                <td><input type="text" name="pdktugas"></td>
            </tr>
            <tr>
                <td>Nilai UTS</td>
                <td>:</td>
                <td><input type="text" name="pdkuts"></td>
            </tr>
            <tr>
                <td>Nilai UAS</td>
                <td>:</td>
                <td><input type="text" name="pdkuas"></td>
            </tr>

            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="submit" value="Submit"></td>
            </tr>
            </table>
        </form>
    </center>
</body>
</html>


