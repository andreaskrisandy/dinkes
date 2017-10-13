<!-- Pengumuman -->
<?php
	$beranda_query = mysql_query("select * from page where page_id = '5'");
	$beranda_data = mysql_fetch_array($beranda_query);
	echo "<h2>$beranda_data[page_title]</h2>";

	$per_page = 3;

	$has = mysql_query("select * from pengumuman order by id_pengumuman desc");
	$num = mysql_num_rows($has);

	$page_query = mysql_query("select COUNT(*) FROM pengumuman");
	$pages = ceil(mysql_result($page_query,0)/$per_page);

	$page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
	$start = ($page - 1) * $per_page;

	$query = mysql_query("select * FROM pengumuman LIMIT $start, $per_page");

	if($num<1){
		echo'<center>Tidak Ada Artikel</center>';
	}else{
		while($data=mysql_fetch_array($has)){
			// $art = substr($data['isi_pengumuman'],0,100);
			$tanggal = date("d-F-Y",strtotime($data['tgl_pengumuman']));
			echo '
			<h5>'.$data['judul_pengumuman'].'</h5>
			<br><br>
			<center>
			<img width="300px" height="200px" src="dashboard/'.$data['gambar_pengumuman'].'">
			</center>
			<br>
			<br>
			<p>Di publikasikan pada '.$tanggal.'</p>
			<a href=?page=pengumuman&id='.$data[id_pengumuman].'>Selengkapnya klik disini!</a>
			<br><br>
			<hr>
			<br>
			';}
		}

		if($pages >= 1 && $page <= $pages){
			for($x=1; $x<=$pages; $x++){
				echo ($x == $page) ? '<b><a href="?page='.$x.'">'.$x.'</a></b> ' : '<a href="?page='.$x.'">'.$x.'</a> ';
			}
		}
?>

	<!-- artikel kesehatan -->
	<?php
	$beranda_query = mysql_query("select * from page where page_id = '6'");
	$beranda_data = mysql_fetch_array($beranda_query);
	echo "<h2>$beranda_data[page_title]</h2>";
	//echo "<img id=\"kepsek\" src=\"images/$kepsek_data[kepsek]\" width=\"175px\" height=\"175px\" />";
	// echo "$beranda_data[page_content]";

	$has = mysql_query("select * from artikelkesehatan order by id_artikelkesehatan desc");
	$num = mysql_num_rows($has);

	if($num<1){
		echo'<center>Tidak Ada Artikel</center>';
	}else{
		while($data=mysql_fetch_array($has)){
			// $art = substr($data['isi_artikelkesehatan'],0,100);
			$tanggal = date("d-F-Y",strtotime($data['tgl_artikelkesehatan']));
			echo '
			<h5>'.$data['judul_artikelkesehatan'].'</h5>
			<br><br>
			<center>
			<img width="300px" height="200px" src="dashboard/'.$data['gambar_artikelkesehatan'].'">
			</center>
			<br>
			<br>
			<p>Di publikasikan pada '.$tanggal.'</p>
			<a href=?page=artikelkesehatan&id='.$data[id_artikelkesehatan].'>Selengkapnya klik disini!</a>
			<br><br>
			<hr>
			<br>
			';}
		}
		?>

		<!-- promosi kesehatan -->
		<?php
		$beranda_query = mysql_query("select * from page where page_id = '7'");
		$beranda_data = mysql_fetch_array($beranda_query);
		echo "<h2>$beranda_data[page_title]</h2>";

		$has = mysql_query("select * from promosikesehatan order by id_promosikesehatan desc");
		$num = mysql_num_rows($has);

		if($num<1){
			echo'<center>Tidak Ada Promosi</center>';
		}else{
			while($data=mysql_fetch_array($has)){
				$tanggal = date("d-F-Y",strtotime($data['tgl_promosikesehatan']));
				// $art = substr($data['isi_promosikesehatan'],0,100);
				echo '
				<h5>'.$data['judul_promosikesehatan'].'</h5>
				<br><br>
				<center>
				<img width="300px" height="200px" src="dashboard/'.$data['gambar_promosikesehatan'].'">
				</center>
				<br>
				<br>
				<p>Di publikasikan pada '.$tanggal.'</p>
				<a href=?page=promosikesehatan&id='.$data[id_promosikesehatan].'>Selengkapnya klik disini!</a>
				<br><br>
				<hr>
				<br>
				<br>
				';}
			}

			?>
