<?php
	include("../../include/mysql.php");
	include("../../include/thumb.php");
	
	if (isset($_POST['add'])){
		$img		= $_FILES['permenkes']['tmp_name'];
		$imgType	= $_FILES['permenkes']['type'];
		$imgName	= $_FILES['permenkes']['name'];
		$random		= rand(1,99);
		$newName	= $imgName . $imgType;
		Galeri($newName);
		mysql_query("insert into permenkes values ('','$_POST[nama_permenkes]','$_POST[tahun_permenkes]','$_POST[deskripsi_permenkes]','$newName')");
		header("location: ../../dashboard.php?module=b_permenkes");
	}
	
	if (isset($_POST['edit'])){
		$img		= $_FILES['permenkes']['tmp_name'];
		if (!empty($img)){
			$imgType	= $_FILES['permenkes']['type'];
			$imgName	= $_FILES['permenkes']['name'];
			$random		= rand(1,99);
			$newName	= $imgName . $imgType;
			Galeri($newName);
			$query = mysql_query("select * from permenkes where id = '$_POST[id_permenkes]'");
			$data = mysql_fetch_array($query);
			unlink("../../../download/$data[keterangan_permenkes]");
			mysql_query("update permenkes set nama_permenkes = '$_POST[nama_permenkes]', tahun_permenkes = '$_POST[tahun_permenkes]', deskripsi_permenkes = '$_POST[deskripsi_permenkes]', keterangan_permenkes = '$newName' where id = '$_POST[id_permenkes]'");
			header("location: ../../dashboard.php?module=b_permenkes");
		} else {
			mysql_query("update permenkes set nama_permenkes = '$_POST[nama_permenkes]',tahun_permenkes = '$_POST[tahun_permenkes]' deskripsi_permenkes = '$_POST[deskripsi_permenkes]' where id = '$_POST[id_permenkes]'");
			header("location: ../../dashboard.php?module=b_permenkes");
		}
	}
?>