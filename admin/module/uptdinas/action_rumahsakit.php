<?php
	include("../../include/mysql.php");

	if (isset($_POST['add'])){
		mysql_query("insert into rumahsakit values('','$_POST[nama_rs]','$_POST[penanggungjawab_rs]','$_POST[alamat_rs]','$_POST[notlp_rs]','$_POST[pu_rs]')");
		header("location: ../../dashboard.php?module=rumahsakit");
	}

	if (isset($_POST['edit'])){
		mysql_query("update rumahsakit set nama_rs = '$_POST[nama_rs]', penanggungjawab_rs = '$_POST[penanggungjawab_rs]', alamat_rs = '$_POST[alamat_rs]', notlp_rs = '$_POST[notlp_rs]',pu_rs ='$_POST[pu_rs]' where id_rs = '$_POST[id]'");
		header("location: ../../dashboard.php?module=rumahsakit");
	}
?>
