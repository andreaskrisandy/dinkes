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
<h2>Informasi Kurikulum Madrasah Aliah Negeri (MAN) 2 Kota Bengkulu</h2>
<table cellpadding="0" cellspacing="0" border="0" class="display" id="Table">
	<thead>
		<tr>
			<th>No</th>
			<th>Kelas/Semester</th>
			<th>Mata Pelajaran</th>
			<th>Standar Kompetensi</th>
			<th>Kompetensi Dasar</th>
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
					</tr>
					";
			$no++;
		}
	?>
	</tbody>
	<tfoot>
		<tr>
			<th>No</th>
			<th>Kelas/Semester</th>
			<th>Mata Pelajaran</th>
			<th>Standar Kompetensi</th>
			<th>Kompetensi Dasar</th>
		</tr>
	</tfoot>
</table>