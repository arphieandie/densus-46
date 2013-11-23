<?php
	include('db.php');
	
	$nama = $_POST['Nama'];
	$email = $_POST['Email'];
	$subjek = $_POST['Subjek'];
	$komentar = $_POST['Komen'];
	$date = date('Y-m-d H:i:s');
	
	if(empty($nama)){
		echo "<script type='text/javascript'>alert ('NAMA KOSONG !! Silahkan Masukkan Nama Dengan Benar');</script>";
		include "contact.php";
	}
	else if(empty($email)){
		echo "<script type='text/javascript'>alert ('EMAIL KOSONG !! Silahkan Masukkan Email Dengan Benar');</script>";
		include "contact.php";
	}
	else if(empty($subjek)){
		echo "<script type='text/javascript'>alert ('SUBJECT KOSONG !! Silahkan Masukkan Subject Dengan Benar');</script>";
		include "contact.php";
	}
	else if(empty($komentar)){
		echo "<script type='text/javascript'>alert ('KOMENTAR KOSONG !! Silahkan Masukkan Komentar Anda Dengan Benar');</script>";
		include "contact.php";
	}
	else{
		echo "<script type='text/javascript'>alert ('Berhasil');</script>";
		$query = "INSERT INTO contact VALUES('".$nama."','".$email."','".$subjek."','".$komentar."','".$date."')";
		mysql_query($query);
		//echo '<div class="tampilkomen komenbaru"><h5>' . $nama. '</h5><h5>'.$email.'</h5><a>' . $date. '</a><h6>'.$subjek.'</h6><br/><br/>' . $komen. '</div>';
		//header("location:../Index.php");
		include "contact.php";
	}
	
?>
