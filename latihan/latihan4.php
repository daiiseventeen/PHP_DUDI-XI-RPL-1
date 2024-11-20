<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Nilai Ujian</title>
    <style>
        body {
            background-color: grey;
        }
        form {
            background-color: #ffffff;
            padding: 50px;
            border-radius: 10px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
            width: 400px;
            margin-top: 50px;
            border: 4px solid blue;
        }
        table {
            width: 100%;
        }
        input[type="text"], input[type="number"], select {
            width: 100%;
            padding: 8px;
            margin: 10px 0;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        input[type="submit"] {
            background-color: blue;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        h2 {
            color: black;
        }
    </style>
</head>
<body>
    <center>
        <form action="latihan4hasil.php" method="POST">
            <h2>Nilai Ujian Nasional</h2>
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
                    <td>Jurusan</td>
                    <td>:</td>
                    <td>
                        <select name="jurusan">
                            <option value="TKRO">TKRO</option>
                            <option value="TBSM">TBSM</option>
                            <option value="RPL">RPL</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td style="padding-top:20px;padding-bottom:20px;"><h2>Nilai Ujian</h2></td>
                </tr>
                <tr>
                    <td>Nilai B.Indonesia</td>
                    <td>:</td>
                    <td><input type="number" name="indonesia"></td>
                </tr>
                <tr>
                    <td>Nilai B.Inggris</td>
                    <td>:</td>
                    <td><input type="number" name="inggris"></td>
                </tr>
                <tr>
                    <td>Nilai Matematika</td>
                    <td>:</td>
                    <td><input type="number" name="matematika"></td>
                </tr>
                <tr>
                    <td>Nilai Produktif</td>
                    <td>:</td>
                    <td><input type="number" name="produktif"></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" name="proses" value="Simpan"></td>
                </tr>
            </table>
        </form>
    </center>
</body>
</html>
