<html>
<head>
  <title>data mahasiswa</title>
</head>
<body>
<?php
$nama =$_POST['nama'];
$email =$_POST['email'];
$yyy2 =$_POST['yyy2']
?>
<center>
<font size="8">
  <b>Data Diri penumpang</b>
<table border=3 bgcolor="White">
<tr>
<td colspan=5 align="center"><b>Data Penumpang</b></td>
</tr>
<tr>
<td>Nama</td><td><?php echo $nama;?></td>
</tr>
<td>email</td><td><?php echo $email;?></td>
</tr>
<td>no telp</td><td><?php echo $yyy2;?></td>
</table>
  <font size="5">
    <b>Data diri anda berhasil<br>Silahkan melakukan pembelian tiket<br></b>
<a href="projek2.html">PEMBELIAN TIKET</a>
</center>
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
    background-image: url('https://cdnsite.agilecrm.com/blog/wp-content/uploads/2018/09/Email-marketing.gif');
    background-repeat: no-repeat;
    background-size: cover;
}
</style>
</body>
</html>