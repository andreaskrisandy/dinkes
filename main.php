<!-- Pengumuman -->
<?php
	$beranda_query = mysql_query("select * from page where page_id = '5'");
	$beranda_data = mysql_fetch_array($beranda_query);
	echo "<h2>$beranda_data[page_title]</h2>";

	$has = mysql_query("select * from pengumuman order by tgl_pengumuman desc");
	$num = mysql_num_rows($has);

	if($num<1){
		echo'<center>Tidak Ada Artikel</center>';
	}else{
		while($data=mysql_fetch_array($has)){
			$art = substr($data['isi_pengumuman'],0,100);
			echo '
			<h5>'.$data['judul_pengumuman'].'</h5>
			<center>
			<img width="300px" height="200px" src="dashboard/'.$data['gambar_pengumuman'].'">
			</center>
			<br>
			<p>Di publikasikan pada '.$data['tgl_pengumuman'].'</p>
			<p>'.$art.'..</p>
			<a href=?page=pengumuman&id='.$data[id_pengumuman].'>Selengkapnya klik disini!</a>
			<br><br>
			<hr>
			';}
		}
?>

	<!-- artikel kesehatan -->
	<?php
	$beranda_query = mysql_query("select * from page where page_id = '6'");
	$beranda_data = mysql_fetch_array($beranda_query);
	echo "<h2>$beranda_data[page_title]</h2>";
	//echo "<img id=\"kepsek\" src=\"images/$kepsek_data[kepsek]\" width=\"175px\" height=\"175px\" />";
	// echo "$beranda_data[page_content]";

	$has = mysql_query("select * from artikelkesehatan order by tgl_artikelkesehatan desc");
	$num = mysql_num_rows($has);

	if($num<1){
		echo'<center>Tidak Ada Artikel</center>';
	}else{
		while($data=mysql_fetch_array($has)){
			$art = substr($data['isi_artikelkesehatan'],0,100);
			echo '
			<h5>'.$data['judul_artikelkesehatan'].'</h5>
			<center>
			<img width="300px" height="200px" src="dashboard/'.$data['gambar_artikelkesehatan'].'">
			</center>
			<br>
			<p>Di publikasikan pada '.$data['tgl_artikelkesehatan'].'</p>
			<p>'.$art.'..</p>
			<a href=?page=artikelkesehatan&id='.$data[id_artikelkesehatan].'>Selengkapnya klik disini!</a>
			<br><br>
			<hr>
			';}
		}
		?>

		<!-- promosi kesehatan -->
		<?php
		$beranda_query = mysql_query("select * from page where page_id = '7'");
		$beranda_data = mysql_fetch_array($beranda_query);
		echo "<h2>$beranda_data[page_title]</h2>";

		$has = mysql_query("select * from promosikesehatan order by tgl_promosikesehatan desc");
		$num = mysql_num_rows($has);

		if($num<1){
			echo'<center>Tidak Ada Promosi</center>';
		}else{
			while($data=mysql_fetch_array($has)){
				$art = substr($data['isi_promosikesehatan'],0,100);
				echo '
				<h5>'.$data['judul_promosikesehatan'].'</h5>
				<center>
				<img width="300px" height="200px" src="dashboard/'.$data['gambar_promosikesehatan'].'">
				</center>
				<br>
				<p>Di publikasikan pada '.$data['tgl_promosikesehatan'].'</p>
				<p>'.$art.'..</p>
				<a href=?page=promosikesehatan&id='.$data[id_promosikesehatan].'>Selengkapnya klik disini!</a>
				<br><br>
				<hr>
				<br>
				<br>
				';}
			}

			?>
