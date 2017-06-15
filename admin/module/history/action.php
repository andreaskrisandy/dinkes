<?php
	include("../../include/mysql.php");
	mysql_query("update page set page_content = '$_POST[sejarah]' where page_id = '3'");
	header("location: ../../dashboard.php?module=history");
?>