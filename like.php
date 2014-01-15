<?php
include "db.php";

			$pengenal=$_GET['pengenal'];
			$q2 = 'SELECT username,suka from datamember'; //memilih file dari database
			$result = mysql_query($q2);
			while ($data = mysql_fetch_array($result)) {
				if($pengenal==$data[0]){
					$hasil=$data[1];
					$hasil++;
					$query= "update datamember set suka='$hasil' where username='$pengenal'";
					$re=mysql_query($query);
					echo"<meta http-equiv='refresh'content='0;url=profil.php?id=$pengenal'>";
				}
			}

?>
