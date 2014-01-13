 
 <?php
 include "db.php";
 $iden=$_POST['no'];
$nama=$_POST["nama"];
	$tempat=$_POST["tempat"];
	$pukul=$_POST["pukul"];
	$tanggal=$_POST["tgl"];
	$kesimpulan=$_POST["simpul"];
$q=mysql_query("update event set nama='$nama',tempat='$tempat',pukul='$pukul',tanggal='$tanggal', kesimpulan='$kesimpulan' where no='$iden'");
echo"<meta http-equiv='refresh'content='0;url=admin_profil.php'>";
?>
