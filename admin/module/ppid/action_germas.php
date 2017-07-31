<?php
	include("../../include/mysql.php");
	include("../../include/thumb.php");

	if (isset($_POST['add'])){
		$img		= $_FILES['germas']['tmp_name'];
		$imgType	= $_FILES['germas']['type'];
		$imgName	= $_FILES['germas']['name'];
		$random		= rand(1,99);
		$newName	= $random . $imgName;
		UploadGermas($newName);
		mysql_query("insert into germas values ('','$_POST[deskripsi]','$newName')");
		header("location: ../../dashboard.php?module=germas");
	}

	if (isset($_POST['edit'])){
		$img		= $_FILES['germas']['tmp_name'];
		if (!empty($img)){
			$imgType	= $_FILES['germas']['type'];
			$imgName	= $_FILES['germas']['name'];
			$random		= rand(1,99);
			$newName	= $random . $imgName;
			UploadGermas($newName);
			$query = mysql_query("select * from germas where id = '$_POST[id]'");
			$data = mysql_fetch_array($query);
			unlink("../../../germas/$data[gambar]");
			mysql_query("update germas set deskripsi = '$_POST[deskripsi]', gambar = '$newName' where id = '$_POST[id]'");
			header("location: ../../dashboard.php?module=germas");
		} else {
			mysql_query("update germas set deskripsi = '$_POST[deskripsi]' where id = '$_POST[id]'");
			header("location: ../../dashboard.php?module=germas");
		}
	}
?>
