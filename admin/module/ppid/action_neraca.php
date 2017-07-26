<?php
	include("../../include/mysql.php");
	include("../../include/thumb.php");

	if (isset($_POST['add'])){
		mysql_query("insert into neraca values ('','$_POST[nama_neraca]','$_POST[tahun_neraca]','$_POST[deskripsi_neraca]','$_POST[link_download]')");
		header("location: ../../dashboard.php?module=neraca");
	}

	if (isset($_POST['edit'])){
			mysql_query("update neraca set nama_neraca = '$_POST[nama_neraca]',tahun_neraca = '$_POST[tahun_neraca]', deskripsi_neraca = '$_POST[deskripsi_neraca]', keterangan_neraca='$_POST[link_download]' where id_neraca = '$_POST[id]'");
			header("location: ../../dashboard.php?module=neraca");
	}
?>
