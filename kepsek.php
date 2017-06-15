<?php
    $query = mysql_query("select * from kepsek where id = '1'");
    $data = mysql_fetch_array($query);
    echo "<h2>$data[title]</h2>";
    echo "<img id=\"kepsek\" src=\"images/$data[kepsek]\" width=\"175px\" height=\"175px\" />";
    echo "$data[profil]";
?>