<?php
	include("db.php");
	$nama=$_POST["namaBand"];
	$base=$_POST["basecamp"];
	$aliran=$_POST["aliran"];
	$simpul=$_POST["simpul"];
	$foto=$_FILES["foto"];
	$pengenal=$_POST["peng"];
		echo "<script type='text/javascript'>alert ('Berhasil Mendaftar');</script>";
		include "login_setting.php";
		$fileName = $_FILES['foto']['name']; //nama file
		$fileSize = $_FILES['foto']['size']; //ukuran file
		$fileError = $_FILES['foto']['error']; //
		$lokasi="photo/$fileName";
		//$member=$_SESSION["Login"];    
		if($fileSize > 0 || $fileError == 0){ //Check jika error
	   		$move = move_uploaded_file($_FILES['foto']['tmp_name'],$lokasi); //save gambar ke folder
			if($move){
				$q = "INSERT into setting VALUES('$pengenal','$nama','$base','$aliran',' ','$fileName','photo/$fileName','$simpul','')"; //memasukkan data ke database
	   			mysql_query($q);
	
	 			echo"<meta http-equiv='refresh'content='0;url=login_setting.php'>";// mengarahkan ke file tampil foto
			} 
			else{
				echo "<h3>Failed! </h3>";
			}
		} 
		else {
			echo "Failed to Upload : ".$fileError;
			}
		
?>






















