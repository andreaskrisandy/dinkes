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
<h2>Informasi Data Guru Madrasah Aliah Negeri (MAN) 2 Kota Bengkulu</h2>
<?php
	if (isset($_GET['nip'])) {
		echo "<div class=\"unwrap\">";
		$query = mysql_query("select * from guru where nip = '$_GET[nip]'");
		$data = mysql_fetch_array($query);
		echo "<img id=\"kepsek\" src=\"teacher/$data[guru_photo]\" width=\"185px\" height=\"185px\" />";
		echo "<table>
				<tr><td>Nama<td><td valign=\"top\">: <b>$data[guru_name]</b></td></tr>
				<tr><td>NIP<td><td>: $data[nip]</td></tr>
				<tr><td>Tempat Lahir<td><td>: $data[guru_tmp_lahir]</td></tr>
				<tr><td>Tanggal Lahir<td><td>: $data[guru_tgl_lahir]</td></tr>
				<tr><td>Jenis Kelamin<td><td>: $data[guru_jk]</td></tr>
				<tr><td>Pendidikan<td><td>: $data[pendidikan]</td></tr>
				<tr><td>Jurusan<td><td>: $data[jurusan]</td></tr>
				<tr><td>Program Studi<td><td>: $data[studi]</td></tr>
				<tr><td>Alamat<td><td>: $data[guru_alamat]</td></tr>
			 </table>";
		echo "</div>";
		echo "<div class=\"detailer\"></div>";
	}
?>
<table cellpadding="0" cellspacing="0" border="0" class="display" id="Table">
	<thead>
		<tr>
			<th>NIP</th>
			<th>Nama Guru</th>
			<th>Tempat Lahir</th>
			<th>Tanggal Lahir</th>
			<th>Selengkapnya</th>
		</tr>
	</thead>
	<tbody>
	<?php
		$query = mysql_query("select * from guru order by nip desc");
		while ($guru = mysql_fetch_array($query)) {
			echo    "
					<tr>
						<td>$guru[nip]</td>
						<td>$guru[guru_name]</td>
						<td>$guru[guru_tmp_lahir]</td>
						<td>$guru[guru_tgl_lahir]</td>
						<td><a href=\"?page=guru&nip=$guru[nip]\">Selengkapnya</a></td>
					</tr>
					";
		}
	?>
	</tbody>
	<tfoot>
		<tr>
			<th>NIP</th>
			<th>Nama Guru</th>
			<th>Tempat Lahir</th>
			<th>Tanggal Lahir</th>
			<th>Selengkapnya</th>
		</tr>
	</tfoot>
</table>