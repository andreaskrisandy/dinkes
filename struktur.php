<?php
	$beranda_query = mysql_query("select * from struktur");
	$beranda_data = mysql_fetch_array($beranda_query);
	?>
	<h2><?=$beranda_data[struktur_title]?></h2>
	<div style="width:600px;height:600px;">
		<center>
			<img style="max-width:100%;max-height:100%;"id="struktur" src="struktur/<?=$beranda_data[struktur]?>"/>
		</center>
	</div>
<?php
?>
