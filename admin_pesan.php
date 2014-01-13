<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
			<a href="#"><img class="gbr" src="images/newbiehead.jpg" width="160px" height="80px" alt="Image" /></a>
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
    <div class="setting">
    	<div class="judulin"><h2>Pesan</h2></div>
        <div class="jarak1"></div>
        <div id="komen">
			<?php
				mysql_connect("localhost","root","");
				mysql_select_db("newbie");
				$query = "SELECT * FROM contact ORDER BY Date DESC";
				$hasil_query = mysql_query($query);
		
				while ($data= mysql_fetch_row($hasil_query)) {
					echo "<div class='tampilkomen'><h3 class='nama'>$data[4] - $data[0] / <a class='mail'>$data[1]</a> / $data[2]</h3><h5 class='komentar'>$data[3]</h5><a href='delete.php?nama=$data[0]'>[Delete]</a></div>";
				}
            ?>
        </div>
    </div>
</body>
</html>
