<?php
	include ("db.php");
	$id=$_POST['id'];
	$lagu=$_POST['lagu'];
	$harga=$_POST['harga'];
	$q1 = 'SELECT id from price'; //memilih file dari database
			$result = mysql_query($q1);
			while ($data = mysql_fetch_array($result)) {
				if($data[0]==$id){					
					$q=mysql_query("update price set harga='$harga' where lagu='$lagu'");
					echo"<meta http-equiv='refresh'content='0;url=login_profil.php'>";
				}
			}?>
