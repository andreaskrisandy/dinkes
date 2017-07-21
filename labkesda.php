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
<h2>Informasi Daftar Harga Laboratorium</h2>
<table cellpadding="0" cellspacing="0" border="0" class="display" id="Table">
	<thead>
		<tr>
			<th>No</th>
			<th>Jenis Pelayanan</th>
			<th>Tarif Pelayanan</th>
		</tr>
	</thead>
	<tbody>
	<?php
		$no = 1;
		$query = mysql_query("select * from laboratorium order by id_lab desc");
		while ($laboratorium = mysql_fetch_array($query)) {
			echo    "
					<tr>
						<td align=\"center\">$no</td>
						<td align=\"center\">$laboratorium[jenis_pelayanan]</td>
						<td align=\"center\">$laboratorium[tarif_pelayanan]</td>
					</tr>
					";
			$no++;
		}
	?>
	</tbody>
</table>
