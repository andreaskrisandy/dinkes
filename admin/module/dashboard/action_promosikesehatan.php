<?php
	include("../../include/mysql.php");
	include("../../include/thumb.php");
	
	if (isset($_POST['add'])){
		$img		= $_FILES['promosikesehatan']['tmp_name'];
		$imgType	= $_FILES['promosikesehatan']['type'];
		$imgName	= $_FILES['promosikesehatan']['name'];
		$random		= rand(1,99);
		$newName	= $random . $imgName;
		$tgl_promosikesehatan = date('d:m:y'); 
		Promosikesehatan($newName);
		mysql_query("insert into promosikesehatan values ('','$tgl_promosikesehatan','$_POST[judul_promosikesehatan]','$_POST[isi_promosikesehatan]','$newName')");
		header("location: ../../dashboard.php?module=promosikesehatan");
	}
	
	if (isset($_POST['edit'])){
		$img		= $_FILES['promosikesehatan']['tmp_name'];
		if (!empty($img)){
			$imgType	= $_FILES['promosikesehatan']['type'];
			$imgName	= $_FILES['promosikesehatan']['name'];
			$random		= rand(1,99);
			$newName	= $random . $imgName;
			$tgl_promosikesehatan = date('d:m:y');
			Promosikesehatan($newName);
			$query = mysql_query("select * from promosikesehatan where id = '$_POST[id_promosikesehatan]'");
			$data = mysql_fetch_array($query);
			unlink("../../../dashboard/$data[gambar_promosikesehatan]");
			mysql_query("update promosikesehatan set tgl_promosikesehatan = 'tgl_promosikesehatan', judul_promosikesehatan = '$_POST[judul_promosikesehatan]', isi_promosikesehatan = '$_POST[isi_promosikesehatan]', gambar_promosikesehatan = '$newName' where id = '$_POST[id_promosikesehatan]'");
			header("location: ../../dashboard.php?module=promosikesehatan");
		} else {
			mysql_query("update promosikesehatan set tgl_promosikesehatan = 'tgl_promosikesehatan',judul_promosikesehatan = '$_POST[judul_promosikesehatan]', isi_promosikesehatan = '$_POST[isi_promosikesehatan]' where id = '$_POST[id_promosikesehatan]'");
			header("location: ../../dashboard.php?module=promosikesehatan");
		}
	}
?>