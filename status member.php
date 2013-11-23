<?php
	include('db.php');
	
	$komen = $_POST['komen'];
	$date = date('Y-m-d H:i:s');
	//$login = $_SESSION['Login'] ;
	
	if(empty($komen)){
		echo "<script type='text/javascript'>alert ('ISI STATUS DENGAN BENAR !!!');</script>";
		include "login_profil.php";
	}
	else{
		echo "<script type='text/javascript'>alert ('Berhasil');</script>";
		$query = "INSERT INTO status VALUES('".$komen."','".$date."')";
		mysql_query($query);
		include "login_profil.php";
	}
?>
