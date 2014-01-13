<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Newbie</title>
<link rel="stylesheet" href="tampilan.css" type="text/css" />
<style type="text/css">
.jelasevent{
	/*background:rgba(0,0,0,0.9);
	background: url(images/red_background.jpg) center;*/
	width:98%;
	height:430px;
	border-radius:8px;
	color: #222;
	font-family: 'Muli-Light';
	font-size:18px;
}
.gambareventas{
	border-radius:8px;
	width:100%;
	height:400px;
	margin:10px;
}
.eventa{
	width:98%;
	height:98px;
	border-radius:8px;
	color:#222;
	font-family: 'Muli-Light';
	font-size:16px;
	margin-bottom:10px;
}
.eventa:hover{
	background: url(images/header.png) center;
	color:#030;
}
.gambareventa{
	border-radius:8px;
	width:80px;
	height:80px;
	margin:10px;
}
.sponsorberita{
	border-bottom:solid;
	border:#AAA;
	color:#444;
	text-align:justify;
	font-family: "Muli";
	font-size:14px;
}
.sponsorberita .gbrberita{
	width:100px;
	height:100px;
	border:#777;
	margin-right:5px;
}
.lik{
	text-decoration: none;
}
</style>
</head>
<body>
	<div class="header">
    	<div class="section">
			<a href="index.php"><img class="gbr" src="images/newbiehead.jpg" width="160px" height="80px" alt="Image" /></a>
			<ul>
				<li>
					<a href="index.php">Home</a>
				</li>
				<li class="current">
					<a href="event.php?tempat=">Event</a>
				</li>
				<li>
					<a href="profil.php?id=">Profil</a>
				</li>
			</ul>
		</div>
	</div>
    <div class="event">
    	<div class="namaevent">
        	<div class="judulin"><h2>Event</h2></div>
        	<div class="jarak1"></div>
            <div class="jarak"></div>
             <?php
			include "db.php";
			$q1 = "SELECT nama,tempat,pukul,tanggal,lokasi,kesimpulan,namatxt from event order by date desc"; //memilih file dari database
			$result = mysql_query($q1);
			while ($data = mysql_fetch_array($result)) {
				$loc = $data['lokasi'];
				echo"<a class='lik' href='?tempat=upload/$data[6]'><div class='eventa'><img class='gambareventa' src=$loc align='left'/>
							$data[0]<br/>
						</div></a><hr/>";
				}
			?>       
        </div>
        <div class="penjelasan">
       		<div class="judulin"><h2>Penjelasan</h2></div>
            <div class="jarak1"></div>
            <div class="jarak"></div>
            <style type="text/css">
            .lihatfoto{
				border-radius:6px;
				width:96%;
				height:400px;
				margin-bottom:10px;
			}
			.maujelas{
				font-family: 'Muli-Light';
				border-radius:6px;
				margin:1%;
				padding:2%;
				width:98%;
				margin-top:0;	
			}
			</style>
			<?php
			$halaman=$_GET['tempat'];
			$q="select lokasi,lokasitxt from event order by date desc";
			$result=mysql_query($q);
			if($halaman==''){
			while ($data = mysql_fetch_array($result)) {
				$loc = $data['lokasi'];
				echo "<div class='maujelas'><img class='lihatfoto' src=$loc align='left'/>";
				$buka=fopen($data[1],"r");
			$baca=fread($buka,4096);
			echo "$baca</div>";
			break;}
			}
			else{
			while ($data = mysql_fetch_array($result)) {
				if($halaman==$data[1]){
				$loc = $data['lokasi'];
				echo "<div class='maujelas'><img class='lihatfoto' src=$loc align='left'/>";
			}}
			$buka=fopen($halaman,"r");
			$baca=fread($buka,4096);
			echo "$baca</div>";
			}?>
        </div>
        <div class="sponsor">
			<div class="judulin"><h2>Sponsor</h2></div>
            <div class="jarak1"></div>
             <?php
			include "db.php";
			  
			$q1 = "SELECT namasponsor,link,lokasi,kesimpulan from sponsor"; //memilih file dari database
				$result = mysql_query($q1);
				while ($data = mysql_fetch_array($result)) {
					$loc = $data['lokasi'];
			echo"";
			echo"<div class='sponsorberita'>
					<h2>$data[0]</h2>
					<img class='gbrberita' src=$loc align='left'/>
					$data[3]<br/>
					<a target='_blank' href='$data[1]'><h4>$data[1]</h4></a></div>";
				}
			?>     
        </div>
    </div>
    <div class="footer">
    	<div class="snetwork"></div>
    	<div class="connect">
			<a href="http://newbieid.com/go/facebook/" target="_blank" class="facebook"></a> 
            <a href="http://newbie.com/go/twitter/" target="_blank" class="twitter"></a>
            <a href="http://newbie.com/go/googleplus/" target="_blank" class="googleplus"></a> 
		</div>
    	<div class="secti">
			<ul>
            	<li>
					<a href="contact.php">Contact</a>
				</li>
                <li>
					<a href="about.html">About</a>
				</li>
				<li>
					<a href="arf.html">Irfan Arfiandi</a>
				</li>
				<li>
					<a href="dit.html">Adithya Maulana</a>
				</li>
				<li>
					<a href="krai.html">Tonggor Sihite</a>
				</li>
                <li>
					<a href="chr.html">Dedy Christian</a>
				</li>
			</ul>
		</div>
    </div>
    <div class="bawah">
        <p class="copy">
			© Copyright © 2013.Newbie all rights reserved
		</p>
    </div>
</body>
</html>
