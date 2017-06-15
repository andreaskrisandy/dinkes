<?php
	switch($_GET['mode']){
		default:
			?>
				<div class="full_w">
				<div class="h_title"><b>Manajemen Data Siswa</b></div>
				<button type="submit" name="submit" class="ok1" onclick="window.location='?module=student&mode=add'">Tambah</button>
			<?php
			echo "<table class=\"admin\" border=\"0\" cellpadding=\"5px\" cellspacing=\"1px\"><thead>
				  <tr bgcolor=\"#ffffff\"><th align=\"center\">No</th><th align=\"center\">Nama siswa</th><th align=\"center\">Tempat Lahir</th><th align=\"center\">Tanggal Lahir</th><th align=\"center\">Jenis Kelamin</th><th align=\"center\">Alamat</th><th align=\"center\">Pengaturan</th></tr></thead>";
			$query = mysql_query("select * from siswa");
			$no = 1;
			while ($data = mysql_fetch_array($query)){
				echo "<tbody><tr bgcolor=\"#ffffff\">";
					echo "<td align=\"center\">$no</td>";
					echo "<td>$data[siswa_name]</td>";
					echo "<td>$data[siswa_tmp_lahir]</td>";
					echo "<td>$data[siswa_tgl_lahir]</td>";
					echo "<td>$data[siswa_jk]</td>";
					echo "<td>$data[siswa_alamat]</td>";
					echo "<td align=\"center\"><a title=\"Edit\" class=\"table-icon edit\" href=\"?module=student&mode=edit&nis=$data[nis]\"></a>&nbsp;&nbsp;&nbsp;<a title=\"Hapus\" class=\"table-icon delete\"href=\"?module=student&mode=delete&nis=$data[nis]\"></a></td>";
				echo "</tr></tbody>";
				$no++;
			}
			echo "</table>";
			echo "</div>";
		break;
		case "edit":
			$query = mysql_query("select * from siswa where nis = '$_GET[nis]'");
			$data = mysql_fetch_array($query);
			?>
				<div class="full_w">
				<div class="h_title"><b>Manajemen Data Siswa</b></div>
					<form action="module/student/action.php" method="post" enctype="multipart/form-data">
						<input type="hidden" name="nis" value="<?php echo $_GET["nis"]; ?>" />
						<table class="admin" cellspacing="5px">
							<tr>
								<td><label>Nama Siswa</label></td>
								<td><input type="text" name="nama" size="25" value="<?php echo $data["siswa_name"]; ?>" /></td>
							</tr>
							<tr>
								<td><label>Nomor Induk Siswa</label></td>
								<td><input type="text" name="nis" size="25" value="<?php echo $data["nis"]; ?>" /></td>
							</tr>
							<tr>
								<td><label>Tempat Lahir</label></td>
								<td><input type="text" name="tempat" size="25" value="<?php echo $data["siswa_tmp_lahir"]; ?>" /></td>
							</tr>
							<tr>
								<td><label>Tanggal Lahir</label></td>
								<td><input type="text" name="tanggal" size="25" value="<?php echo $data["siswa_tgl_lahir"]; ?>" /> &nbsp; &nbsp;(dd-MM-yyyy)</td>
							</tr>
							<tr>
								<td><label>Jenis Kelamin</label></td>
								<td>
                                    <select name="jk">
                                        <option></option>
                                        <option value="Laki-laki" <?php if ($data['siswa_jk'] == 'Laki-laki') { echo "selected"; } ?>>Laki-Laki</option>
                                        <option value="Perempuan" <?php if ($data['siswa_jk'] == 'Perempuan') { echo "selected"; } ?>>Perempuan</option>
                                    </select>
                                </td>
							</tr>
							<tr>
								<td><label>Alamat</label></td>
								<td><input type="text" name="alamat" size="50" value="<?php echo $data["siswa_alamat"]; ?>" /></td>
							</tr>
							<tr>
								<td><label>Foto Siswa</label></td>
								<td><input type="file" name="siswa" /> &nbsp; &nbsp;*JPG/JPEG</td>
							</tr>
							<tr>
								<td>&nbsp;</td>
								<td>&nbsp;</td>
							</tr>
							<tr>
								<td colspan="2">
									<input nis="submit" type="submit" name="edit" value="Update" />
									<input nis="reset" type="reset"  value="Batal" onclick="self.history.back()" />
								</td>
							</tr>
						</table>
					</form>
				</div>
			<?php
		break;
		case "add":
			?>
				<div class="full_w">
				<div class="h_title"><b>Manajemen Data Siswa</b></div>
					<form action="module/student/action.php" method="post" enctype="multipart/form-data">
						<table class="admin" cellspacing="5px">
							<tr>
								<td width="150px"><label>Nama siswa</label></td>
								<td><input type="text" name="nama" size="25" /></td>
							</tr>
							<tr>
								<td><label>Nomor Induk Siswa</label></td>
								<td><input type="text" name="nis" size="25" /></td>
							</tr>
							<tr>
								<td><label>Tempat Lahir</label></td>
								<td><input type="text" name="tempat" size="25" /></td>
							</tr>
							<tr>
								<td><label>Tanggal Lahir</label></td>
								<td><input type="text" name="tanggal" size="25" /> &nbsp; &nbsp;(dd-MM-yyyy)</td>
							</tr>
							<tr>
								<td><label>Jenis Kelamin</label></td>
								<td>
                                    <select name="jk">
                                        <option></option>
                                        <option value="Laki-laki">Laki-Laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                </td>
							</tr>
							<tr>
								<td><label>Alamat</label></td>
								<td><input type="text" name="alamat" size="50" /></td>
							</tr>
							<tr>
								<td><label>Foto Siswa</label></td>
								<td><input type="file" name="siswa" /> &nbsp; &nbsp;*JPG/JPEG</td>
							</tr>
							<tr>
								<td>&nbsp;</td>
								<td>&nbsp;</td>
							</tr>
							<tr>
								<td colspan="2">
									<input nis="submit" type="submit" name="add" value="Tambah" />
									<input nis="reset" type="reset"  value="Batal" onclick="self.history.back()" />
								</td>
							</tr>
						</table>
					</form>
				</div>
			<?php
		break;
		case "delete":
			mysql_query("delete from siswa where nis = '$_GET[nis]'");
			header("location: ?module=student");
		break;
	}
?>