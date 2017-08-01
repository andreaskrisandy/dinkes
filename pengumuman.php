<?php
if (isset($_GET['id'])){
  $query = mysql_fetch_array(mysql_query("select * from pengumuman where id_pengumuman = '$_GET[id]'"));
  echo "<h2>$query[judul_pengumuman]</h2>";
  echo "<img src=\"dashboard/$query[gambar_pengumuman]\" style=\"border: 1px dashed #999; width: 100%\" />";
  echo "<p style=\"margin: 20px 0 0 0;align=justify;color:black;\">$query[isi_pengumuman]</p>";
  echo "<br>";
}
?>
