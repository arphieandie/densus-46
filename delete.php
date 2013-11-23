<?php
	include ("db.php");
		
	$query=mysql_query ("delete from contact where nama='$nama'",mysql_connect("localhost","root",""));
	include ("admin_pesan.php");
?>
