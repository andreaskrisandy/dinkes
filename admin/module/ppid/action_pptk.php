<?php
	include("../../include/mysql.php");
	include("../../include/thumb.php");

	if (isset($_POST['add'])){
		mysql_query("insert into pptk values ('','$_POST[nama_pptk]','$_POST[tahun_pptk]','$_POST[deskripsi_pptk]','$_POST[link_download]')");
		header("location: ../../dashboard.php?module=pptk");
	}

	if (isset($_POST['edit'])){
			mysql_query("update pptk set nama_pptk = '$_POST[nama_pptk]',tahun_pptk = '$_POST[tahun_pptk]', deskripsi_pptk = '$_POST[deskripsi_pptk]', keterangan_pptk='$_POST[link_download]' where id_pptk = '$_POST[id]'");
			header("location: ../../dashboard.php?module=pptk");
	}
?>
