<style type="text/css">
body{
/*	background:url(images/header%20background.jpg) center;
*/}
.donload{
	margin-top:140px;
	margin-left:35%;
	margin-right:35%;
}
.donload a{
	text-decoration:none;
	width:30%;
	color:#FFC;
}
.donload a img{
	width:100%;
	height:200px;
}
form input{
	width:180px;
	padding:10px;
	margin:10px;
}
.donload h2{
	text-align:center;
	font-size: 36px;
	color: #444;
}
.donload h5{
	text-align:center;
	font-size:18px;
	color: #777;
}
</style>
<?php
	include ('db.php');
	$lagu=$_POST['lagu'];
	$id=$_POST['id'];
	$harga=$_POST['harga'];
	$nama=$_POST['nama'];
	$rek=$_POST['rek'];
	$email=$_POST['email'];
	$bank=$_POST['bank'];
	$telp=$_POST['telp'];
	$catat=$_POST['catat'];
	$date = date('Y-m-d H:i:s');
	
	if(empty($lagu)||empty($id)||empty($harga)||empty($nama)||empty($rek)||empty($email)||empty($bank)||empty($telp)){
		echo "<script type='text/javascript'>alert ('ADA FORM KOSONG !! Silahkan Masukkan Semua Form Dengan Benar');</script>";
		include "transaksi.php";	
	}
	
	else{
 
		$namaFile = $lagu;
		$tmpName  = "lagu/".$lagu;
		 
		$fp      = fopen($tmpName, 'r');
		$isiFile = fread($fp, filesize($tmpName));
		fclose($fp);
		 
		$zip = new ZipArchive();
		$fileKompresi = "zip/".$namaFile.".zip";
		 
		$kompresi = $zip->open($fileKompresi, ZIPARCHIVE::CREATE);
		if ($kompresi)
		{
			$zip->addFromString($namaFile, $isiFile);
			$zip->close();
			echo "<div class=\"donload\"><h2>$lagu</h2><h5>Klik gambar dibawah untuk mendownload !</h5><a href='zip/$lagu.zip'><img src=\"images/index7.jpg\" /> </a>";
			echo "<form method=\"post\" action=\"transaksi.php\"> <input type=\"hidden\" name=\"id\" value=".$id." /><input type=\"hidden\" name=\"lagu\" value=".$lagu." /><input type=\"hidden\" name=\"harga\" value=".$harga." />";
			echo "<input type=\"submit\" class=\"posisi\" value=\"Kembali\"/>";
			echo "<input type=\"button\" class=\"posisi\" value=\"OK\" onClick=\"window.location.href='profil.php?id='\"/></form></div>";
		//Database
		$q = "INSERT into transaksi VALUES('$id','$lagu','$harga','$nama','$email','$bank','$rek','$telp','$catat','$date')"; 
	   	mysql_query($q);
		
		}
	 	//echo"<meta http-equiv='refresh'content='0;url=profil.php?id='>";	
	}
?>
