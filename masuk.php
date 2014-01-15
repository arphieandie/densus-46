<?php
	include("db.php");
	$id=$_POST['no'];
	$nama=$_POST["satu"];
	$base=$_POST["dua"];
	$aliran=$_POST["tiga"];
	$simpul=$_POST["empat"];
	$foto=$_FILES["foto"];
	
		//echo "<script type='text/javascript'>alert ('Berhasil Update');</script";
		//include "login_setting.php";
		$fileName = $_FILES['foto']['name']; //nama file
		$lokasi="photo/$fileName";
	   		$move = move_uploaded_file($_FILES['foto']['tmp_name'],$lokasi); //save gambar ke folder
			if($move){
		$q = mysql_query("update setting set usermane='$nama', basecamp='$base',aliran='$aliran',filename='$fileName',lokasi='$lokasi', ket='$simpul'  where no='$id'");
	   			//mysql_query($q);
	
	 			echo"<meta http-equiv='refresh'content='0;url=login_setting.php'>";// mengarahkan ke file tampil foto
			} 
			else{
				$q = mysql_query("update setting set usermane='$nama', basecamp='$base',aliran='$aliran',ket='$simpul'  where no='$id'");
				echo"<meta http-equiv='refresh'content='0;url=login_setting.php'>";// mengarahkan ke file tampil foto
			}?>






















