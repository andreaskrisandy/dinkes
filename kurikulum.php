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
<h2>Informasi Data Puskesmas di Kota Bandung</h2>
<table cellpadding="0" cellspacing="0" border="0" class="display" id="Table">
	<thead>
		<tr>
			<th>No</th>
			<th>Puskesmas</th>
			<th>Kepala Puskesmas</th>
			<th>Alamat</th>
			<th>Telepon</th>
			<th>Pelayanan Unggulan</th>
		</tr>
	</thead>
	<tbody>
	<?php
		$no = 1;
		$query = mysql_query("select * from kurikulum order by id_kurikulum desc");
		while ($kurikulum = mysql_fetch_array($query)) {
			echo    "
					<tr>
						<td>$no</td>
						<td>$kurikulum[ks]</td>
						<td>$kurikulum[mapel]</td>
						<td>$kurikulum[standar]</td>
						<td>$kurikulum[kompetensi]</td>
						<td>$kurikulum[tambahan]</td>
					</tr>
					";
			$no++;
		}
	?>
	</tbody>
</table>
