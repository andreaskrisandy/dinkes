<?php
	include("../../include/mysql.php");
	include("../../include/thumb.php");
	
	if (isset($_POST['add'])){
		$img		= $_FILES['pengumuman']['tmp_name'];
		$imgType	= $_FILES['pengumuman']['type'];
		$imgName	= $_FILES['pengumuman']['name'];
		$random		= rand(1,99);
		$newName	= $random . $imgName;
		$tgl_pengumuman = date('Y-m-d'); 
		Pengumuman($newName);
		mysql_query("insert into pengumuman values ('','$tgl_pengumuman','$_POST[judul_pengumuman]','$_POST[isi_pengumuman]','$newName')");
		header("location: ../../dashboard.php?module=pengumuman");
	}
	
	if (isset($_POST['edit'])){
		$img		= $_FILES['pengumuman']['tmp_name'];
		if (!empty($img)){
			$imgType	= $_FILES['pengumuman']['type'];
			$imgName	= $_FILES['pengumuman']['name'];
			$random		= rand(1,99);
			$newName	= $random . $imgName;
			$tgl_pengumuman = date('Y-m-d');
			Pengumuman($newName);
			$query = mysql_query("select * from pengumuman where id_pengumuman = '$_POST[id]'");
			$data = mysql_fetch_array($query);
			unlink("../../../dashboard/$data[gambar_pengumuman]");
			mysql_query("update pengumuman set tgl_pengumuman = 'tgl_pengumuman', judul_pengumuman = '$_POST[judul_pengumuman]', isi_pengumuman = '$_POST[isi_pengumuman]', gambar_pengumuman = '$newName' where id_pengumuman = '$_POST[id]'");
			header("location: ../../dashboard.php?module=pengumuman");
		} else {
			mysql_query("update pengumuman set tgl_pengumuman = 'tgl_pengumuman',judul_pengumuman = '$_POST[judul_pengumuman]', isi_pengumuman = '$_POST[isi_pengumuman]' where id_pengumuman = '$_POST[id]'");
			header("location: ../../dashboard.php?module=pengumuman");
		}
	}
?>