<?php
	$kepsek_query = mysql_query("select * from kepsek");
	$kepsek_data = mysql_fetch_array($kepsek_query);
	$beranda_query = mysql_query("select * from page where page_id = '1'");
	$beranda_data = mysql_fetch_array($beranda_query);
	echo "<h2>$beranda_data[page_title]</h2>";
	echo "<img id=\"kepsek\" src=\"images/$kepsek_data[kepsek]\" width=\"175px\" height=\"175px\" />";
	echo "$beranda_data[page_content]";
?>