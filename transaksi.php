<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Form Event</title>
<style type="text/css">
body{
	background:url(images/header%20background.jpg) center;
}
.formdaftar{
	background: rgba(0,0,0,0.8);
	margin:20px;
	padding:20px;
	color:#9FF;
	font-family:Verdana, Geneva, sans-serif;
	font-size:16px;
	font-style:italic;
	border-radius:6px;
}
.formdaftar input{
	border-radius:6px;
	width:300px;
	border:solid;
	border-color:#000;
	font-size:20px;
	color:#0C0;
	margin:5px;
	padding:4px;
}
.formdaftar .posisi{
	background: url(images/cssdeck-logo.png) center;
	width:60px;
	height:60px;
	position: static;
	float:right;
}
.a{
	background:url(images/header_red.jpg) center;
	border-radius:4px;
}
.a:hover{
	background:url(images/website-header-red.jpg) center;
}
</style>
</head>
<body>
		<form class='formdaftar'  method='post'>
        	<input type="button" class="posisi" onClick="window.location.href='profil.php'"/><br />
			<h4>FORM TRANSAKSI</h4>
           	<!--Nama Event :<br/>
      		<input type='text' name='namaEvent' /><br />
       		Tempat :<br/>
            <input type='text' name='tempat' /><br />
			Pukul :<br/>
      		<input type='text' name='pukul' /><br />
       		Hari-Tanggal-Tahun :<br/>
            <input type='text' name='ddmmyyyy' /><br />
			Gambar :<br/>
            <input type='file' name='foto' class='a' /><br />
			Kesimpulan (Maks 20kata):<br/>
			<textarea name='simpul' cols='100' rows='3'></textarea><br />-->
			<input type='submit' value='Tambah' class='a' />
            <input type="reset" value="Reset" class="a"/>
       	</form>
</body>
</html>
