<?php
	$kepsek_query = mysql_query("select * from kepsek");
	$kepsek_data = mysql_fetch_array($kepsek_query);
	$beranda_query = mysql_query("select * from page where page_id = '1'");
	$beranda_data = mysql_fetch_array($beranda_query);
	echo "<h2>$beranda_data[page_title]</h2>";
	//echo "<img id=\"kepsek\" src=\"images/$kepsek_data[kepsek]\" width=\"175px\" height=\"175px\" />";
	echo "$beranda_data[page_content]";
?>

<?php
//$non_akademik_query = mysql_query("select * from non_akademik");
//$non_akademik_data = mysql_fetch_array($isi_query);

$beranda_query = mysql_query("select * from page where page_id = '5'");
$beranda_data = mysql_fetch_array($beranda_query);
echo "<h2>$beranda_data[page_title]</h2>";
//echo "<img id=\"kepsek\" src=\"images/$kepsek_data[kepsek]\" width=\"175px\" height=\"175px\" />";
echo "$beranda_data[page_content]";


 ?>
 <?php
$has = mysql_query("select * from pengumuman order by tgl_pengumuman desc");
$num = mysql_num_rows($has);

if($num<1){
 echo'<center>Tidak Ada Artikel</center>';
}else{
while($data=mysql_fetch_array($has)){
 $art = substr($data['isi_pengumuman'],0,100);
  echo '
     <h2>'.$data['judul_pengumuman'].'</h2>
     <img width="330" height="280" src="download/'.$data['gambar_pengumuman'].'">
     <h4>Di publikasikan pada '.$data['tgl_pengumuman'].'</h4>
     <p>'.$art.'..</p>
        <a href="single.php?p='.$data['id_pengumuman'].'">Read More</a>
     <br><br>
  
   ';}
}
?>

 <?php
 $berita_query = mysql_query("select * from kepsek");
 $berita_data = mysql_fetch_array($berita_query);
 $beranda_query = mysql_query("select * from page where page_id = '6'");
 $beranda_data = mysql_fetch_array($beranda_query);
 echo "<h2>$beranda_data[page_title]</h2>";
 //echo "<img id=\"kepsek\" src=\"images/$kepsek_data[kepsek]\" width=\"175px\" height=\"175px\" />";
 echo "$beranda_data[page_content]";
  ?>

	<?php
  $berita_query = mysql_query("select * from kepsek");
  $berita_data = mysql_fetch_array($berita_query);
  $beranda_query = mysql_query("select * from page where page_id = '7'");
  $beranda_data = mysql_fetch_array($beranda_query);
  echo "<h2>$beranda_data[page_title]</h2>";
  //echo "<img id=\"kepsek\" src=\"images/$kepsek_data[kepsek]\" width=\"175px\" height=\"175px\" />";
  echo "$beranda_data[page_content]";
   ?>
