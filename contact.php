<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
	include ('db.php');
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Newbie</title>
<link rel="stylesheet" href="tampilan.css" type="text/css" />
<style type="text/css">
.formsetting{
	background: rgba(0,0,0,0.8);
	margin:20px;
	padding:20px;
	color:#9FF;
	font-family:Verdana, Geneva, sans-serif;
	font-size:16px;
	font-style:italic;
	border-radius:6px;
}
.formsetting input{
	border-radius:6px;
	width:300px;
	border:solid;
	border-color:#000;
	font-size:20px;
	color:#0C0;
	margin:5px;
	padding:4px;
}
.b{
	background:url(images/header_red.jpg) center;
	border-radius:4px;
}
.b:hover{
	background:url(images/website-header-red.jpg) center;
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
			<form method="post" action="Proses_Komentar.php" class="formsetting">
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
				<input type="submit" value="Send message" class="b">

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
