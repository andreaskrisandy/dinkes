<?php
	include("../../include/mysql.php");
	include("../../include/thumb.php");

	if (isset($_POST['add'])){
		mysql_query("insert into layanan_informasi_publik values ('','$_POST[nama]','$_POST[deskripsi]','$_POST[link_download]')");
		header("location: ../../dashboard.php?module=layanan_informasi_publik");
	}

	if (isset($_POST['edit'])){
			mysql_query("update layanan_informasi_publik set nama = '$_POST[nama]', deskripsi = '$_POST[deskripsi]', url='$_POST[link_download]' where id = '$_POST[id]'");
			header("location: ../../dashboard.php?module=layanan_informasi_publik");
	}
?>
