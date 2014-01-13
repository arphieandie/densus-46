<?php
include "db.php";
$id=$_GET['id'];
			if($id==''){
				$q2 = 'SELECT usermane,basecamp,aliran,lokasi,ket,id from setting'; //memilih file dari database
			$result = mysql_query($q2);

while ($data = mysql_fetch_array($result)) {
				$loc = $data['lokasi'];
				$peng=$data[5];
				echo"<div class='tampilKet'><img src='$loc' width='200px' height='200px' align='left'/><br/>
						$data[0]<br/>$data[1]<br/>$data[2]<br/>$data[4]<br/>
						<br/><a href='like.php?pengenal=$data[5]' class='lik'><img src='images/LikeIcon.png' width='30px' height='30px' align='left'/> Like</a>
						</div>";
						break;
				}
				$q1 = "SELECT status,tanggal,id from status"; //memilih file dari database
			$result = mysql_query($q1);
			while ($data = mysql_fetch_array($result)) {
				if($data[2]==$peng){
				echo "<div class='statusKomen'>$data[0]<br/>$data[1]</div><br/>";
				break;}
				}
			}else{
				include "db.php";
			$q2 = 'SELECT usermane,basecamp,aliran,lokasi,ket,id from setting'; //memilih file dari database
			$result = mysql_query($q2);
			while ($data = mysql_fetch_array($result)) {
				if($id==$data[5]){
				$loc = $data['lokasi'];
				echo"<div class='tampilKet'><img src='$loc' width='200px' height='200px' align='left'/><br/>
						$data[0]<br/>$data[1]<br/>$data[2]<br/>$data[4]<br/>
						<br/><a href='like.php?pengenal=$data[5]' class='lik'><img src='images/LikeIcon.png' width='30px' height='30px' align='left' /> Like</a>
						</div>";
				}}
				$q1 = "SELECT status,tanggal,id from status"; //memilih file dari database
			$result = mysql_query($q1);
			while ($data = mysql_fetch_array($result)) {
				if($id==$data[2]){
				echo "<div class='statusKomen'>$data[0]<br/>$data[1]</div><br/>";
				}}
			}
			
                ?>
