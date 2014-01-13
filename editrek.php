 <?php
 include "db.php";
 $code=$_POST['kode'];
$saldo=$_POST["saldo"];
$jumlah;
			$q1 = "SELECT kode,saldo from transaksi"; //memilih file dari database
				$result = mysql_query($q1);
				while ($data = mysql_fetch_array($result)) {
					if($code==$data[0]){
						$jumlah=$data[1]+$saldo;
					}}
$q=mysql_query("update transaksi set saldo='$jumlah' where kode='$code'");
echo"<meta http-equiv='refresh'content='0;url=admin_setting.php'>";
?>
