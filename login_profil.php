<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
	include ('db.php');
	session_start();
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Newbie</title>
<link rel="stylesheet" href="tampilan.css" type="text/css" />
<script type="text/javascript" src="drop_menu.js"></script>
<style type="text/css">
.gambarphoto{
	border:0;
	border-radius:8px;
	width:120px;
	height:120px;
	margin:5px;
}
</style>
</head>
<body>
	<div class="header">
    	<div class="section">
			<a href="#"><img class="gbr" src="images/newbiehead.jpg" width="160px" height="80px" alt="Image" /></a>
            <div class="headerfix">
				<ul class="menu" id="menu">
            		<li>
						<a href="#" class="menulink"><?php $username=$_SESSION["Login"]; echo $_SESSION["Login"]; ?></a>
						<ul>	
                        	<li>
                            	<a href="login_profil.php">Profil</a>
                            </li>
							<li>
								<a href="login_setting.php">Setting</a>
							</li>
                            <li>
								<a href="login_trans.php">Transaksi</a>
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
			<style type="text/css">
			.tampilKet{
				background:rgba(0,0,0,0.8);
				width:98%;
				border-radius:6px;
				padding:6px;
				color:#0CF;
				font-size:18px;
				height:400px;
			}
			.tampilKet img{
				border-radius:6px;
				margin:8px;	
			}
			</style>
            <div class="judulin"><h2>Profil</h2></div>
            <div class="jarak"></div>
            <div class="jarak"></div>
             <?php
			/*$member=$_SESSION["Login"];username,='".$member."'*/    
			$q2 = 'SELECT id,usermane,basecamp,aliran,lokasi,ket,filename from setting'; //memilih file dari database
			$result = mysql_query($q2);
			while ($data = mysql_fetch_array($result)) {
				if($data[0]==$username){
				$loc = $data['lokasi'];
				echo"<div class='tampilKet'><img src='$loc' width='200px' height='200px' align='top'/><br/>
						$data[1]<br/>$data[2]<br/>$data[3]<br/>$data[5]<br/>
						</div>";
						break;
						}
				}//echo "HALLOkdsfwkfh dhfuwhedufhweghwirehgiwerhgiwherighw righw reoigh wrehgwerhgoerhguwerhguwherogiuh";
			?>    
        </div>
        <div class="status">
        	<div class="judulin"><h2>Status</h2></div>
            <div class="jarak"></div>
            <?php
		include "db.php";
		$cek=false;
			$q1 = "SELECT * from status"; //memilih file dari database
				$result = mysql_query($q1);
				while ($data = mysql_fetch_array($result)) {
					if($username==$data[0]){
						$cek=true;
		?>
        	<form method="post" action="status edit.php" >
            <input type="hidden" name="id" value="<?php echo $username; ?>" />
            	<input type="hidden" name="no" value="<?php echo $data[3]; ?>" />
            	<textarea class="letak" rows="3" cols="110" name="komen" onBlur="javascript:if(this.value==''){this.value=this.defaultValue;}" onFocus="javascript:if(this.value==this.defaultValue){this.value='';}"><?php echo $data[1] ?></textarea>
                <input type="submit" value="Kirim" />
            </form>
            <?php
					break;}}if(!$cek){
			?>
            <form method="post" action="status member.php" >
            <input type="hidden" name="id" value="<?php echo $username; ?>" />
            	<textarea class="letak" rows="3" cols="110" name="komen" onBlur="javascript:if(this.value==''){this.value=this.defaultValue;}" onFocus="javascript:if(this.value==this.defaultValue){this.value='';}">Status / Kegiatan Yang Akan Datang</textarea>
                <input type="submit" value="Kirim" />
            </form>
            <?php
					}
			?>
        </div>
        <div class="lagu">
			<div class="judulin"><h2>Lagu</h2></div>
            <div class="jarak"></div>
            <div class="jarak"></div>
            <form method="post" action="uploadlagu.php" class="formdaftar" enctype="multipart/form-data">
            	<input type="file" name="lagu" class="letak" class="a" value="upload lagu"/><br />
                <input type="submit" value="kirim" /><input type="reset" value="reset" />
            </form>
            <style type="text/css">
			.tampilLagu{
				background:rgba(0,0,0,0.8);
				width:400px;
				border-radius:6px;
				padding:6px;
				color:#0CF;
				height:20px;
			}
			</style>
            <?php
			/*$member=$_SESSION["Login"];username,='".$member."'*/    
			$q1 = 'SELECT namalagu,lokasi,id from lagu'; //memilih file dari database
			$result = mysql_query($q1);
			while ($data = mysql_fetch_array($result)) {
				if($data[2]==$username){
				$loc = $data['lokasi'];
				echo"<form action='price.php' method='post'><div class='tampilLagu'><img src='images/sound.jpg' width='20px' height='20px' align='left'/>$data[0]
						<input type='hidden' name='id' value='$data[2]'/>
						<input type='hidden' name='lagu' value='$data[0]'/>
						<select name='harga'>
							<option>1</option>
							<option>2</option>
							<option>3</option>
						</select>
						<input type='submit' value='ok'/>
						</div></form><br/>";
				}}
			?>    
        </div>
        <div class="photo">
        	<div class="judulin"><h2>Photo</h2></div>
            <div class="jarak"></div>
            <div class="jarak"></div>
            <form method="post" action="upload.php" class="formdaftar" enctype="multipart/form-data">
            	<input type="file" name="foto" class="letak" class="a" value="upload lagu" /><br />
                <input type="submit" value="kirim" /><input type="reset" value="reset" />
            </form>
            <?php
			/*$member=$_SESSION["Login"];username,='".$member."'*/    
			$q1 = "SELECT namafoto,lokasi,id from photo"; //memilih file dari database
			$result = mysql_query($q1);
			while ($data = mysql_fetch_array($result)) {
				if($data[2]==$username){
				$loc = $data['lokasi'];
				echo"<img class='gambarphoto' src=$loc align='left'/>";
				}}
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
