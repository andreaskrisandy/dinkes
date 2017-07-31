<?php
	$germas_query = mysql_query("select * from germas");
	$germas_data = mysql_fetch_array($germas_query);
	?>
	<h2>Gerakan Masyarakat Sehat</h2>
	<div style="padding-bottom:50px;">
		<center>
			<img style="max-width:100%;max-height:100%;" src="germas/<?=$germas_data[gambar]?>"/>
		</center>
	</div>
  <p>
    <?= $germas_data[deskripsi]?>
  </p>
<?php
