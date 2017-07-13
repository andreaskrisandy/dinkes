<?php
	switch($_GET['mode']){
		default:
			?>
				<div class="full_w">
				<div class="h_title"><b>Manajemen Data Pengumuman</b></div>
				<button type="submit" name="submit" class="ok1" onclick="window.location='?module=pengumuman&mode=add'">Tambah</button>
			<?php
			echo "<table class=\"admin\" border=\"0\" cellpadding=\"5px\" cellspacing=\"1px\"><thead>
				  <tr bgcolor=\"#ffffff\"><th align=\"center\">No</th><th align=\"center\">Tanggal Pengumuman</th><th align=\"center\">Judul Pengumuman</th><th align=\"center\">Isi Pengumuman</th><th align=\"center\">Pengaturan</th></tr></thead>";
			$query = mysql_query("select * from pengumuman");
			$no = 1;
			while ($data = mysql_fetch_array($query)){
				echo "<tbody><tr bgcolor=\"#ffffff\">";
					echo "<td align=\"center\">$no</td>";
					echo "<td style=\"width: 20%;\">$data[tgl_pengumuman]</td>";
					echo "<td align=\"center\">$data[judul_pengumuman]</td>";
					echo "<td>$data[isi_pengumuman]</td>";
					echo "<td align=\"center\"><a title=\"Edit\" class=\"table-icon edit\" href=\"?module=pengumuman&mode=edit&id=$data[id_pengumuman]\"></a>&nbsp;&nbsp;&nbsp;<a title=\"Hapus\" class=\"table-icon delete\"href=\"?module=pengumuman&mode=delete&id=$data[id_pengumuman]\"></a></td>";
				echo "</tr></tbody>";
				$no++;
			}
			echo "</table>";
			echo "</div>";
		break;
		case "edit":
			$query = mysql_query("select * from pengumuman where id_pengumuman = '$_GET[id]'");
			$data = mysql_fetch_array($query);
			?>
				<div class="full_w">
				<div class="h_title"><b>Manajemen Data Pengumuman</b></div>
					<form action="module/dashboard/action_pengumuman.php" method="post" enctype="multipart/form-data">
						<input type="hidden" name="id" value="<?php echo $_GET["id"]; ?>" />
						<table class="admin" cellspacing="5px">
							<tr>
								<td><label>Judul Pengumuman</label></td>
								<td><input type="text" name="judul_pengumuman" style="width: 100%" value="<?php echo $data["judul_pengumuman"]; ?>" /></td>
							</tr>
							<tr>
								<td><label>Isi Pengumuman</label></td>
								<!-- <td><input type="text" name="isi_pengumuman" style="width: 100%" value="<?php echo $data["isi_pengumuman"]; ?>" /></td> -->
								<td><textarea name="isi_pengumuman"><?php echo $data["isi_pengumuman"]; ?></textarea></td>
							</tr>
							<tr>
								<td><label>Gambar Pengumuman</label></td>
								<td><input type="file" name="pengumuman" /> &nbsp; &nbsp;<a style="color: #999; text-decoration: none" href="../galeri/<?php echo $data['gambar_pengumuman']; ?>" target="_blank">Gambar Pengumuman</a></td>
							</tr>
							<tr>
								<td>&nbsp;</td>
								<td>&nbsp;</td>
							</tr>
							<tr>
								<td colspan="2">
									<input id="submit" type="submit" name="edit" value="Update" />
									<input id="reset" type="reset"  value="Batal" onclick="self.history.back()" />
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
				<div class="h_title"><b>Manajemen Data Pengumuman</b></div>
					<form action="module/dashboard/action_pengumuman.php" method="post" enctype="multipart/form-data">
						<table class="admin" cellspacing="5px">
							<tr>
								<td><label>Judul Pengumuman</label></td>
								<td><input type="text" name="judul_pengumuman" style="width: 100%" /></td>
							</tr>
							<tr>
								<td><label>Isi Pengumuman</label></td>
								<!-- <td><input type="text" name="isi_pengumuman" style="width: 100%" /></td> -->
								<td><textarea name="isi_pengumuman"></textarea></td>
							</tr>
							<tr>
								<td><label>Gambar Pengumuman</label></td>
								<td><input type="file" name="pengumuman" /> &nbsp; &nbsp;JPG/PNG</td>
							</tr>
							<tr>
								<td>&nbsp;</td>
								<td>&nbsp;</td>
							</tr>
							<tr>
								<td colspan="2">
									<input id="submit" type="submit" name="add" value="Tambah" />
									<input id="reset" type="reset"  value="Batal" onclick="self.history.back()" />
								</td>
							</tr>
						</table>
					</form>
				</div>
			<?php
		break;
		case "delete":
			mysql_query("delete from pengumuman where id_pengumuman = '$_GET[id]'");
			header("location: ?module=pengumuman");
		break;
	}
?>
