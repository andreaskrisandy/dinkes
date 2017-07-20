<?php
	include("../../include/mysql.php");
	include("../../include/thumb.php");

	if (isset($_POST['add'])){
		mysql_query("insert into anggaran values ('','$_POST[nama_dpa]','$_POST[tahun_anggaran]','$_POST[deskripsi_anggaran]','$_POST[link_download]')");
		header("location: ../../dashboard.php?module=anggaran");
	}

	if (isset($_POST['edit'])){
			mysql_query("update anggaran set nama_dpa = '$_POST[nama_dpa]',tahun_anggaran = '$_POST[tahun_anggaran]', deskripsi_anggaran = '$_POST[deskripsi_anggaran]', keterangan_anggaran='$_POST[link_download]' where id_anggaran = '$_POST[id]'");
			header("location: ../../dashboard.php?module=anggaran");
	}
?>
