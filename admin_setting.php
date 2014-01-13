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
    	<div class="judulin"><h2>Transaksi</h2></div>
        <div class="jarak1"></div>
        <h3>
        <style type="text/css">
		.tabel{
			border:outset;
			border-color:#006;
			background:#DDD;
			color: #222;
		}
		.tabel caption{
			font-size:24px;
		}
		.tabel td{
			padding:6px;
			border: solid;
			border-color: #996;
		}
		</style>
        <table align="left" class="tabel" rules="all">
        <caption>Kode Transaksi</caption>
        <tr>
        <td width="120px">Band Member</td><td width="120px">Lagu</td><td width="120px">Harga</td><td width="120px">Nama</td><td width="120px">Email</td><td width="120px">Bank</td><td width="120px">No Rekening</td><td width="120px">No Telepon</td><td width="120px">Catatan</td><td width="120px">Date</td><td width="120px">Hapus</td>
        <?php
				include "db.php";
				$query = "SELECT * from transaksi order by date desc";
				$hasil_query = mysql_query($query);
				while ($status=mysql_fetch_row($hasil_query)) {
					echo "<tr/><td>$status[0]</td><td>$status[1]</td><td>$status[2] $</td><td>$status[3]</td><td>$status[4]</td><td>$status[5]</td><td>$status[6]</td><td>$status[7]</td><td>$status[8]</td><td>$status[9]</td><td><a href='hapusrek.php?kode=$status[6]'>Hapus</a></td><tr>";
				}
			?>
            </tr>
            </table></h3>
    </div>
</body>
</html>
