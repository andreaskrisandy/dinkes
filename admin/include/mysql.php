<?php
		$db_server	= "localhost";
	$db_username	= "root";
	$db_password	= "";
	$db_database	= "man";
	mysql_connect($db_server,$db_username,$db_password) or die("Server Connection Error");
	mysql_select_db($db_database) or die("Database Connection Error");
?>