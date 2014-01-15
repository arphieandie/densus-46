<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Newbie</title>
<link rel="stylesheet" href="tampilan.css" type="text/css" />
<!--<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="search.js"></script>-->
<style type="text/css">
.lik{
	text-decoration: none;
}
.bandana{
	color:#222;
	width:94%;
	height:30px;
	padding:10px;
	font-family: 'Muli-Light';
	font-size:14px;
	margin-bottom:10px;
	border-radius:8px;
}
.bandana:hover{
	background:url(images/header.png);
	color:#030;
}
.gambarphoto{
	border:0;
	border-radius:8px;
	width:200px;
	height:200px;
	margin:5px;
}
.donloadlagu{
	color:#222;
	font-family: 'Muli-Light';
	font-size:14px;
	font-style:italic;
	float:left;
	width:50%;
	/*border-radius:4px;*/
	border-bottom:#9CF;
	border-bottom-style:solid;
	padding:10px;
}
.doload{
	float:right;
}
.download{
	width:200px;
	height:30px;
	float:right;
	background: url(images/header.png);
	border-radius:6px;
}
.download:hover{
	background:#9F6;
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
				<li>
					<a href="event.php?tempat=">Event</a>
				</li>
				<li class="current">
					<a href="profil.php?id=">Profil</a>
				</li>
			</ul>
		</div>
	</div>
    <div class="band">
    	<div class="daftarband">
			<div class="judulin"><h2>Band</h2></div>
            <div class="jarak"></div>
            <div class="jarak"></div>
            <?php
				include "db.php";
				$query = "SELECT username,suka from datamember";
				$hasil_query = mysql_query($query);
				$cek=true;
				while ($status=mysql_fetch_row($hasil_query)) {
					$q='SELECT id,lokasi from setting';
					$h=mysql_query($q);
					while ($data=mysql_fetch_row($h)) {
						if($data[0]==$status[0]){
							$lok=$data[1];
					echo "<a class='lik' href='?id=$status[0]'><div class='bandana'><img src='$lok' width='50px' height='50px' align='left'/>$status[0]<br/><img  src='images/LikeIcon.png' width='20px' height='20px'/> $status[1] like</div></a><hr/>";
				}}}
				$cek=false;
			?>
            
        </div>
        <div class="status">
        	<style type="text/css">
			.tampilKet{
				width:98%;
				border-radius:6px;
				padding:6px;
				color:#222;
				font-family: "Muli";
				font-size:18px;
				height:220px;
			}
			.tampilKet img{
				border-radius:6px;
				margin:8px;	
			}
			.statusKomen{
				width:98%;
				border-radius:6px;
				padding:6px;
				color:#222;
				font-size:16px;
				height:20px;
			}
			.lik{
				font-family: "Muli";
				font-size:18px;
				text-decoration: none;
			}
			</style>
        	<div class="judulin"><h2>Nama Band</h2></div>
            <div class="jarak1"></div>
            <div class="jarak"></div>
                <div id="komen">
					<?php
					include ("selip.php");
			?>
                </div>
        </div>
        <div class="lagu">
			<div class="judulin"><h2>Lagu</h2></div>
            <div class="jarak"></div>
            <div class="jarak"></div>
            <?php
			/*$member=$_SESSION["Login"];username,='".$member."'*/    
			$q1 = "SELECT namalagu,lokasi,id from lagu"; //memilih file dari database
			$result = mysql_query($q1);
			if($id==''){
				while ($data = mysql_fetch_array($result)) {
				if($peng==$data[2]){
					$q1uery = 'SELECT id,lagu,harga from price'; //memilih file dari database
					$r = mysql_query($q1uery);
					while ($d = mysql_fetch_array($r)) {
						if($d[0]==$data[2]&&$data[0]==$d[1]){
				$loc = $data['lokasi'];
				echo"<div class='donloadlagu'><img src='images/sound.jpg' width='20px' height='20px' align='left'/>$data[0]
						<form class='doload' method='post' action='transaksi.php'>
								<input type='hidden' name='id' value=$data[2] />
								<input type='hidden' name='lagu' value='$d[1]' />
								<input type='hidden' name='harga' value=$d[2] />
						<input type=\"submit\" value=\"$d[2]$ Download\" class=\"download\" />
            			</form>
						</div>";}}
						}}
				}
			else{
			while ($data = mysql_fetch_array($result)) {
				if($id==$data[2]){
					$q1uery = 'SELECT id,lagu,harga from price'; //memilih file dari database
					$r = mysql_query($q1uery);
					while ($d = mysql_fetch_array($r)) {
						if($d[0]==$data[2]&&$data[0]==$d[1]){
						$loc = $data['lokasi'];
						echo"<div class='donloadlagu'><img src='images/sound.jpg' width='20px' height='20px' align='left'/>$data[0]
								<form class='doload' method='post' action='transaksi.php'>
								<input type='hidden' name='id' value=$data[2]>
								<input type='hidden' name='lagu' value='$d[1]'>
								<input type='hidden' name='harga' value=$d[2]>
								<input type=\"submit\" value=\"$d[2]$ Download\" class=\"download\" />
								</form>
								</div>";
					}}
						}}}
			?> 
        </div>
        <div class="photo">
        	<div class="judulin"><h2>Photo</h2></div>
            <div class="jarak"></div>
            <div class="jarak"></div>
             <?php
			/*$member=$_SESSION["Login"];username,='".$member."'*/    
			$q1 = "SELECT namafoto,lokasi,id from photo"; //memilih file dari database
			$result = mysql_query($q1);
			if($id==''){
				while ($data = mysql_fetch_array($result)) {
				if($peng==$data[2]){
				$loc = $data['lokasi'];
				echo"<a href='css.php?gambar=$data[0],id=$data[2]'><img class='gambarphoto' src=$loc align='left'/></a>";
				}}
			}else{
			while ($data = mysql_fetch_array($result)) {
				if($id==$data[2]){
				$loc = $data['lokasi'];
				echo"<a href='css.php?gambar=$data[0]&id=$data[2]'><img class='gambarphoto' src=$loc align='left'/></a>";
				}}}
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
