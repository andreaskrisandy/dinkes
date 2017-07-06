<?php
	include("../../include/mysql.php");
	include("../../include/thumb.php");

	if (isset($_POST['add'])){
		$img		= $_FILES['profildinas']['tmp_name'];
		$imgType	= $_FILES['profildinas']['type'];
		$imgName	= $_FILES['profildinas']['name'];
		$random		= rand(1,99);
		$newName	= $random . $imgName;
		Profildinas($newName);
		mysql_query("insert into profildinas values ('','$_POST[nama_profildinas]','$_POST[deskripsi_profildinas]','$newName')");
		header("location: ../../dashboard.php?module=b_profildinas");
	}

	if (isset($_POST['edit'])){
		$img		= $_FILES['profildinas']['tmp_name'];
		if (!empty($img)){
			$imgType	= $_FILES['profildinas']['type'];
			$imgName	= $_FILES['profildinas']['name'];
			$random		= rand(1,99);
			$newName	= $random . $imgName;
			Profildinas($newName);
			$query = mysql_query("select * from profildinas where id_profildinas = '$_POST[id]'");
			$data = mysql_fetch_array($query);
			unlink("../../../download/$data[keterangan_profildinas]");
			mysql_query("update profildinas set nama_profildinas = '$_POST[nama_profildinas]', deskripsi_profildinas = '$_POST[deskripsi_profildinas]', keterangan_profildinas = '$newName' where id_profildinas = '$_POST[id]'");
			header("location: ../../dashboard.php?module=profildinas");
		} else {
			mysql_query("update profildinas set nama_profildinas = '$_POST[nama_profildinas]', deskripsi_profildinas = '$_POST[deskripsi_profildinas]' where id_profildinas = '$_POST[id]'");
			header("location: ../../dashboard.php?module=profildinas");
		}
	}
?>
