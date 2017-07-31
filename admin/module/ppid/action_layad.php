<?php
	include("../../include/mysql.php");
	include("../../include/thumb.php");

	if (isset($_POST['add'])){
		$img		= $_FILES['layad']['tmp_name'];
		$imgType	= $_FILES['layad']['type'];
		$imgName	= $_FILES['layad']['name'];
		$random		= rand(1,99);
		$newName	= $random . $imgName;
		UploadLayad($newName);
		mysql_query("insert into layad values ('','$_POST[deskripsi]','$newName')");
		header("location: ../../dashboard.php?module=layad");
	}

	if (isset($_POST['edit'])){
		$img		= $_FILES['layad']['tmp_name'];
		if (!empty($img)){
			$imgType	= $_FILES['layad']['type'];
			$imgName	= $_FILES['layad']['name'];
			$random		= rand(1,99);
			$newName	= $random . $imgName;
			UploadLayad($newName);
			$query = mysql_query("select * from layad where id = '$_POST[id]'");
			$data = mysql_fetch_array($query);
			unlink("../../../layad/$data[gambar]");
			mysql_query("update layad set deskripsi = '$_POST[deskripsi]', gambar = '$newName' where id = '$_POST[id]'");
			header("location: ../../dashboard.php?module=layad");
		} else {
			mysql_query("update layad set deskripsi = '$_POST[deskripsi]' where id = '$_POST[id]'");
			header("location: ../../dashboard.php?module=layad");
		}
	}
?>
