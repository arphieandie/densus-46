<?php
	include("db.php");
	
	$namaBerita=$_POST["namaBerita"];
	$url=$_POST["url"];
	$foto=$_FILES["foto"];
	$kesimpulan=$_POST["simpul"];
	
	if(empty($namaBerita)||empty($url)||empty($foto)||empty($kesimpulan)){
		echo "<script type='text/javascript'>alert ('ADA FORM KOSONG !! Silahkan Masukkan Semua Form Dengan Benar');</script>";
		include "formtambahberita.php";
	}
	else{
		echo "<script type='text/javascript'>alert ('Berhasil Mendaftar');</script>";
		include "formtambahevent.php";
		$fileName = $_FILES['foto']['name']; //nama file
		$fileSize = $_FILES['foto']['size']; //ukuran file
		$fileError = $_FILES['foto']['error']; //
		$lokasi="sponsor/$fileName";    
		if($fileSize > 0 || $fileError == 0){ //Check jika error
	   		$move = move_uploaded_file($_FILES['foto']['tmp_name'],$lokasi); //save gambar ke folder
			if($move){
				$q = "INSERT into sponsor VALUES('$namaBerita','$url','','$fileName','sponsor/$fileName','$kesimpulan','')"; //memasukkan data ke database
	   			mysql_query($q);
	
	 			echo"<meta http-equiv='refresh'content='0;url=admin_profil.php'>";// mengarahkan ke file tampil foto
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






















