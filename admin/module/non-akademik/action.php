<?php
    include("../../include/mysql.php");
    mysql_query("update non_akademik set isi = '$_POST[isi]' where id = '$_POST[id]'");
        header("location: ../../dashboard.php?module=non-akademik&id=$_POST[id]");
?>