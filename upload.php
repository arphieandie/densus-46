<?php
	include("db.php");
	
	$foto=$_FILES["foto"];
	
	if(empty($foto)){
		echo "<script type='text/javascript'>alert ('ADA FORM KOSONG !! Silahkan Masukkan Semua Form Dengan Benar');</script>";
		include "login_profil.php";
	}
	else{
		echo "<script type='text/javascript'>alert ('Berhasil Mendaftar');</script>";
		include "login_profil.php";
		$fileName = $_FILES['foto']['name']; //nama file
		$fileSize = $_FILES['foto']['size']; //ukuran file
		$fileError = $_FILES['foto']['error']; //
		$lokasi="photo/$fileName";
		//$member=$_SESSION["Login"];    
		if($fileSize > 0 || $fileError == 0){ //Check jika error
	   		$move = move_uploaded_file($_FILES['foto']['tmp_name'],$lokasi); //save gambar ke folder
			if($move){
				$q = "INSERT into photo VALUES('','$fileName','photo/$fileName')"; //memasukkan data ke database
	   			mysql_query($q);
	
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






















