<<!DOCTYPE html>
<html>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Proses</title>
	<style>
        body{
        background-color: peachpuff;
        }
    </style>
    <head>
    <h2 align="center">Terima Kasih Telah Mengisi Data
    <br><hr color="black"></h2>
</head>
<body>

<?php 
$nama=$_POST['nama'];
$nim=$_POST['nim'];
$kelas=$_POST['kelas'];
$prodi=$_POST['prodi'];
$angkatan=$_POST['angkatan'];
echo"<head><title>Input Output</head></title>";
$fp=fopen("data.txt", "a+");
fputs($fp, "$nama|$nim|$kelas|$prodi|$angkatan\n");
fclose($fp);
?>
<p align="center"><img src="hi.gif" width="300" height="200"></p>
<p align="center"><a href="input.html">::Isi Data::</a></p>
<p align="center"><a href="lihatt.php">::Lihat Data::</a></p>
<p align="center"><a href="menu.html">!!! Back To Menu !!!</a></p>
</body>
</html>