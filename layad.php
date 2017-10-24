<?php
	$layad_query = mysql_query("select * from layad");
	$layad_data = mysql_fetch_array($layad_query);
	?>
	<h2>Layanan Layad Rawat</h2>
	<div style="padding-bottom:50px;">
		<center>
			<img style="max-width:100%;max-height:100%;" src="layad/<?=$layad_data[gambar]?>"/>
		</center>
	</div>
  <p>
    <?= $layad_data[deskripsi]?>
  </p>
<?php
