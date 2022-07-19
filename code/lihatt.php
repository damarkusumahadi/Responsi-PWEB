<!DOCTYPE html>
<html>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Data</title>
	<style>
        body{
        background-color: peachpuff;
        }
    </style>
    <head>
    <h2 align="center" style="background-image: url(computer.gif);"><br>TABEL DATA MAHASISWA
    <br><hr color="black"></h2>
</head>
<body>

<?php
$fp=fopen("data.txt", "r");
echo"<body align=center>";
echo"<a href=input.html>::Isi Data::</a>";
echo"<br>"; 
echo"<br>"; 
echo"<table border=2 align=center>";
echo"<tr align=center><td>NIM</td><td>Nama</td><td>Kelas</td><td>Prodi</td><td>Angkatan</td></tr>";
while($isi=fgets($fp,80)){
	$pisah=explode('|', $isi);
	echo"<tr>";
	echo"<td>$pisah[1]&nbsp&nbsp&nbsp&nbsp&nbsp</td>";
	echo"<td>$pisah[0]&nbsp&nbsp&nbsp&nbsp&nbsp</td>";
	echo"<td>$pisah[2]&nbsp&nbsp&nbsp&nbsp&nbsp</td>";
	echo"<td>$pisah[3]&nbsp&nbsp&nbsp&nbsp&nbsp</td>";
	echo"<td>$pisah[4]&nbsp&nbsp&nbsp&nbsp&nbsp</td></tr>";
}
echo"</table>";
echo"</body>";
?>
<h3 align="center"><a href="menu.html">!!! Back To Menu !!!</a></h3>
<p align="center"><img src="baca.gif" width="200" height="150"></p>
</body>
</html>