<?php
	include("../../include/mysql.php");
	include("../../include/thumb.php");
	
	if (isset($_POST['add'])){
		$img		= $_FILES['siswa']['tmp_name'];
		$imgType	= $_FILES['siswa']['type'];
		$imgName	= $_FILES['siswa']['name'];
		$random		= rand(1,99);
		$newName	= $random . $imgName;
		Siswa($newName);
		mysql_query("insert into siswa values ('$_POST[nis]','$_POST[nama]','$_POST[tempat]','$_POST[tanggal]','$_POST[jk]','$_POST[alamat]','$newName')");
		header("location: ../../dashboard.php?module=student");
	}
	
	if (isset($_POST['edit'])){
		$img		= $_FILES['siswa']['tmp_name'];
		$imgType	= $_FILES['siswa']['type'];
		$imgName	= $_FILES['siswa']['name'];
		$random		= rand(1,99);
		$newName	= $random . $imgName;
		Siswa($newName);
		$query = mysql_query("select * from siswa where nis = '$_POST[nis]'");
		$data = mysql_fetch_array($query);
		unlink("../../../student/$data[siswa_photo]");
		mysql_query("update siswa set nis = '$_POST[nis]', siswa_name = '$_POST[nama]', siswa_tmp_lahir = '$_POST[tempat]', siswa_tgl_lahir = '$_POST[tanggal]', siswa_jk = '$_POST[jk]', siswa_alamat = '$_POST[alamat]', siswa_photo = '$newName' where nis = '$_POST[nis]'");
		header("location: ../../dashboard.php?module=student");
	}
?>