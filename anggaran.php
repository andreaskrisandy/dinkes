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
<h2>Daftar Data Anggaran</h2>
<table cellpadding="0" cellspacing="0" border="0" class="display" id="Table">
	<thead>
		<tr>
			<th>No</th>
			<th>DPA</th>
			<th>Tahun</th>
			<th>Deskripsi</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
	<?php
		$no = 1;
		$query = mysql_query("select * from anggaran order by id_anggaran desc");
		while ($anggaran = mysql_fetch_array($query)) {
			?>
					<tr>
						<td style="text-align:center;"><?= $no?></td>
						<td style="text-align:center;"><?= $anggaran[nama_dpa]?></td>
						<td style="text-align:center;"><?= $anggaran[tahun_anggaran]?></td>
						<td style="text-align:center;"><?= $anggaran[deskripsi_anggaran]?></td>
						<td style="text-align:center;">
							<a style="color:blue;" href="<?= $anggaran[keterangan_anggaran] ?>">Download File</a>
						</td>
					</tr>
					<?php
			$no++;
		}
	?>
	</tbody>
</table>
