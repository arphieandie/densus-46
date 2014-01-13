<?php	
	include("db.php");
	
	$namaEvent=$_POST["namaEvent"];
	$tempat=$_POST["tempat"];
	$pukul=$_POST["pukul"];
	$tanggal=$_POST["ddmmyyyy"];
	$filename=$_FILES['foto'];
	$kesimpulan=$_POST["simpul"];
	$text=$_FILES['txt'];
	$date = date('Y-m-d H:i:s');
	
	if(empty($namaEvent)){
		echo "<script type='text/javascript'>alert ('ADA FORM KOSONG !! Silahkan Masukkan Semua Form Dengan Benar');</script>";
		include "formtambahevent.php";
	}
	else if(empty($tempat)){
		echo "<script type='text/javascript'>alert ('ADA FORM KOSONG !! Silahkan Masukkan Semua Form Dengan Benar');</script>";
		include "formtambahevent.php";		
	}
	else if(empty($text)){
		echo "<script type='text/javascript'>alert ('ADA FORM KOSONG !! Silahkan Masukkan Semua Form Dengan Benar');</script>";
		include "formtambahevent.php";		
	}
	else if(empty($pukul)){
		echo "<script type='text/javascript'>alert ('ADA FORM KOSONG !! Silahkan Masukkan Semua Form Dengan Benar');</script>";
		include "formtambahevent.php";
	}
	else if(empty($tanggal)){
		echo "<script type='text/javascript'>alert ('ADA FORM KOSONG !! Silahkan Masukkan Semua Form Dengan Benar');</script>";
		include "formtambahevent.php";
	}
	else if(empty($filename)){
		echo "<script type='text/javascript'>alert ('ADA FORM KOSONG !! Silahkan Masukkan Semua Form Dengan Benar');</script>";
		include "formtambahevent.php";
	}
	else if(empty($kesimpulan)){
		echo "<script type='text/javascript'>alert ('ADA FORM KOSONG !! Silahkan Masukkan Semua Form Dengan Benar');</script>";
		include "formtambahevent.php";		
	}
	else{
		echo "<script type='text/javascript'>alert ('Berhasil Mendaftar');</script>";
		include "formtambahevent.php";
		$fileName = $_FILES['foto']['name']; //nama file
		$fileSize = $_FILES['foto']['size']; //ukuran file
		$fileError = $_FILES['foto']['error']; //
		$lokasi="upload/$fileName";    
		$txtname = $_FILES['txt']['name']; //nama file
		$txtsize = $_FILES['txt']['size']; //ukuran file
		$txterror = $_FILES['txt']['error']; //
		$txtlokasi="upload/$txtname";    
		if($fileSize > 0 || $fileError == 0 || $txtsize>0 ||$txterror==0){ //Check jika error
	   		$move = move_uploaded_file($_FILES['foto']['tmp_name'],$lokasi); //save gambar ke folder
			$pindah = move_uploaded_file($_FILES['txt']['tmp_name'],$txtlokasi); //save gambar ke folder
			if($move && $pindah){
				$q = "INSERT into event VALUES('','$namaEvent','$tempat','$pukul','$tanggal','','$fileName','upload/$fileName','$kesimpulan','','$txtname','upload/$txtname','$date')"; 
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
		
		//header("location:admin_profil.php");
?>






















