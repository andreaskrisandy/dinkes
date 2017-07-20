<?php
	include("../../include/mysql.php");
	include("../../include/thumb.php");

	if (isset($_POST['add'])){
		mysql_query("insert into permenkes values ('','$_POST[nama_permenkes]','$_POST[tahun_permenkes]','$_POST[deskripsi_permenkes]','$_POST[link_download]')");
		header("location: ../../dashboard.php?module=permenkes");
	}

	if (isset($_POST['edit'])){
			mysql_query("update permenkes set nama_permenkes = '$_POST[nama_permenkes]',tahun_permenkes = '$_POST[tahun_permenkes]', deskripsi_permenkes = '$_POST[deskripsi_permenkes]', keterangan_permenkes='$_POST[link_download]' where id_permenkes = '$_POST[id]'");
			header("location: ../../dashboard.php?module=permenkes");
	}
?>
