<html>
<head>
<title>MID Semester 4</title>
</head>
<body>
<?php 

echo'<form action="tampildata.php" method="post">';
echo'<table border ="0" cellpadding = "2" cellspacing = "2" align = "center" style = "" ><td align = center>';
echo "<h2>Pendaftaran Pelanggan Baru</h2>";
echo "</table>";

echo "<hr><table><b> Data Pribadi </b><tr><hr>";
echo "<tr><td>Nama Lengkap</td> <td><input type = 'text' name = 'nama'><td><tr>
	  <td>Jenis Kelamin</td> <td><input type = 'radio' name = 'jk' value = 'pria'><label for = 'jk'>Pria</label>
	  <input type = 'radio' name = 'jk' value = 'wanita'><label for = 'jk'>wanita</label>
	  <td><tr>
	  <td>E-mail</td> <td><input type = 'text' name = 'e-mail'></td><tr></table>";
 
echo "<hr><table><b> Data Alamat Pengiriman </b><tr><hr>";
echo "<tr><td>Nama Negara</td> <td><input type = 'text' name = 'namanegara' value ='Indonesia'><td><tr>
	  <td>Kota</td> <td><input type = 'text' name = 'kota'><td><tr>
	  <td>Alamat</td> <td><textarea cols ='45' rows ='7' name = 'alamat' class ='textarea' id = 'alamat' size = '15px'></textarea></td></tr>
	  <td>Kode Post</td> <td><input type = 'text' name = 'kode'>* (diisi minimal/max 5 digit)</td><tr></table>";
 
echo "<hr><table><b> Data No Kontak </b><tr><hr>";
echo "<tr><td>No. Telepon</td> <td><input type = 'text' name = 'telp'><td><tr>
	  <td>No. Handphone</td> <td><input type = 'text' name = 'hp'><td><tr>
	  <td>No. Faxsimili</td> <td><input type = 'text' name = 'fax'></td><tr></table>
	  <td><input type = 'Submit' value= 'Send' ></td></tr>
	  <td><input type = 'Reset' value= 'Reset' ></td></tr>";

echo "<hr><hr><hr>";
echo "Nama  : Yayuk Kurniawati<br>";
echo "Kelas : SKA-15.A2<br>";
echo "NPM   : 888740306150114<br>";
echo "Matakuliah   : Pemrograman Web<br>";
echo "<hr>";

?>
</body>
</html>