<?php
	include("../../include/mysql.php");
	
	if (isset($_POST['add'])){
		mysql_query("insert into kelas values('','$_POST[kls]','$_POST[siswa]','$_POST[siswi]','$_POST[nip]')");
		header("location: ../../dashboard.php?module=kelas");
	}
	
	if (isset($_POST['edit'])){
		mysql_query("update kelas set kelas_name = '$_POST[kls]', siswa = '$_POST[siswa]', siswi = '$_POST[siswi]', nip = '$_POST[nip]' where kelas_id = '$_POST[id]'");
		header("location: ../../dashboard.php?module=kelas");
	}
?>