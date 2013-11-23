<?php
	include("db.php");
	
	$photo = $_POST["foto"];
	
	if(empty($photo)){
		echo "<script type='text/javascript'>alert ('FILE UPLOAD KOSONG !! Silahkan Upload Dengan Benar');</script>";
		include "login_profil.php";
	}
	else{
		echo "<script type='text/javascript'>alert ('Berhasil Upload');</script>";
		include "login_profil.php";
		$query = "INSERT INTO photo VALUES('".$photo."')";
		mysql_query($query);
		
		echo $photo;	
	}
?>
