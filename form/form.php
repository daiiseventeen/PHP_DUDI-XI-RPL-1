<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <center>
    <form action="" method="POST">
    <h2>Formulir data diri</h2>
    <table>
        <tr>
            <td>Nama lengkap</td>
            <td>:</td>
            <td><input type="text" name="nama_lengkap" value=""></td>
        </tr>
        <tr>
            <td>Kelas</td>
            <td>:</td>
            <td><input type="text" name="kelas" value=""></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td><input type="submit" name="proses" value="Simpan" ></td>
        </tr>
    </table>
    </form>
    </center>
</body>
</html>

<?php

if (isset($_POST['proses'])) {
    
    $nama_lengkap2 = $_POST['nama_lengkap'];
    $kelas2 = $_POST['kelas'];

    echo"<center> <br>";
    echo"Nama lengkap : $nama_lengkap2 <br>";
    echo"Kelas : $kelas2 ";
    echo"</center>";
}

?>