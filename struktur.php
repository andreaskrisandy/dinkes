<?php
	$beranda_query = mysql_query("select * from struktur");
	$beranda_data = mysql_fetch_array($beranda_query);
	echo "<h2>$beranda_data[struktur_title]</h2>";
	echo "<center><img id=\"struktur\" src=\"images/$beranda_data[struktur]\" /></center>";
?>