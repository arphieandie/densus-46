<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Newbie</title>
<link rel="stylesheet" href="tampilan.css" type="text/css" />
<script type="text/javascript" src="drop_menu.js"></script>
<style type="text/css">
.banda{
	/*background:#999;*/
	width:98%;
	margin:1%;
}
.banda .daftarbanda{
	float:left;
	/*background:#3CF;*/
	width:25%;
	/*height:600px;*/
	margin-right:5px;
	padding-right:5px;
	/*border-right: solid;
	border-right-color:#006;*/
}
.banda .statusa .letaka{
	margin-top:20px;
	background:#111;
	color:#EEE;
	font-style:inherit;
	font-size:14px;
	border:solid;
	border-color:#FFF;
	border-radius:8px;
	padding:4px;
}
.banda .lagua{
	float:right;
	/*background:#E00;*/
	width:74%;
	/*height:400px;
	border-bottom-style: solid;
	border-bottom-color: #700;*/
	margin-bottom:5px;
	padding-bottom:5px;
}
.banda .photoa{
	float:right;
	/*background: #939;*/
	width:74%;
	/*height:600px;*/
	margin-bottom:8px;
}
.tampilgbrevent{
	background:rgba(0,0,0,0.9);
	width:96%;
	height:160px;
	color:#3FF;
	font:Verdana, Geneva, sans-serif;
	font-size:14px;
	border-radius:8px;
	margin:1%;
	padding:1%;
}
.tampilgbrevent .gbrevent{
	border-radius:8px;
	border:0;
	width:200px;
	height:160px;
	margin-right:20px;
}
</style>
</head>
<body>
	<div class="header">
    	<div class="section">
			<a href="index.html"><img class="gbr" src="images/newbiehead.jpg" width="160px" height="80px" alt="Image" /></a>
            <div class="headerfix">
				<ul class="menu" id="menu">
            		<li>
						<a href="#" class="menulink">NEWBIE</a>
						<ul>	
                        	<li>
								<a href="admin_profil.php">Profil</a>
							</li>
							<li>
								<a href="admin_pesan.php">Message</a>
							</li>
                            <li>
								<a href="admin_setting.php">Transaksi</a>
							</li>
                            <li>
								<a href="Logout.php">Logout</a>
							</li>
						</ul>
					</li>
				</ul>
            	<script type="text/javascript">
					var menu = new menu.dd("menu");
					menu.init("menu", "menuhover");
				</script>
			</div>
       	</div>
    </div>
    <div class="banda">
    	<div class="daftarbanda">
			<div class="judulin"><h2>Band</h2></div>
            <div class="jarak"></div>
            <div class="jarak"></div>
            <style type="text/css">
.bandana{
	color: #222; 
	width:94%;
	height:70px;
	padding:10px;
	font-family:Verdana, Geneva, sans-serif;
	font-size:14px;
	margin-bottom:10px;
	border-radius:8px;
}
</style>
				 <?php
				include "db.php";
				$query = "SELECT * FROM datamember ORDER BY suka DESC";
				$hasil_query = mysql_query($query);
		
				while ($status=mysql_fetch_row($hasil_query)) {
					$q = "SELECT id,lokasi FROM setting";
				$hasil = mysql_query($q);
		
				while ($data=mysql_fetch_row($hasil)) {
					if($data[0]==$status[0]){
						$lok=$data[1];
					echo "<div class='bandana'><img src='$lok' width='50px' height='50px' align='left'/>$status[0] - <a href='hapus.php?id=$status[0]'><img src='images/DeleteRed.png' width='30px' height='30px' /></a></div><hr/>";
				}}}
				?>
        </div>
        <div class="lagua">
			<div class="judulin"><h2>Event</h2></div>
            <div class="jarak1"></div>
            <div class="jarak"></div>
            <form method="post" action="formtambahevent.php">
            	<input type="submit" value="Tambah Event" class="tambah" />
            </form>
            <?php
			include "db.php";
			  
			$q1 = "SELECT nama,tempat,pukul,tanggal,lokasi,kesimpulan,no from event"; //memilih file dari database
				$result = mysql_query($q1);
				while ($data = mysql_fetch_array($result)) {
					$loc = $data['lokasi'];
			echo"";
			echo"<div class='tampilgbrevent'>
					<img class='gbrevent' src=$loc align='left'/>
					Nama Event : $data[0]<br/>
					Tempat : $data[1]<br/>
					pukul : $data[2]<br/>
					pukul : $data[3]<br/>
					Kesimpulan : $data[5]<br/>
					<a href='edit event.php?nama=$data[6]'><img src='images/301px-Orange_Icon_Edit.svg.png' width='30px' height='30px' /></a><a href='delete event.php?nama=$data[0]'><img src='images/DeleteRed.png' width='30px' height='30px' /></a></div><hr/>";
			//echo"<td><a href=\"edit.php\">Edit<br></a></td>";
			   
				//echo"<tr><td>$data[0]<br>$data[1]</td><td></td></tr>";
				}
			?>            
        </div>
        <div class="photoa">
        	<div class="judulin"><h2>Sponsor</h2></div>
            <div class="jarak1"></div>
            <div class="jarak"></div>
            <form method="post" action="formtambahberita.php">
            	<input type="submit" value="Tambah Sponsor" class="tambah" />
            </form> 
             <?php
			include "db.php";
			  
			$q1 = "SELECT namasponsor,link,lokasi,kesimpulan,no from sponsor"; //memilih file dari database
				$result = mysql_query($q1);
				while ($data = mysql_fetch_array($result)) {
					$loc = $data['lokasi'];
			echo"";
			echo"<div class='tampilgbrevent'>
					<img class='gbrevent' src=$loc align='left'/>
					Nama Sponsor : $data[0]<br/>
					URL : $data[1]<br/>
					Kesimpulan : $data[3]<br/>
					<a href='form edit sponsor.php?namasponsor=$data[4]'><img src='images/301px-Orange_Icon_Edit.svg.png' width='30px' height='30px' /></a><a href='delete sponsor.php?namasponsor=$data[0]'><img src='images/DeleteRed.png' width='30px' height='30px' /></a></div>";
			//echo"<td><a href=\"edit.php\">Edit<br></a></td>";
			   
				//echo"<tr><td>$data[0]<br>$data[1]</td><td></td></tr>";
				}
			?>     
        </div>
    </div>
</body>
</html>
