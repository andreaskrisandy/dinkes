<?php
	include("../../include/mysql.php");
	include("../../include/thumb.php");

	if (isset($_POST['add'])){
		mysql_query("insert into laprealisasi values ('','$_POST[nama_laprealisasi]','$_POST[tahun_laprealisasi]','$_POST[deskripsi_laprealisasi]','$_POST[link_download]')");
		header("location: ../../dashboard.php?module=laprealisasi");
	}

	if (isset($_POST['edit'])){
			mysql_query("update laprealisasi set nama_laprealisasi = '$_POST[nama_laprealisasi]',tahun_laprealisasi = '$_POST[tahun_laprealisasi]', deskripsi_laprealisasi = '$_POST[deskripsi_laprealisasi]', keterangan_laprealisasi='$_POST[link_download]' where id_laprealisasi = '$_POST[id]'");
			header("location: ../../dashboard.php?module=laprealisasi");
	}
?>
