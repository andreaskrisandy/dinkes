<?php
    if (isset($_GET['id'])){
        $query = mysql_fetch_array(mysql_query("select * from galeri where id = '$_GET[id]'"));
        echo "<h2><a href=\"?page=galeri\">Galeri</a> - $query[judul]</h2>";
        echo "<img src=\"galeri/$query[gambar]\" style=\"border: 1px dashed #999; width: 100%\" />";
        echo "<p style=\"margin: 20px 0 0 0;align=justify;color:black;\">$query[deskripsi]</p>";
    } else {
    	echo "<h2>Galeri Dinas Kesehatan Kota Bandung</h2>";
        $query = mysql_query("select * from galeri order by id desc");
        while ($galeri = mysql_fetch_array($query)){
            echo "<a href=\"?page=galeri&id=$galeri[id]\" title=\"$galeri[judul]\"><img src=\"galeri/$galeri[gambar]\" style=\"margin: 0 20px 25px 0; float: left; width: 30%; height: auto\" /></a>";
        }
    }
?>
