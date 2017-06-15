<?php
	include("../../include/mysql.php");
	
	if (isset($_POST['add'])){
		mysql_query("insert into jadwal values('','$_POST[kls]','$_POST[hari]','$_POST[jam]','$_POST[kmapel]','$_POST[mapel]','$_POST[nip]')");
		header("location: ../../dashboard.php?module=jadwal");
	}
	
	if (isset($_POST['edit'])){
		mysql_query("update jadwal set kelas_id = '$_POST[kls]', hari = '$_POST[hari]', jam = '$_POST[jam]', kmapel = '$_POST[kmapel]', , mapel = '$_POST[mapel]', nip = '$_POST[nip]' where id = '$_POST[id]'");
		header("location: ../../dashboard.php?module=jadwal");
	}
?>