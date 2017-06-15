<?php
include("../../include/mysql.php");
        $img        = $_FILES['kepsek']['tmp_name'];
        if (empty($img)){
            mysql_query("update kepsek set profil = '$_POST[profil]' where id = '1'");
        } else {
            $imgType    = $_FILES['kepsek']['type'];
            $imgName    = $_FILES['kepsek']['name'];
            $random     = rand(1,99);
            $newName    = $random . $imgName;
            Kepsek($newName);
            $query = mysql_query("select * from kepsek");
            $data = mysql_fetch_array($query);
            unlink("../images/$data[kepsek]");
            mysql_query("update kepsek set profil = '$_POST[profil]' where id = '1'");
            mysql_query("update kepsek set kepsek = '$newName'");
        }
        header("location: ../../dashboard.php?module=kepsek");
?>