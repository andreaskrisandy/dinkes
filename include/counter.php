<?php
  $ip      = $_SERVER['REMOTE_ADDR'];
  $tanggal = date("Ymd");
  $waktu   = time();

  $s = mysql_query("SELECT * FROM counter WHERE ip='$ip' AND tanggal='$tanggal'");

  if(mysql_num_rows($s) == 0){
	mysql_query("INSERT INTO counter(ip, tanggal, hits, online) VALUES('$ip','$tanggal','1','$waktu')");
  } 
  else{
	mysql_query("UPDATE counter SET hits=hits+1, online='$waktu' WHERE ip='$ip' AND tanggal='$tanggal'");
  }

  $pengunjung       = mysql_num_rows(mysql_query("SELECT * FROM counter WHERE tanggal='$tanggal' GROUP BY ip"));
  $totalpengunjung  = mysql_result(mysql_query("SELECT COUNT(hits) FROM counter"), 0); 
  $hits             = mysql_fetch_assoc(mysql_query("SELECT SUM(hits) as hitstoday FROM counter WHERE tanggal='$tanggal' GROUP BY tanggal")); 
  $totalhits        = mysql_result(mysql_query("SELECT SUM(hits) FROM counter"), 0); 
  $tothitsgbr       = mysql_result(mysql_query("SELECT SUM(hits) FROM counter"), 0); 
  $bataswaktu       = time() - 300;
  $pengunjungonline = mysql_num_rows(mysql_query("SELECT * FROM counter WHERE online > '$bataswaktu'"));

  $path = "counter/";
  $ext = ".png";

  $tothitsgbr = sprintf("%06d", $tothitsgbr);
  for ( $i = 0; $i <= 9; $i++ ){
	   $tothitsgbr = str_replace($i, "<img src='$path$i$ext' alt='$i'>", $tothitsgbr);
  }

  echo "<p align=\"right\">&nbsp;$tothitsgbr </p>
		<table>
		<tr><td class='news-title'><img src=counter/online.png> Pengunjung Online </td><td class='news-title'> : $pengunjungonline </td></tr>
		<tr><td class='news-title'><img src=counter/hariini.png> Pengunjung Hari Ini </td><td class='news-title'> : $pengunjung </td></tr>
		<tr><td class='news-title'><img src=counter/total.png> Total Pengunjung </td><td class='news-title'> : $totalpengunjung </td></tr>
		<tr><td class='news-title'><img src=counter/total.png> Total Hits </td><td class='news-title'> : $totalhits </td></tr>
		</table>";
?>