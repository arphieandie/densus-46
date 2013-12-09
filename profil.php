<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Newbie</title>
<link rel="stylesheet" href="tampilan.css" type="text/css" />
<style type="text/css">
.bandana{
	background:rgba(0,0,0,0.8);
	color:#0FF;
	width:94%;
	height:30px;
	padding:10px;
	font-family:Verdana, Geneva, sans-serif;
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
	color:#3FF;
	font-family:Verdana, Geneva, sans-serif;
	font-size:14px;
	font-style:italic;
	float:left;
	width:50%;
	background:rgba(0,0,0,0.8);
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
	background:#3F3;
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
					<a href="event.php">Event</a>
				</li>
				<li class="current">
					<a href="profil.php">Profil</a>
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
				$query = "SELECT * FROM datamember";
				$hasil_query = mysql_query($query);
		
				while ($status=mysql_fetch_row($hasil_query)) {
					echo "<a onclick=''><div class='bandana'><img src='images/sound.jpg' width='30px' height='30px' align='left'/>$status[0]</div></a>";
				}
			?>
            
        </div>
        <div class="status">
        	<div class="judulin"><h2>Nama Band</h2></div>
            <div class="jarak1"></div>
                <!--<div id="komen">
					<?php
                        /*mysql_connect("localhost","root","");
                        mysql_select_db("newbie");
                        $query = "SELECT * FROM status ORDER BY Date DESC";
                        $hasil_query = mysql_query($query);
                
                        while ($status=mysql_fetch_row($hasil_query)) {
                            echo "<div class='tampilkomen'><h3 class='nama'>$status[1] - $status[0]</h3></div>";
                        }*/
                    ?>
                </div>-->
        </div>
        <div class="lagu">
			<div class="judulin"><h2>Lagu</h2></div>
            <div class="jarak"></div>
            <div class="jarak"></div>
            <?php
			/*$member=$_SESSION["Login"];username,='".$member."'*/    
			$q1 = "SELECT namalagu,lokasi from lagu"; //memilih file dari database
			$result = mysql_query($q1);
			while ($data = mysql_fetch_array($result)) {
				$loc = $data['lokasi'];
				echo"<div class='donloadlagu'><img src='images/sound.jpg' width='20px' height='20px' align='left'/>$data[0]
						<form class='doload'>
						<input type=\"button\" value=\"Download\" class=\"download\" onclick=\"window.location.href='transaksi.php'\" />
            			</form>
						</div>";
				}
			?> 
        </div>
        <div class="photo">
        	<div class="judulin"><h2>Photo</h2></div>
            <div class="jarak"></div>
            <div class="jarak"></div>
             <?php
			/*$member=$_SESSION["Login"];username,='".$member."'*/    
			$q1 = "SELECT namafoto,lokasi from photo"; //memilih file dari database
			$result = mysql_query($q1);
			while ($data = mysql_fetch_array($result)) {
				$loc = $data['lokasi'];
				echo"<img class='gambarphoto' src=$loc align='left'/>";
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
