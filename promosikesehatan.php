<?php
if (isset($_GET['id'])){
  $query = mysql_fetch_array(mysql_query("select * from promosikesehatan where id_promosikesehatan = '$_GET[id]'"));
  echo "<h2>$query[judul_promosikesehatan]</h2>";
  echo "<img src=\"dashboard/$query[gambar_promosikesehatan]\" style=\"border: 1px dashed #999; width: 100%\" />";
  echo "<p style=\"margin: 20px 0 0 0;align=justify;color:black;\">$query[isi_promosikesehatan]</p>";
  echo "<br>";
}
?>
