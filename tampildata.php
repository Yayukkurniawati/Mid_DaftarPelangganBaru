<html>
<body>
<?php
error_reporting(E_ALL ^(E_NOTICE|E_WARNING));
echo'<table border ="0" cellpadding = "2" cellspacing = "2" align = "center" style = "" ><td align = center>';
echo "<h2>Data Pelanggan Baru</h2>";
echo "</table>";

echo "<hr><table><b> Data Pribadi </b><tr><hr>";
echo "Nama 	:".$_POST['nama']."<br>";
echo "Jenis Kelamin	: ".$_POST['jk']." <br>";
echo "E-mail	: ".$_POST['e-mail']."<br><br></table>";

echo "<hr><table><b> Data Alamat Pengiriman </b><tr><hr>";
echo "Nama Negara 	:".$_POST['namanegara']."<br>";
echo "Kota	: ".$_POST['kota']." <br>";
echo "Alamat	: ".$_POST['alamat']."<br>";
echo "Kode Post	: ".$_POST['kode']."<br><br></table>";

echo "<hr><table><b> Data No Kontak </b><tr><hr>";
echo "No. Telepon 	:".$_POST['telp']."<br>";
echo "No. Handphone	: ".$_POST['hp']." <br>";
echo "No. Faxsimili	: ".$_POST['fax']."<br></table>";
echo "<hr>";

?>
</body>
</html>