<?php
	include("../../include/mysql.php");
	include("../../include/thumb.php");

	if (isset($_POST['add'])){
		mysql_query("insert into profildinas values ('','$_POST[nama_profildinas]','$_POST[deskripsi_profildinas]','$_POST[link_download]')");
		header("location: ../../dashboard.php?module=profildinas");
	}

	if (isset($_POST['edit'])){
			mysql_query("update profildinas set nama_profildinas = '$_POST[nama_profildinas]', deskripsi_profildinas = '$_POST[deskripsi_profildinas]', keterangan_profildinas='$_POST[link_download]' where id_profildinas = '$_POST[id]'");
			header("location: ../../dashboard.php?module=profildinas");
		}
?>
