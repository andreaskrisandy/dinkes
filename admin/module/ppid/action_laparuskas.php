<?php
	include("../../include/mysql.php");
	include("../../include/thumb.php");

	if (isset($_POST['add'])){
		mysql_query("insert into laparuskas values ('','$_POST[nama_laparuskas]','$_POST[tahun_laparuskas]','$_POST[deskripsi_laparuskas]','$_POST[link_download]')");
		header("location: ../../dashboard.php?module=laparuskas");
	}

	if (isset($_POST['edit'])){
			mysql_query("update laparuskas set nama_laparuskas = '$_POST[nama_laparuskas]',tahun_laparuskas = '$_POST[tahun_laparuskas]', deskripsi_laparuskas = '$_POST[deskripsi_laparuskas]', keterangan_laparuskas='$_POST[link_download]' where id_neraca = '$_POST[id]'");
			header("location: ../../dashboard.php?module=laparuskas");
	}
?>
