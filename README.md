# lab2web
<table bprder="1" cellpadding="5" cellspacing="0">
  <tbody>
  <tr>
  <td> Nama </td>
  <td> Ade maulani bilgis</td>
  </tr>
  <tr>
  <td>Prodi</td>
  <td>Teknik Informatika</td>
  </tr>
</table>

## Form sederhana
Buatlah program PHP sederhana dengan menggunakan form input yang menampilkan nama, tanggal lahir dan pekerjaan. Kemudian tampilkan outputnya dengan menghitung umur berdasarkan inputan tanggal lahir. Dan pilihan pekerjaan dengan gaji yang berbeda-beda sesuai pilihan pekerjaan.


* buatlah file **index.php** dan **tampil.php**
* file **index.php** di gunakan untuk membuat kerangka program yang akan di tampilkan
* file **tampil.php** di gunakan untuk menampilkan hasil input

### index.php
```html 
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
 ```
 ### tampil.php
 ```html
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Praktikum</title>
</head>
<body>

<?php
$nama = @$_POST['nama'];
$jekel = $_POST['jenis_kelamin'];
$tanggal_lahir = date_format(date_create(@$_POST['tgl']), "d F Y");
$lahir = new DateTime(@$_POST['tgl']);
$sekarang = new DateTime('today');
$umur = $sekarang->diff($lahir)->y;   
$pekerjaan = $_POST['pekerjaan'];
$gaji = "";

switch ($pekerjaan) {
    case 'Programmer';
        $gaji = "Rp. 17 Juta";
        break;

    case 'admin';
        $gaji = "Rp. 7 Juta";
        break; 
        
    case 'akunting';
        $gaji = "Rp. 8 Juta";
        break;

    case 'hrd';
        $gaji = "Rp. 11 Juta";
        break;

    default;
        $gaji = '0';
        break;
}
```

### hasil
![image.png](https://github.com/forusig/lab2web/blob/37fd43f09466e394caeed85d50b8d8d66aa943d7/gambar/img%20(11).png)
![image.png](https://github.com/forusig/lab2web/blob/37fd43f09466e394caeed85d50b8d8d66aa943d7/gambar/img%20(10).png)

### Terimakasih !