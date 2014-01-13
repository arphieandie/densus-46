 <?php
			include "db.php";
			$iden=$_GET['nama'];
			$q1 = "SELECT nama,tempat,pukul,tanggal,lokasi,kesimpulan where nama='$iden' from event"; //memilih file dari database
			$result = mysql_query($q1);
			while ($data = mysql_fetch_array($result)) {
				$loc = $data['lokasi'];
				echo"<div class='jelasevent'><img class='gambareventas' src=$loc align='left'/>
							Nama Event : $data[0]<br/>
							Tempat : $data[1]<br/>
							pukul : $data[2]<br/>
							Kesimpulan : $data[5]<br/>
						</div><br/>";
						include "event.php";
				}
				
			?>       
