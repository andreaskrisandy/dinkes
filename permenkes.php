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
<h2>Daftar Data Permenkes</h2>
<table cellpadding="0" cellspacing="0" border="0" class="display" id="Table">
	<thead>
		<tr>
			<th>No</th>
			<th>Permenkes</th>
			<th>Tahun</th>
			<th>Deskripsi</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
	<?php
		$no = 1;
		$query = mysql_query("select * from permenkes order by id_permenkes desc");
		while ($permenkes = mysql_fetch_array($query)) {
			echo    "
					<tr>
						<td>$no</td>
						<td>$permenkes[nama_permenkes]</td>
						<td>$permenkes[tahun_permenkes]</td>
						<td>$permenkes[deskripsi_permenkes]</td>
						<td>$permenkes[keterangan_permenkes]</td>
					</tr>
					";
			$no++;
		}
	?>
	</tbody>
</table>
