<?php
	include("../../include/mysql.php");
	include("../../include/thumb.php");

	if (isset($_POST['add'])){
		$img		= $_FILES['yankesmob']['tmp_name'];
		$imgType	= $_FILES['yankesmob']['type'];
		$imgName	= $_FILES['yankesmob']['name'];
		$random		= rand(1,99);
		$newName	= $random . $imgName;
		UploadYankesmob($newName);
		mysql_query("insert into yankesmob values ('','$_POST[deskripsi]','$newName')");
		header("location: ../../dashboard.php?module=yankesmob");
	}

	if (isset($_POST['edit'])){
		$img		= $_FILES['yankesmob']['tmp_name'];
		if (!empty($img)){
			$imgType	= $_FILES['yankesmob']['type'];
			$imgName	= $_FILES['yankesmob']['name'];
			$random		= rand(1,99);
			$newName	= $random . $imgName;
			UploadYankesmob($newName);
			$query = mysql_query("select * from yankesmob where id = '$_POST[id]'");
			$data = mysql_fetch_array($query);
			unlink("../../../yankesmob/$data[gambar]");
			mysql_query("update yankesmob set deskripsi = '$_POST[deskripsi]', gambar = '$newName' where id = '$_POST[id]'");
			header("location: ../../dashboard.php?module=yankesmob");
		} else {
			mysql_query("update yankesmob set deskripsi = '$_POST[deskripsi]' where id = '$_POST[id]'");
			header("location: ../../dashboard.php?module=yankesmob");
		}
	}
?>
