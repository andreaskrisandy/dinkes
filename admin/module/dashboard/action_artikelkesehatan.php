<?php
	include("../../include/mysql.php");
	include("../../include/thumb.php");

	if (isset($_POST['add'])){
		$img		= $_FILES['artikelkesehatan']['tmp_name'];
		$imgType	= $_FILES['artikelkesehatan']['type'];
		$imgName	= $_FILES['artikelkesehatan']['name'];
		$random		= rand(1,99);
		$newName	= $random . $imgName;
		$tgl_artikelkesehatan = date('Y-m-d');
		Artikelkesehatan($newName);
		mysql_query("insert into artikelkesehatan values ('','$tgl_artikelkesehatan','$_POST[judul_artikelkesehatan]','$_POST[isi_artikelkesehatan]','$newName')");
		header("location: ../../dashboard.php?module=artikelkesehatan");
	}

	if (isset($_POST['edit'])){
		$img		= $_FILES['artikelkesehatan']['tmp_name'];
		$tgl_artikelkesehatan = date('Y-m-d');
		if (!empty($img)){
			$imgType	= $_FILES['artikelkesehatan']['type'];
			$imgName	= $_FILES['artikelkesehatan']['name'];
			$random		= rand(1,99);
			$newName	= $random . $imgName;
			Artikelkesehatan($newName);
			$query = mysql_query("select * from artikelkesehatan where id_artikelkesehatan = '$_POST[id]'");
			$data = mysql_fetch_array($query);
			unlink("../../../dashboard/$data[gambar_artikelkesehatan]");
			mysql_query("update artikelkesehatan set tgl_artikelkesehatan = '$tgl_artikelkesehatan', judul_artikelkesehatan = '$_POST[judul_artikelkesehatan]', isi_artikelkesehatan = '$_POST[isi_artikelkesehatan]', gambar_artikelkesehatan = '$newName' where id_artikelkesehatan = '$_POST[id]'");
			header("location: ../../dashboard.php?module=artikelkesehatan");
		} else {
			mysql_query("update artikelkesehatan set tgl_artikelkesehatan = '$tgl_artikelkesehatan',judul_artikelkesehatan = '$_POST[judul_artikelkesehatan]', isi_artikelkesehatan = '$_POST[isi_artikelkesehatan]' where id_artikelkesehatan = '$_POST[id]'");
			header("location: ../../dashboard.php?module=artikelkesehatan");
		}
	}
?>
