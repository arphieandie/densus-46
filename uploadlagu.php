<?php
	include("db.php");
	session_start();
	$foto=$_FILES["lagu"];
	$pengenal=$_SESSION["Login"];
	
	if(empty($foto)){
		echo "<script type='text/javascript'>alert ('ADA FORM KOSONG !! Silahkan Masukkan Semua Form Dengan Benar');</script>";
		include "login_profil.php";
	}
	else{
		echo "<script type='text/javascript'>alert ('Berhasil Mendaftar');</script>";
		include "login_profil.php";
		$fileName = $_FILES['lagu']['name']; //nama file
		$fileSize = $_FILES['lagu']['size']; //ukuran file
		$fileError = $_FILES['lagu']['error']; //
		$lokasi="lagu/$fileName";
		//$member=$_SESSION["Login"];    
		if($fileSize > 0 || $fileError == 0){ //Check jika error
	   		$move = move_uploaded_file($_FILES['lagu']['tmp_name'],$lokasi); //save gambar ke folder
			if($move){
				$q = "INSERT into lagu VALUES('$pengenal','','$fileName','lagu/$fileName')"; //memasukkan data ke database
	   			mysql_query($q);
				$query = "INSERT into price VALUES('$pengenal','$fileName','$harga')"; //memasukkan data ke database
	   			mysql_query($query);
	 			echo"<meta http-equiv='refresh'content='0;url=login_profil.php'>";// mengarahkan ke file tampil foto
			} 
			else{
				echo "<h3>Failed! </h3>";
			}
		} 
		else {
			echo "Failed to Upload : ".$fileError;
			}
		}
?>






















