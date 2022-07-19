<!DOCTYPE html>
<html>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kalender</title>
    <style>
        body{
        background-color: peachpuff;
        }
    </style>
    <head>
    <h2 align="center" style="background-image: url(kalen1.gif);"><br>KALENDER
    <br><hr color="black"></h2>

</head>
<body>

<?php 
$hari=date("d");
$bulan=date("m");
$tahun=date("Y");
$jumlahhari=date("t",mktime(0,0,0,$bulan,$hari,$tahun));

switch($bulan){
    case 1:$nmbulan="JANUARI"; break;
    case 2:$nmbulan="FEBRUARI"; break;
    case 3:$nmbulan="MARET"; break;
    case 4:$nmbulan="APRIL"; break;
    case 5:$nmbulan="MAY"; break;
    case 6:$nmbulan="JUNI"; break;
    case 7:$nmbulan="JULI"; break;
    case 8:$nmbulan="AGUSTUS"; break;
    case 9:$nmbulan="SEPTEMBER"; break;
    case 10:$nmbulan="OKTOBER"; break;
    case 11:$nmbulan="NOVEMBER"; break;
    case 12:$nmbulan="DESEMBER"; break;
}
echo"<center><h2>$nmbulan $tahun</h2></center>";

echo"<table border=2 cellpadding=5 align=center>";
echo"<tr bgcolor=white>";
echo"<td align=center><font color=red>Min</font></td>";
echo"<td align=center>Sen</td>";
echo"<td align=center>Sel</td>";
echo"<td align=center>Rab</td>";
echo"<td align=center>Kam</td>";
echo"<td align=center>Jum</td>";
echo"<td align=center>Sab</td>";
echo"</tr>";

$s=date("w",mktime(0,0,0,$bulan,1,$tahun));
for ($ds=1;$ds<=$s;$ds++){
    echo"<td></td>";
}

for($d=1;$d<=$jumlahhari; $d++){
    if(date("w", mktime(0,0,0,$bulan,$d,$tahun))==0){
        echo"<tr>";
    }

    $warna="#000000";

    if(date("l",mktime(0,0,0,$bulan,$d,$tahun))=="Min"){
        $warna="FF0000";
    }
    echo"<td align=center valign=middle><span style=\"color:$warna\">$d</span></td>";
    if(date("w",mktime(0,0,0,$bulan,$d,$tahun))==6){
        echo"</tr>";
    }
}
echo"</table>";
?>
<br>
<h3 align="center"><a href="menu.html">!!! Go Back To Menu !!!</a></h3>
<p align="center"><img src="anya.gif" width="200" height="150"></p>

</body>
</html>