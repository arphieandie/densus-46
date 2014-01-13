<?php
$loc=$_GET['gambar'];
$id=$_GET['id'];
				?>
                <style type="text/css">
				.gambar{
					margin-left:25%;
					margin-right:25%;
					margin-top:10%;
					width:50%;
					height:400px;
					background:rgba(0,0,0,0.8);
					position:absolute;
				}
				.bg{
					
					background: rgba(0,0,0,0.9);
					width:100%;
					height:100%;
				}
				</style>
                <div class="bg">
				<a class="lik" href="profil.php?id=<?php echo $id; ?>"><img src="images/index1.jpg" width="50px" height="50px" align="right" /></a>
                <img class="gambar" src="photo/<?php echo $loc; ?>" width="400px" height="400px"/>
                </div>
