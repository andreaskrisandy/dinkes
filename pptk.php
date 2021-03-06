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
<h2>Daftar Data PPTK</h2>
<table cellpadding="0" cellspacing="0" border="0" class="display" id="Table">
	<thead>
		<tr>
			<th>No</th>
			<th>PPTK</th>
			<th>Tahun</th>
			<th>Deskripsi</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
	<?php
		$no = 1;
		$query = mysql_query("select * from pptk order by id_pptk desc");
		while ($pptk = mysql_fetch_array($query)) {
			?>
					<tr>
						<td style="text-align:center;"><?= $no ?></td>
						<td style="text-align:center;"><?=$pptk[nama_pptk] ?></td>
						<td style="text-align:center;"><?=$pptk[tahun_pptk]?></td>
						<td style="text-align:center;"><?=$pptk[deskripsi_pptk] ?></td>
						<td style="text-align:center;">
							<a style="color:blue;" href="<?= $pptk[keterangan_pptk] ?>">Download File</a>
						</td>
					</tr>
					<?php
			$no++;
		}
	?>
	</tbody>
</table>
