<?php
	$beranda_query = mysql_query("select * from page where page_id = '2'");
	$beranda_data = mysql_fetch_array($beranda_query);
	echo "<h2>$beranda_data[page_title]</h2>";
	echo "$beranda_data[page_content]";
?>