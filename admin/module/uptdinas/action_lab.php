<?php
	include("../../include/mysql.php");

	if (isset($_POST['add'])){
		mysql_query("insert into laboratorium values('','$_POST[jenis_pelayanan]','$_POST[tarif_pelayanan]')");
		header("location: ../../dashboard.php?module=laboratorium");
	}

	if (isset($_POST['edit'])){
		mysql_query("update laboratorium set jenis_pelayanan = '$_POST[jenis_pelayanan]'
			, tarif_pelayanan = '$_POST[tarif_pelayanan]' where id_lab = '$_POST[id]'");
		header("location: ../../dashboard.php?module=laboratorium");
	}
?>
