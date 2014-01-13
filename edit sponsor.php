 
 <?php
 include "db.php";
 $no=$_POST['no'];
$namaBerita=$_POST["namaBerita"];
	$url=$_POST["url"];
	$kesimpulan=$_POST["simpul"];
$query = mysql_query("update sponsor set namasponsor='$namaBerita', link='$url', kesimpulan='$kesimpulan' where no='$no'");
echo"<meta http-equiv='refresh'content='0;url=admin_profil.php'>";
?>
