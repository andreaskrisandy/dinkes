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
<h2>Daftar Data Daftar Aset</h2>
<table cellpadding="0" cellspacing="0" border="0" class="display" id="Table">
	<thead>
		<tr>
			<th>No</th>
			<th>Daftar Aset</th>
			<th>Tahun</th>
			<th>Deskripsi</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
	<?php
		$no = 1;
		$query = mysql_query("select * from daftaraset order by id_daftaraset desc");
		while ($daftaraset = mysql_fetch_array($query)) {
			?>
					<tr>
						<td style="text-align:center;"><?= $no ?></td>
						<td style="text-align:center;"><?=$daftaraset[nama_daftaraset] ?></td>
						<td style="text-align:center;"><?=$daftaraset[tahun_daftaraset]?></td>
						<td style="text-align:center;"><?=$daftaraset[deskripsi_daftaraset] ?></td>
						<td style="text-align:center;">
							<a target="_blank" style="color:blue;" href="<?= $daftaraset[keterangan_daftaraset] ?>">Download File</a>
						</td>
					</tr>
					<?php
			$no++;
		}
	?>
	</tbody>
</table>
