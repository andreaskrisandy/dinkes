<?php
    switch($_GET['hal']){
        default:
            $query = mysql_query("select * from non_akademik where id='1'");
        break;
        case "pengurus-osis":
            $query = mysql_query("select * from non_akademik where id='1'");
        break;
        case "program-kerja-osis":
            $query = mysql_query("select * from non_akademik where id='2'");
        break;
        case "ekstrakurikuler":
            $query = mysql_query("select * from non_akademik where id='3'");
        break;
    }
	$data = mysql_fetch_array($query);
	echo "<h2>$data[judul]</h2>";
	echo "$data[isi]";
?>