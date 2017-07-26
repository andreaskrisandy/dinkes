<?php
	function Kepsek($fupload_name){
		$vdir_upload = "../images/";
		$vfile_upload = $vdir_upload . $fupload_name;
		move_uploaded_file($_FILES["kepsek"]["tmp_name"], $vfile_upload);
		$im_src = imagecreatefromjpeg($vfile_upload);
		$src_width = imageSX($im_src);
		$src_height = imageSY($im_src);
		$dst_width = 175;
		$dst_height = ($dst_width/$src_width)*$src_height;
		$im = imagecreatetruecolor($dst_width,$dst_height);
		imagecopyresampled($im, $im_src, 0, 0, 0, 0, $dst_width, $dst_height, $src_width, $src_height);
		imagejpeg($im,$vdir_upload . $fupload_name);
		imagedestroy($im_src);
		imagedestroy($im);
	}

	function Guru($fupload_name){
		$vdir_upload = "../../../teacher/";
		$vfile_upload = $vdir_upload . $fupload_name;
		move_uploaded_file($_FILES["guru"]["tmp_name"], $vfile_upload);
		$im_src = imagecreatefromjpeg($vfile_upload);
		$src_width = imageSX($im_src);
		$src_height = imageSY($im_src);
		$dst_width = 185;
		$dst_height = ($dst_width/$src_width)*$src_height;
		$im = imagecreatetruecolor($dst_width,$dst_height);
		imagecopyresampled($im, $im_src, 0, 0, 0, 0, $dst_width, $dst_height, $src_width, $src_height);
		imagejpeg($im,$vdir_upload . $fupload_name);
		imagedestroy($im_src);
		imagedestroy($im);
	}

	function Siswa($fupload_name){
		$vdir_upload = "../../../student/";
		$vfile_upload = $vdir_upload . $fupload_name;
		move_uploaded_file($_FILES["siswa"]["tmp_name"], $vfile_upload);
		$im_src = imagecreatefromjpeg($vfile_upload);
		$src_width = imageSX($im_src);
		$src_height = imageSY($im_src);
		$dst_width = 120;
		$dst_height = ($dst_width/$src_width)*$src_height;
		$im = imagecreatetruecolor($dst_width,$dst_height);
		imagecopyresampled($im, $im_src, 0, 0, 0, 0, $dst_width, $dst_height, $src_width, $src_height);
		imagejpeg($im,$vdir_upload . $fupload_name);
		imagedestroy($im_src);
		imagedestroy($im);
	}

	function Galeri($fupload_name){
		$vdir_upload = "../../../galeri/";
		$vfile_upload = $vdir_upload . $fupload_name;
		move_uploaded_file($_FILES["galeri"]["tmp_name"], $vfile_upload);
		$im_src = imagecreatefromjpeg($vfile_upload);
		$src_width = imageSX($im_src);
		$src_height = imageSY($im_src);
		$dst_width = imageSX($im_src);
		$dst_height = ($dst_width/$src_width)*$src_height;
		$im = imagecreatetruecolor($dst_width,$dst_height);
		imagecopyresampled($im, $im_src, 0, 0, 0, 0, $dst_width, $dst_height, $src_width, $src_height);
		imagejpeg($im,$vdir_upload . $fupload_name);
		imagedestroy($im_src);
		imagedestroy($im);
	}

	function UploadStruktur($fupload_name){
		$vdir_upload = "../../../struktur/";
		$vfile_upload = $vdir_upload . $fupload_name;
		move_uploaded_file($_FILES["struktur"]["tmp_name"], $vfile_upload);
		$im_src = imagecreatefromjpeg($vfile_upload);
		$src_width = imageSX($im_src);
		$src_height = imageSY($im_src);
		$dst_width = imageSX($im_src);
		$dst_height = ($dst_width/$src_width)*$src_height;
		$im = imagecreatetruecolor($dst_width,$dst_height);
		imagecopyresampled($im, $im_src, 0, 0, 0, 0, $dst_width, $dst_height, $src_width, $src_height);
		imagejpeg($im,$vdir_upload . $fupload_name);
		imagedestroy($im_src);
		imagedestroy($im);
	}

	function UploadYankesmob($fupload_name){
		$vdir_upload = "../../../yankesmob/";
		$vfile_upload = $vdir_upload . $fupload_name;
		move_uploaded_file($_FILES["yankesmob"]["tmp_name"], $vfile_upload);
		$im_src = imagecreatefromjpeg($vfile_upload);
		$src_width = imageSX($im_src);
		$src_height = imageSY($im_src);
		$dst_width = imageSX($im_src);
		$dst_height = ($dst_width/$src_width)*$src_height;
		$im = imagecreatetruecolor($dst_width,$dst_height);
		imagecopyresampled($im, $im_src, 0, 0, 0, 0, $dst_width, $dst_height, $src_width, $src_height);
		imagejpeg($im,$vdir_upload . $fupload_name);
		imagedestroy($im_src);
		imagedestroy($im);
	}

	function Download($fupload_name){
		$vdir_upload = "../../../download/";
		$vfile_upload = $vdir_upload . $fupload_name;
		move_uploaded_file($_FILES["permenkes"]["tmp_name"], $vfile_upload);
	}

	function Profildinas($fupload_name){
		$vdir_upload = "../../../download/";
		$vfile_upload = $vdir_upload . $fupload_name;
		move_uploaded_file($_FILES["profildinas"]["tmp_name"], $vfile_upload);
	}

	function Anggaran($fupload_name){
		$vdir_upload = "../../../download/";
		$vfile_upload = $vdir_upload . $fupload_name;
		move_uploaded_file($_FILES["anggaran"]["tmp_name"], $vfile_upload);
	}

	function Pengumuman($fupload_name){
		$vdir_upload = "../../../dashboard/";
		$vfile_upload = $vdir_upload . $fupload_name;
		move_uploaded_file($_FILES["pengumuman"]["tmp_name"], $vfile_upload);
	}

	function Artikelkesehatan($fupload_name){
		$vdir_upload = "../../../dashboard/";
		$vfile_upload = $vdir_upload . $fupload_name;
		move_uploaded_file($_FILES["artikelkesehatan"]["tmp_name"], $vfile_upload);
	}

	function Promosikesehatan($fupload_name){
		$vdir_upload = "../../../dashboard/";
		$vfile_upload = $vdir_upload . $fupload_name;
		move_uploaded_file($_FILES["promosikesehatan"]["tmp_name"], $vfile_upload);
	}
?>
