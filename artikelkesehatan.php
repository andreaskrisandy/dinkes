<?php
if (isset($_GET['id'])){
  $query = mysql_fetch_array(mysql_query("select * from artikelkesehatan where id_artikelkesehatan = '$_GET[id]'"));
  echo "<h2>$query[judul_artikelkesehatan]</h2>";
  echo "<img src=\"dashboard/$query[gambar_artikelkesehatan]\" style=\"border: 1px dashed #999; width: 100%\" />";
  echo "<p style=\"margin: 20px 0 0 0;align=justify;color:black;\">$query[isi_artikelkesehatan]</p>";
  echo "<br>";
}
?>
