<?php
	include('db.php');
	$iden=$_POST['no'];
	$date = date('Y-m-d H:i:s');
	$komen = $_POST['komen'];
$q = "update status set status='$komen',tanggal='$date' where no='$iden'"; //memasukkan data ke database
	   	mysql_query($q);
		echo"<meta http-equiv='refresh'content='0;url=login_profil.php'>";
		?>
