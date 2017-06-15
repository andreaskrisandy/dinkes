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
<h2>Informasi Data Siswa Madrasah Aliah Negeri (MAN) 2 Kota Bengkulu</h2>
<?php
	if (isset($_GET['nis'])) {
		echo "<div class=\"unwrap\">";
		$query = mysql_query("select * from siswa where nis = '$_GET[nis]'");
		$data = mysql_fetch_array($query);
		echo "<img id=\"kepsek\" src=\"student/$data[siswa_photo]\" width=\"125px\" height=\"125px\" />";
		echo "<table>
				<tr><td>Nama<td><td valign=\"top\">: <b>$data[siswa_name]</b></td></tr>
				<tr><td>nis<td><td>: $data[nis]</td></tr>
				<tr><td>Tempat Lahir<td><td>: $data[siswa_tmp_lahir]</td></tr>
				<tr><td>Tanggal Lahir<td><td>: $data[siswa_tgl_lahir]</td></tr>
				<tr><td>Jenis Kelamin<td><td>: $data[siswa_jk]</td></tr>
				<tr><td>Alamat<td><td>: $data[siswa_alamat]</td></tr>
			 </table>";
		echo "</div>";
		echo "<div class=\"detailer\"></div>";
	}
?>
<table cellpadding="0" cellspacing="0" border="0" class="display" id="Table">
	<thead>
		<tr>
			<th>NIS</th>
			<th>Nama Siswa</th>
			<th>Tempat Lahir</th>
			<th>Tanggal Lahir</th>
			<th>Selengkapnya</th>
		</tr>
	</thead>
	<tbody>
	<?php
		$query = mysql_query("select * from siswa order by nis desc");
		while ($siswa = mysql_fetch_array($query)) {
			echo    "
					<tr>
						<td>$siswa[nis]</td>
						<td>$siswa[siswa_name]</td>
						<td>$siswa[siswa_tmp_lahir]</td>
						<td>$siswa[siswa_tgl_lahir]</td>
						<td><a href=\"?page=siswa&nis=$siswa[nis]\">Selengkapnya</a></td>
					</tr>
					";
		}
	?>
	</tbody>
	<tfoot>
		<tr>
			<th>NIS</th>
			<th>Nama Siswa</th>
			<th>Tempat Lahir</th>
			<th>Tanggal Lahir</th>
			<th>Selengkapnya</th>
		</tr>
	</tfoot>
</table>