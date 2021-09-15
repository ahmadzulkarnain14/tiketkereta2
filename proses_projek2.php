<?php
echo "<center>";
echo "<font size=8>";
echo "<b>Tiket Kereta Api<br>TRENITALIA";
echo "<hr>";
echo "<table>";
$kotatujuan=$_POST['kotatujuan'];
$kelas=$_POST['kelas'];
$jumlah=$_POST['jumlah'];
if($kotatujuan=="Bogor"&&$kelas=="Ekonomi"){
	$harga=100000;
}else
if($kotatujuan=="Jakarta"&&$kelas=="Ekonomi"){
	$harga=150000;
}else
if($kotatujuan=="Cirebon"&&$kelas=="Ekonomi"){
	$harga=200000;
}else
if($kotatujuan=="Bogor"&&$kelas=="Bisnis"){
	$harga=150000;
}else
if($kotatujuan=="Jakarta"&&$kelas=="Bisnis"){
	$harga=200000;
}else
if($kotatujuan=="Cirebon"&&$kelas=="Bisnis"){
	$harga=250000;
}else
if($kotatujuan=="Bogor"&&$kelas=="Eksekutif"){
	$harga=200000;
}else
if($kotatujuan=="Jakarta"&&$kelas=="Eksekutif"){
	$harga=250000;
}else
if($kotatujuan=="Cirebon"&&$kelas=="Eksekutif"){
	$harga=100000;
}else
$hargatiket=$harga;
$totalharga=$jumlah*$harga;
echo "<tr><td>Kota Tujuan<td>:$kotatujuan";
echo "<tr><td>Kelas<td>:$kelas";
echo "<tr><td>Jumlah Tiket<td>:$jumlah";
echo "<tr><td colspan=3><hr>";
echo "<tr><td>Harga Tiket<td>:";
echo "Rp.".number_format($harga,2,',',',');
echo "<tr><td>Total Harga<td>:";
echo "Rp.".number_format($totalharga,2,',',',');
?>
<body>
	<style>
/*untuk teks heading di tag <body>*/
h2
{
    background-color: white;
    color: crimson;
    font-family: sans-serif;
    text-align: center;
    width: 45%;
    margin:auto;
    padding: 20px;
}
 
body
{
    background-image: url('https://1.bp.blogspot.com/-4I4dfiR9U2c/X3OcJHQE2hI/AAAAAAAADXc/PGCPlfk4d6wtZsU7X3cdt3fV9o8M9_NBgCLcBGAsYHQ/w640-h480/A7.gif');
    background-repeat: no-repeat;
    background-size: cover;
}
<br>
	<a href="cetak_tiket.html">Cetak Tiket</a>
</style>
</body>