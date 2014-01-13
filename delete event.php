<?php
include "db.php";
$nama = $_GET['nama'];
mysql_query("delete from event where nama='$nama'");// or die("Gagal menghapus data.");
echo"<meta http-equiv='refresh'content='0;url=admin_profil.php'>";
?>
