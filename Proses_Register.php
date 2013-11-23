<?php
	include("db.php");
	
	$user = $_POST["username"];
	$pass = $_POST["password"];
	$re=$_POST["repass"];
	
	$username=md5($user);
	$password=md5($pass);
	$repass=md5($re);
	
	if(empty($username)){
		echo "<script type='text/javascript'>alert ('USERNAME KOSONG !! Silahkan Masukkan Username Dengan Benar');</script>";
		include "index.php";
	}
	else if(empty($password)){
		echo "<script type='text/javascript'>alert ('PASSWORD KOSONG !! Silahkan Masukkan Password Dengan Benar');</script>";
		include "index.php";
	}
	else if(empty($repass)){
		echo "<script type='text/javascript'>alert ('RETYPE PASSWORD KOSONG !!<br/>Silahkan Masukkan Retype Password Sesuai Password');</script>";
		include "index.php";
	}
	else{
		echo "<script type='text/javascript'>alert ('Berhasil Mendaftar');</script>";
		include "index.php";
		$query = "INSERT INTO datamember VALUES('".$username."','".$password."')";
		mysql_query($query);
		
		header("location:index.php");
	}
?>
