<?php
include("../../include/mysql.php");
mysql_query("update kepsek set profil = '$_POST[profil]' where id = '1'");
header("location: ../../dashboard.php?module=kepsek");
?>
