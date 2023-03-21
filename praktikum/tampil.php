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
?>

<table align="center" cellspacing="0" cellpadding="5" bordercolor="black"> 
    <tr> 
        <th colspan="3"><u>Pratikum</u></th> 
        </tr> 
            <tr> 
                <td>Nama</td> 
                <td>:</td> 
                <td> <?= $nama ?> </td>
            </tr>
            <tr> 
                <td>jenis kelamin</td> 
                <td>:</td> 
                <td> <?= $jekel ?> </td>
            </tr>
                <td>Tanggal Lahir</td> 
                <td>:</td> 
                <td> <?= $tanggal_lahir ?> </td> 
            </tr>    
            <tr>
                <td>Umur</td> 
                <td>:</td> 
                <td> <?= $umur ?> Tahun </td> 
            </tr>  
            <tr>
                <td>Pekerjaan</td> 
                <td>:</td> 
                <td> <?= $pekerjaan ?> </td> 
            </tr> 
            <tr>
                <td>Gaji</td> 
                <td>:</td> 
                <td> <?= $gaji ?> </td> 
            </tr>

        </table>
        <a href="index.php">Back</a> 


    </body>
</html>