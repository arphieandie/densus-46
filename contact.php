<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
	include ('db.php');
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Newbie</title>
<link rel="stylesheet" href="tampilan.css" type="text/css" />
</head>
<body>
	<div class="header">
    	<div class="section">
			<a href="index.php"><img class="gbr" src="images/newbielogo copy.jpg" width="160px" height="80px" alt="Image" /></a>
			<ul>
				<li>
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
    <div class="garis">
    	<h1>CONTACT</h1>
    </div>
    <div class="contents">
		<div class="contact">
			<form method="post" action="Proses_Komentar.php">
				<label>Your Name:</label>
				<input type="text" name="Nama"/>
				<br />
				<label>Email Address:</label>
				<input type="text" name="Email"/>
				<br />
				<label>Subject:</label>
				<input type="text" name="Subjek"/>
				<br />
				<label class="msg">Concern:</label>
				<textarea name="Komen"></textarea>
				<input type="submit" value="Send message" class="btn">

			</form>
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