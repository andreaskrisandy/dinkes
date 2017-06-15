<?php
    include("../../include/mysql.php");
    mysql_query("update page set page_content = '$_POST[visimisi]' where page_id = '2'");
    header("location: ../../dashboard.php?module=vision");
?>