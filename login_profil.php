<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
	include ('db.php');
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Newbie</title>
<link rel="stylesheet" href="tampilan.css" type="text/css" />
<script type="text/javascript" src="drop_menu.js"></script>
</head>
<body>
	<div class="header">
    	<div class="section">
			<a href="#"><img class="gbr" src="images/newbielogo copy.jpg" width="160px" height="80px" alt="Image" /></a>
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
    <div class="band">
    	<div class="daftarband">
			<div class="judulin"><h2>Profil</h2></div>
            
        </div>
        <div class="status">
        	<div class="judulin"><h2>Status</h2></div>
        	<form method="post" action="status member.php" >
            	<textarea class="letak" rows="3" cols="110" name="komen" onBlur="javascript:if(this.value==''){this.value=this.defaultValue;}" onFocus="javascript:if(this.value==this.defaultValue){this.value='';}">Status / Kegiatan Yang Akan Datang</textarea> 
                <input type="submit" value="Kirim" />
            </form>
        </div>
        <div class="lagu">
			<div class="judulin"><h2>Lagu</h2></div>
            
        </div>
        <div class="photo">
        	<div class="judulin"><h2>Photo</h2></div>
            <div class="jarak"></div>
            <form method="post" action="upload.php" enctype="multipart/form-data">
            	<input type="text" name="foto" class="letak" value="upload lagu"/><br />
                <input type="submit" value="kirim" /><input type="reset" value="reset" />
            </form>
            <?php
				$query = "SELECT * FROM photo ORDER BY Date DESC";
				$hasil_query = mysql_query($query);
		
				while ($data = mysql_fetch_object($hasil_query)) {
					echo $data -> foto;
				}
			?>
        </div>
    </div>
    <div class="bawah">
        <p class="copy">
			© Copyright © 2013.Newbie all rights reserved
		</p>
    </div>
</body>
</html>