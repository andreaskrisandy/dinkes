<?php
	include("../../include/mysql.php");
	
	if (isset($_POST['add'])){
		$passwd = md5($_POST['password']);
		mysql_query("insert into admin values('','$_POST[name]','$_POST[username]','$passwd','$passwd')");
		header("location: ../../dashboard.php?module=admin");
	}
	
	if (isset($_POST['edit'])){
		if ($_POST['password'] == 'passwd'){
			mysql_query("update admin set admin_name = '$_POST[name]' where username = '$_POST[user]'");
			header("location: ../../dashboard.php?module=admin");
		} else {
			$passwd = md5($_POST["password"]);
			mysql_query("update admin set admin_name = '$_POST[name]', password = '$passwd' where username = '$_POST[user]'");
			header("location: ../../dashboard.php?module=admin");
		}
	}
?>