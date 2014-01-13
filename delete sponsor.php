<html>
<head>
<title>Menghapus Data</title>
</head>
<body>
<?php
include "db.php";
$nama = $_GET['namasponsor'];
mysql_query("delete from sponsor where namasponsor='$nama'");// or die("Gagal menghapus data.");
echo"<meta http-equiv='refresh'content='0;url=admin_profil.php'>";
?>
</body>
</html>
