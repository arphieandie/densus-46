<?php
	include('db.php');
	
	$komen = $_POST['komen'];
	$date = date('Y-m-d H:i:s');
	$pengenal= $_POST['id'];
	if(empty($komen) || $komen == "Status / Kegiatan Yang Akan Datang"){
		echo "<script type='text/javascript'>alert ('ISI STATUS DENGAN BENAR !!!');</script>";
		include "login_profil.php";
	}
	else{
		//echo "<script type='text/javascript'>alert ('Berhasil');</script";
		$q = "INSERT into status VALUES('$pengenal','$komen','$date','')"; //memasukkan data ke database
	   	mysql_query($q);
		include "login_profil.php";
	}
?>
