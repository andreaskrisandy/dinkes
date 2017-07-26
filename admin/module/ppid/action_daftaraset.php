<?php
	include("../../include/mysql.php");
	include("../../include/thumb.php");

	if (isset($_POST['add'])){
		mysql_query("insert into daftaraset values ('','$_POST[nama_daftaraset]','$_POST[tahun_daftaraset]','$_POST[deskripsi_daftaraset]','$_POST[link_download]')");
		header("location: ../../dashboard.php?module=daftaraset");
	}

	if (isset($_POST['edit'])){
			mysql_query("update daftaraset set nama_daftaraset = '$_POST[nama_daftaraset]',tahun_daftaraset = '$_POST[tahun_daftaraset]', deskripsi_daftaraset = '$_POST[deskripsi_daftaraset]', keterangan_daftaraset='$_POST[link_download]' where id_daftaraset = '$_POST[id]'");
			header("location: ../../dashboard.php?module=daftaraset");
	}
?>
