<?php
	session_start();
	include("db.php");
	
	$user = $_POST['Username'];
	$pass = $_POST['Password'];
	
	$username=md5($user);
	$password=md5($pass);
	
	if($username=="21232f297a57a5a743894a0e4a801fc3")
		if($password=="0638502d387d0c85e052211359b5a544")
			echo '<script>alert("Login Admin");window.location.href="admin_profil.php"</script>';
	
	$query = "SELECT * FROM datamember WHERE username='".$user."' AND password='".$password."' ";
	$hasil_query = mysql_query($query);
	
	if(mysql_num_rows($hasil_query)>0){
		$_SESSION["Login"]=$user;
		echo '<script>window.location.href="login_profil.php"</script>';
	}
	else{
		echo '<script>alert("Login Gagal");window.location.href="index.php"</script>';
	}
?>
