<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Newbie</title>
<link rel="stylesheet" href="tampilan.css" type="text/css" />
<script type="text/javascript" src="drop_menu.js"></script>
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
			<a href="index.html"><img class="gbr" src="images/newbiehead.jpg" width="160px" height="80px" alt="Image" /></a>
            <div class="headerfix">
				<ul class="menu" id="menu">
            		<li>
						<a href="#" class="menulink"><!--<img src="images/jyjtyj.jpg" width="130px" height="50px" />--></a>
						<ul>	
                        	<li>
                            	<a href="login_profil.php">Profil</a>
                            </li>
							<li>
								<a href="login_setting.php">Setting</a>
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
    <div class="setting">
    	<div class="judulin"><h2>Setting</h2></div>
        <div class="jarak1"></div>
        <form method="post" name="form" class="formsetting">
        	Nama Band :<br/>
      		<input type='text' name='namaBand' /><br />
       		Basecamp :<br/>
            <input type='text' name='basecamp' /><br />
			Aliran :<br/>
      		<input type='text' name='pukul' /><br />
       		Personil :<br/>
            <input type='text' name='ddmmyyyy' /><br />
			Gambar :<br/>
            <input type='file' name='foto' class='b' /><br />
			Keterangan (Maks 20kata):<br/>
			<textarea name='simpul' cols='100' rows='3'></textarea><br />
			<input type='submit' value='Tambah' class='b' />
            <input type="reset" value="Reset" class="b"/>
        </form>
    </div>
    <div class="bawah">
        <p class="copy">
			© Copyright © 2013.Newbie all rights reserved
		</p>
    </div>
</body>
</html>
