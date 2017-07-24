<?php
	include("../../include/mysql.php");
	include("../../include/thumb.php");

	if (isset($_POST['add'])){
		$img		= $_FILES['galeri']['tmp_name'];
		$imgType	= $_FILES['galeri']['type'];
		$imgName	= $_FILES['galeri']['name'];
		$random		= rand(1,99);
		$newName	= $random . $imgName;
		Galeri($newName);
		mysql_query("insert into galeri values ('','$_POST[judul]','$_POST[deskripsi]','$newName','$_POST[link_galeri]')");
		header("location: ../../dashboard.php?module=galeri");
	}

	if (isset($_POST['edit'])){
		$img		= $_FILES['galeri']['tmp_name'];
		if (!empty($img)){
			$imgType	= $_FILES['galeri']['type'];
			$imgName	= $_FILES['galeri']['name'];
			$random		= rand(1,99);
			$newName	= $random . $imgName;
			Galeri($newName);
			$query = mysql_query("select * from galeri where id = '$_POST[id]'");
			$data = mysql_fetch_array($query);
			unlink("../../../galeri/$data[gambar]");
			mysql_query("update galeri set judul = '$_POST[judul]', deskripsi = '$_POST[deskripsi]', gambar = '$newName', url = '$_POST[link_galeri]' where id = '$_POST[id]'");
			header("location: ../../dashboard.php?module=galeri");
		} else {
			mysql_query("update galeri set judul = '$_POST[judul]', deskripsi = '$_POST[deskripsi]', url = '$_POST[link_galeri]' where id = '$_POST[id]'");
			header("location: ../../dashboard.php?module=galeri");
		}
	}
?>
