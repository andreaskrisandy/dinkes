<?php
	switch($_GET['mode']){
		default:
			?>
				<div class="full_w">
				<div class="h_title"><b>Manajemen Data Guru</b></div>
				<button type="submit" name="submit" class="ok1" onclick="window.location='?module=teacher&mode=add'">Tambah</button>
			<?php
			echo "<table class=\"admin\" border=\"0\" cellpadding=\"5px\" cellspacing=\"1px\"><thead>
				  <tr bgcolor=\"#ffffff\"><th align=\"center\">No</th><th align=\"center\">Nama guru</th><th align=\"center\">Tempat Lahir</th><th align=\"center\">Tanggal Lahir</th><th align=\"center\">Jenip Kelamin</th><th align=\"center\">Alamat</th><th align=\"center\">Pengaturan</th></tr></thead>";
			$query = mysql_query("select * from guru");
			$no = 1;
			while ($data = mysql_fetch_array($query)){
				echo "<tbody><tr bgcolor=\"#ffffff\">";
					echo "<td align=\"center\">$no</td>";
					echo "<td>$data[guru_name]</td>";
					echo "<td>$data[guru_tmp_lahir]</td>";
					echo "<td>$data[guru_tgl_lahir]</td>";
					echo "<td>$data[guru_jk]</td>";
					echo "<td>$data[guru_alamat]</td>";
					echo "<td align=\"center\"><a title=\"Edit\" class=\"table-icon edit\" href=\"?module=teacher&mode=edit&nip=$data[nip]\"></a>&nbsp;&nbsp;&nbsp;<a title=\"Hapus\" class=\"table-icon delete\"href=\"?module=teacher&mode=delete&nip=$data[nip]\"></a></td>";
				echo "</tr></tbody>";
				$no++;
			}
			echo "</table>";
			echo "</div>";
		break;
		case "edit":
			$query = mysql_query("select * from guru where nip = '$_GET[nip]'");
			$data = mysql_fetch_array($query);
			?>
				<div class="full_w">
				<div class="h_title"><b>Manajemen Data Guru</b></div>
					<form action="module/teacher/action.php" method="post" enctype="multipart/form-data">
						<input type="hidden" name="nip" value="<?php echo $_GET["nip"]; ?>" />
						<table class="admin" cellspacing="5px">
							<tr>
								<td><label>Nama Guru</label></td>
								<td><input type="text" name="nama" size="25" value="<?php echo $data["guru_name"]; ?>" /></td>
							</tr>
							<tr>
								<td><label>Nomor Induk Pegawai</label></td>
								<td><input type="text" name="nip" size="25" value="<?php echo $data["nip"]; ?>" /></td>
							</tr>
							<tr>
								<td><label>Tempat Lahir</label></td>
								<td><input type="text" name="tempat" size="25" value="<?php echo $data["guru_tmp_lahir"]; ?>" /></td>
							</tr>
							<tr>
								<td><label>Tanggal Lahir</label></td>
								<td><input type="text" name="tanggal" size="25" value="<?php echo $data["guru_tgl_lahir"]; ?>" /> &nbsp; &nbsp;(dd-MM-yyyy)</td>
							</tr>
							<tr>
								<td><label>Jenis Kelamin</label></td>
								<td>
                                    <select name="jk">
                                        <option></option>
                                        <option value="Laki-laki" <?php if ($data['guru_jk'] == 'Laki-laki') { echo "selected"; } ?>>Laki-Laki</option>
                                        <option value="Perempuan" <?php if ($data['guru_jk'] == 'Perempuan') { echo "selected"; } ?>>Perempuan</option>
                                    </select>
                                </td>
							</tr>
							<tr>
								<td><label>Pendidikan Terakhir</label></td>
								<td><input type="text" name="pendidikan" size="25" value="<?php echo $data["pendidikan"]; ?>" /></td>
							</tr>
							<tr>
								<td><label>Jurusan</label></td>
								<td><input type="text" name="jurusan" size="25" value="<?php echo $data["jurusan"]; ?>" /></td>
							</tr>
							<tr>
								<td><label>Program Studi</label></td>
								<td><input type="text" name="studi" size="25" value="<?php echo $data["studi"]; ?>" /></td>
							</tr>
							<tr>
								<td><label>Alamat</label></td>
								<td><input type="text" name="alamat" size="50" value="<?php echo $data["guru_alamat"]; ?>" /></td>
							</tr>
							<tr>
								<td><label>Foto guru</label></td>
								<td><input type="file" name="guru" /> &nbsp; &nbsp;*JPG/JPEG</td>
							</tr>
							<tr>
								<td>&nbsp;</td>
								<td>&nbsp;</td>
							</tr>
							<tr>
								<td colspan="2">
									<input nip="submit" type="submit" name="edit" value="Update" />
									<input nip="reset" type="reset"  value="Batal" onclick="self.history.back()" />
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
				<div class="h_title"><b>Manajemen Data Guru</b></div>
					<form action="module/teacher/action.php" method="post" enctype="multipart/form-data">
						<table class="admin" cellspacing="5px">
							<tr>
								<td width="150px"><label>Nama Guru</label></td>
								<td><input type="text" name="nama" size="25" /></td>
							</tr>
							<tr>
								<td><label>Nomor Induk Pegawai</label></td>
								<td><input type="text" name="nip" size="25" /></td>
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
								<td><label>Pendidikan Terakhir</label></td>
								<td><input type="text" name="pendidikan" size="25" /></td>
							</tr>
							<tr>
								<td><label>Jurusan</label></td>
								<td><input type="text" name="jurusan" size="25" /></td>
							</tr>
							<tr>
								<td><label>Program Studi</label></td>
								<td><input type="text" name="studi" size="25" /></td>
							</tr>
							<tr>
								<td><label>Alamat</label></td>
								<td><input type="text" name="alamat" size="50" /></td>
							</tr>
							<tr>
								<td><label>Foto guru</label></td>
								<td><input type="file" name="guru" /> &nbsp; &nbsp;*JPG/JPEG</td>
							</tr>
							<tr>
								<td>&nbsp;</td>
								<td>&nbsp;</td>
							</tr>
							<tr>
								<td colspan="2">
									<input nip="submit" type="submit" name="add" value="Tambah" />
									<input nip="reset" type="reset"  value="Batal" onclick="self.history.back()" />
								</td>
							</tr>
						</table>
					</form>
				</div>
			<?php
		break;
		case "delete":
			mysql_query("delete from guru where nip = '$_GET[nip]'");
			header("location: ?module=teacher");
		break;
	}
?>