<?php
	include("../../include/mysql.php");
	include("../../include/thumb.php");
	
	if (isset($_POST['add'])){
		$img		= $_FILES['guru']['tmp_name'];
		$imgType	= $_FILES['guru']['type'];
		$imgName	= $_FILES['guru']['name'];
		$random		= rand(1,99);
		$newName	= $random . $imgName;
		Guru($newName);
		mysql_query("insert into guru values ('$_POST[nip]','$_POST[nama]','$_POST[tempat]','$_POST[tanggal]','$_POST[jk]','$_POST[pendidikan]','$_POST[jurusan]','$_POST[studi]','$_POST[alamat]','$newName')");
		header("location: ../../dashboard.php?module=teacher");
	}
	
	if (isset($_POST['edit'])){
		$img		= $_FILES['guru']['tmp_name'];
		$imgType	= $_FILES['guru']['type'];
		$imgName	= $_FILES['guru']['name'];
		$random		= rand(1,99);
		$newName	= $random . $imgName;
		Guru($newName);
		$query = mysql_query("select * from guru where nip = '$_POST[nip]'");
		$data = mysql_fetch_array($query);
		unlink("../../../teacher/$data[guru_photo]");
		mysql_query("update guru set nip = '$_POST[nip]', guru_name = '$_POST[nama]', guru_tmp_lahir = '$_POST[tempat]', guru_tgl_lahir = '$_POST[tanggal]', guru_jk = '$_POST[jk]', pendidikan = '$_POST[pendidikan]',jurusan = '$_POST[jurusan]',studi = '$_POST[studi]',guru_alamat = '$_POST[alamat]', guru_photo = '$newName' where nip = '$_POST[nip]'");
		header("location: ../../dashboard.php?module=teacher");
	}
?>