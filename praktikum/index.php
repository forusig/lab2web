<?php 
date_default_timezone_set("Asia/Bangkok");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Praktikum</title>
</head>
<body>
    <form class="" action="tampil.php" method="post">
    <table align="center" cellspacing="0" cellpadding="5"
bordercolor="black">
<tr>
<th colspan="3"><u>INPUT DATA</u></th>
</tr>
<tr>
       <td><label for="">Nama</label></td>
        <td> : </td>
        <td><input type="text" name="nama" placeholder="Nama Anda"/> <br></td>
</tr>
<tr>
        <td>Jenis Kelamin</td>
        <td>:</td>
        <td>

        <input type="radio" name="jenis_kelamin" value="laki-
        laki" required />Laki - Laki

        <input type="radio" name="jenis_kelamin"
        value="perempuan" /> Perempuan
        </td>
</tr>
<tr> 
                <td>Tanggal Lahir</td> 
                <td>:</td> 
                <td><input type="date" name="tgl" placeholder="Tanggal Lahir"></td>
</tr>
<tr>
                <td>Pekerjaan</td> 
                <td>:</td> 
                <td><select name="pekerjaan"> 
                    <option selected disabled>Pilih Pekerjaan</option> 
                    <option value="Programmer">Programmer</option> 
                    <option value="admin">admin</option> 
                    <option value="akunting">akunting</option>
                    <option value="hrd">HRD</option> 
                    </select>
                </td> 
            </tr>
<tr>
<th colspan="3"> 
                    <input type="submit" value="Simpan"> 
                    <input type="reset" value="Reset"> 
</tabel>
</form>
</body>
</html>