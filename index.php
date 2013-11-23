<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
	include ('db.php');
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Newbie</title>
<link rel="stylesheet" href="tampilan.css" type="text/css" />
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="easySlider1.7.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$("#slider").easySlider({
			auto: true,
			continuous: true
		});
	});
</script>
</head>
<body>
	<div class="header">
    	<div class="section">
			<a href="index.php"><img class="gbr" src="images/newbielogo copy.jpg" width="160px" height="80px" alt="Image" /></a>
			<ul>
				<li class="current">
					<a href="index.php">Home</a>
				</li>
				<li>
					<a href="event.php">Event</a>
				</li>
				<li>
					<a href="profil.php">Profil</a>
				</li>
			</ul>
		</div>
	</div>
    <div class="utama">
    	<div id="slider">
			<ul>
  		        <li><img src="images/background1.jpg" width="1325px" height="600px"/></li>
				<li><img src="images/musik_8.jpg" width="1325px" height="600px" /></li>
                <li><img src="images/Fotolia_20031467_S.jpg" width="1325px" height="600px"/></li>
                <li><img src="images/microphone-background-theme-desktop-2792.jpg" width="1325px" height="600px"/></li>
				<li><img src="images/forum-alte-musik104~_v-image512_-6a0b0d9618fb94fd9ee05a84a1099a13ec9d3321.jpg" width="1325px" height="600px"/></li>
			</ul>
        </div>
    </div>
    <div class="login">
    	<div class="pagar">
    		<div class="signin">
    			<div class="judulin"><h2>Sign In</h2></div>
                <div class="jarak"></div>
					<form method="post" action="Proses_Login.php" class="formdaftar">
                    Username :<br/>
                    <input type="text" name="Username" /><br />
                    Password :<br/>
                    <input type="password" name="Password" /><br />
                    <input type="submit" value="Login" />
                    </form>
	        </div>
        </div>
        <div class="pagarkanan">
    		<div class="signup">
    			<div class="judulin"><h2>Sign Up</h2></div>
                <div class="jarak"></div>
                <form name="form" class="formdaftar" method="post" action="Proses_Register.php">
                	Username :<br/>
               		<input type="text" name="username" /><br />
               		Password :<br/>
                    <input type="password" name="password" /><br />
               		Retype Password :<br/>
                    <input type="password" name="repass" /><br />
               		<input type="submit" value="Mendaftar" />
        		</form>
	        </div>
        </div>
    </div>
    <div class="tampil">
    	<div class="garistengah">
    		<div class="tamevent">
    			<div class="titel"><h2>Event</h2></div>
                <!--<img src="images/indiefest.jpg" width="200px" height="200px" align="left" />
                <p class="tulisan">Nama Event : LA Indie Fest</p>
                <p class="tulisan">Tempat : Taman KArnaval Ancol</p>
                <p class="tulisan">Hari : Minggu, 16 Desember 2013</p>
                <p class="tulisan">Pukul : 08.00 WIB - 22.00 WIB</p>
                <form><input type="button" value="More" class="more" /></form>-->
	        </div>
        </div>
        <div class="bagkanan">
    		<div class="daftband">
    			<div class="titel"><h2>Indie</h2></div>
	        </div>
        </div>
    </div>
    <div class="footer">
    	<div class="snetwork"></div>
    	<div class="connect">
			<a href="http://newbieid.com/go/facebook/" target="_blank" class="facebook"></a> 
            <a href="http://newbieid.com/go/twitter/" target="_blank" class="twitter"></a>
            <a href="http://newbieid.com/go/googleplus/" target="_blank" class="googleplus"></a> 
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
