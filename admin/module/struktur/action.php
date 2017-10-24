<?php
	include("../../include/mysql.php");
	include("../../include/thumb.php");

	if (isset($_POST['add'])){
		$img		= $_FILES['struktur']['tmp_name'];
		$imgType	= $_FILES['struktur']['type'];
		$imgName	= $_FILES['struktur']['name'];
		$random		= rand(1,99);
		$newName	= $random . $imgName;
		UploadStruktur($newName);
		mysql_query("insert into struktur values ('','$_POST[judul]','$newName')");
		header("location: ../../dashboard.php?module=struktur");
	}

	if (isset($_POST['edit'])){
		$img		= $_FILES['struktur']['tmp_name'];
		if (!empty($img)){
			$imgType	= $_FILES['struktur']['type'];
			$imgName	= $_FILES['struktur']['name'];
			$random		= rand(1,99);
			$newName	= $random . $imgName;
			UploadStruktur($newName);
			$query = mysql_query("select * from struktur where id = '$_POST[id]'");
			$data = mysql_fetch_array($query);
			unlink("../../../struktur/$data[struktur]");
			mysql_query("update struktur set struktur_title = '$_POST[judul]', struktur = '$newName' where id = '$_POST[id]'");
			header("location: ../../dashboard.php?module=struktur");
		} else {
			mysql_query("update struktur set struktur_title = '$_POST[judul]' where id = '$_POST[id]'");
			header("location: ../../dashboard.php?module=struktur");
		}
	}
?>
