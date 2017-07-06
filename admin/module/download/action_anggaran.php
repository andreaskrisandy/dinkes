<?php
	include("../../include/mysql.php");
	include("../../include/thumb.php");

	if (isset($_POST['add'])){
		$img		= $_FILES['anggaran']['tmp_name'];
		$imgType	= $_FILES['anggaran']['type'];
		$imgName	= $_FILES['anggaran']['name'];
		$random		= rand(1,99);
		$newName	= $random . $imgName;
		Anggaran($newName);
		mysql_query("insert into anggaran values ('','$_POST[nama_dpa]','$_POST[tahun_anggaran]','$_POST[deskripsi_anggaran]','$newName')");
		header("location: ../../dashboard.php?module=b_anggaran");
	}

	if (isset($_POST['edit'])){
		$img		= $_FILES['anggaran']['tmp_name'];
		if (!empty($img)){
			$imgType	= $_FILES['anggaran']['type'];
			$imgName	= $_FILES['anggaran']['name'];
			$random		= rand(1,99);
			$newName	= $random . $imgName;
			Anggaran($newName);
			$query = mysql_query("select * from anggaran where id_anggaran = '$_POST[id]'");
			$data = mysql_fetch_array($query);
			unlink("../../../download/$data[keterangan_anggaran]");
			mysql_query("update anggaran set nama_dpa = '$_POST[nama_dpa]', tahun_anggaran = '$_POST[tahun_anggaran]', deskripsi_anggaran = '$_POST[deskripsi_anggaran]', keterangan_anggaran = '$newName' where id_anggaran = '$_POST[id]'");
			header("location: ../../dashboard.php?module=anggaran");
		} else {
			mysql_query("update anggaran set nama_dpa = '$_POST[nama_dpa]',tahun_anggaran = '$_POST[tahun_anggaran]', deskripsi_anggaran = '$_POST[deskripsi_anggaran]' where id_anggaran = '$_POST[id]'");
			header("location: ../../dashboard.php?module=anggaran");
		}
	}
?>
