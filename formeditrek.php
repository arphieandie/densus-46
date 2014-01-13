
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
		<?php
		include "db.php";
			  $id=$_GET['kode'];
			$q1 = "SELECT kode,saldo,rekening from transaksi"; //memilih file dari database
				$result = mysql_query($q1);
				while ($data = mysql_fetch_array($result)) {
					if($id==$data[0]){
		
		?>
		<form class='formdaftar'  method='post' action='editrek.php'>
        	<input type="button" class="posisi" onClick="window.location.href='admin_setting.php'"/><br />
			<h4><?php echo "No Rek : $data[2] - Saldo : $data[1] $"; ?></h4>
            <input type="hidden" name="kode" value="<?php echo $data[0];  ?>" />
           	Tambah Saldo ($) :<br/>
      		<input type='text' name='saldo' /><br />
    		<input type='submit' value='Edit' class='a' />
       	</form>
        <?php
				break;}}
		?>
</body>
</html>
