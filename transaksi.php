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
	color:#444;
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
.select{
	border-radius:6px;
	width:300px;
	border:solid;
	border-color:#000;
	font-size:20px;
	color:#444;
	margin:5px;
	padding:4px;
}
</style>
</head>
<body>
		<form class='formdaftar'  method='post' action="reg.php">
        	<input type="button" class="posisi" onClick="window.location.href='profil.php?id='"/><br />
			<?php
		include ('db.php');
		$lagu=$_POST['lagu'];
		$id=$_POST['id'];
		$harga=$_POST['harga'];		
		?>
        <input type="hidden" name="id" value="<?php echo $id; ?>" />
        <h3>Konfirmasi Pembayaran</h3>
        Lagu :<br /> <input type="text" name="lagu" readonly="readonly" value="<?php echo $lagu; ?>" /><br />
        Harga ($) :<br /> <input type="text" name="harga"  readonly="readonly" value="<?php echo $harga; ?>"/><br />
        Nama Pemilik Rekening :<br /> <input type="text" name="nama" /><br />
        Email :<br /> <input type="text" name="email" /><br />
        Pembayaran Dari Bank :<br /> <select name="bank" class="select">
        		<option>BCA</option>
                <option>Mandiri</option>
                <option>BRI</option>
                <option>BNI</option>
                <option>Mega</option>
        	</select><br />
        No Rekening :<br /> <input type="text" name="rek" /><br />
        No Telp. :<br /> <input type="text" name="telp" /><br />
        Catatan :<br /><textarea name="catat" cols="100" rows="10"></textarea><br />
            <input type='submit' value='Download' class='a' />
            <input type="reset" value="Reset" class="a"/>
       	</form>
</body>
</html>
