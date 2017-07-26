<?php
	$yankesmob_query = mysql_query("select * from yankesmob");
	$yankesmob_data = mysql_fetch_array($yankesmob_query);
	?>
	<h2>Pelayanan Kesehatan Mobilitas</h2>
	<div style="padding-bottom:50px;">
		<center>
			<img style="max-width:100%;max-height:100%;" src="yankesmob/<?=$yankesmob_data[gambar]?>"/>
		</center>
	</div>
  <p>
    <?= $yankesmob_data[deskripsi]?>
  </p>
<?php
