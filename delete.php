<?php
include "db.php";
$iden = $_GET['nama'];
mysql_query("delete from contact where nama='$iden'");// or die("Gagal menghapus data.");
echo"<meta http-equiv='refresh'content='0;url=admin_pesan.php'>";
?>
