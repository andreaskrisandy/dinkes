<script type="text/javascript" src="js/table.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$('#Table').dataTable( {
			"oLanguage": {
				"sLengthMenu": "Tampilkan _MENU_ Data Per Halaman",
				"sSearch": "Pencarian Data",
				"sZeroRecords": "Tidak Ada Data Yang Ditemukan",
				"sInfo": "Menampilkan _START_ - _END_ Dari _TOTAL_ Data",
				"sInfoEmpty": "Menampilkan 0 Dari 0 Data",
				"sInfoFiltered": "",
				"oPaginate": {
					"sPrevious": "",
					"sNext": ""
				}
			}
		} );
	} );
</script>
<h2>Informasi Data Rumah Sakit di Kota Bandung</h2>
<table cellpadding="0" cellspacing="0" border="0" class="display" id="Table">
	<thead>
		<tr>
			<th>No</th>
			<th>Rumah Sakit</th>
			<th>Kepala Rumah Sakit</th>
			<th>Alamat</th>
			<th>Telepon</th>
			<th>Pelayanan Unggulan</th>
		</tr>
	</thead>
	<tbody>
	<?php
		$no = 1;
		$query = mysql_query("select * from rumahsakit order by id_rs desc");
		while ($rumahsakit = mysql_fetch_array($query)) {
			echo    "
					<tr>
						<td align=\"center\">$no</td>
						<td align=\"center\">$rumahsakit[nama_rs]</td>
						<td align=\"center\">$rumahsakit[penganggungjawab_rs]</td>
						<td align=\"center\">$rumahsakit[alamat_rs]</td>
						<td align=\"center\">$rumahsakit[notlp_rs]</td>
						<td align=\"center\">$rumahsakit[pu_rs]</td>
					</tr>
					";
			$no++;
		}
	?>
	</tbody>
</table>
