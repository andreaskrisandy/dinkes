<?php
	include("../../include/mysql.php");
	mysql_query("update page set page_content = '$_POST[berita]' where page_id = '1'");
	header("location: ../../dashboard.php?module=main");
?>
