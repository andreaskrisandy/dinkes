<?php
	include("../../include/mysql.php");
	
	if (isset($_POST['add'])){
		mysql_query("insert into kurikulum values('','$_POST[ks]','$_POST[mapel]','$_POST[standar]','$_POST[kompetensi]')");
		header("location: ../../dashboard.php?module=kurikulum");
	}
	
	if (isset($_POST['edit'])){
		mysql_query("update kurikulum set ks = '$_POST[ks]', mapel = '$_POST[mapel]', standar = '$_POST[standar]', kompetensi = '$_POST[kompetensi]' where id_kurikulum = '$_POST[id]'");
		header("location: ../../dashboard.php?module=kurikulum");
	}
?>