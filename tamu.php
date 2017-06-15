<?php
	if (isset($_POST['submit'])) {
		mysql_query("insert into tamu values ('', '$_POST[nama]', '$_POST[email]', '$_POST[alamat]', '$_POST[judul]', '$_POST[pesan]')");
		header("location: ?page=buku-tamu");
	}
?>
<h2>Buku Tamu - Sampaikan kritik, saran dan komentar Anda !</h2>
<div id="contact_form">
	<form method="post" name="contact" action="?page=buku-tamu">
		<table width="100%">
			<tr><td width="100px">Nama</td><td>:</td><td><input type="text" id="nama" name="nama" class="required input_field" size="50" autofocus="autofocus" /></td></tr>
			<tr><td>Email</td><td>:</td><td><input type="text" id="email" name="email" class="validate-email required input_field" size="50" /></td></tr>
			<tr><td>Alamat</td><td>:</td><td><input type="text" name="alamat" id="alamat" class="input_field" size="50" /></td></tr>
			<tr><td>Judul Pesan</td><td>:</td><td><input type="text" name="judul" id="judul" class="input_field" size="50" /></td></tr>
			<tr><td valign="top">Pesan</td><td valign="top">:</td><td><textarea id="pesan" name="pesan" rows="0" cols="0" class="required"></textarea></td></tr>
			<tr><td colspan="2"><input type="submit" value="Kirim" id="submit" name="submit" class="submit_btn float_l" /></td></tr>
		</table>
	</form>
</div> 