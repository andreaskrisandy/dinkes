<?php
	switch($_GET['mode']){
		default:
			?>
				<div class="full_w">
				<div class="h_title"><b>Manajemen Data Galeri</b></div>
				<button type="submit" name="submit" class="ok1" onclick="window.location='?module=galeri&mode=add'">Tambah</button>
			<?php
			echo "<table class=\"admin\" border=\"0\" cellpadding=\"5px\" cellspacing=\"1px\"><thead>
				  <tr bgcolor=\"#ffffff\"><th align=\"center\">No</th><th align=\"center\">Judul Galeri</th><th align=\"center\">Deskripsi</th><th align=\"center\">Pengaturan</th></tr></thead>";
			$query = mysql_query("select * from galeri");
			$no = 1;
			while ($data = mysql_fetch_array($query)){
				echo "<tbody><tr bgcolor=\"#ffffff\">";
					echo "<td align=\"center\">$no</td>";
					echo "<td>$data[judul]</td>";
					echo "<td>$data[deskripsi]</td>";
					echo "<td align=\"center\"><a title=\"Edit\" class=\"table-icon edit\" href=\"?module=galeri&mode=edit&id=$data[id]\"></a>&nbsp;&nbsp;&nbsp;<a title=\"Hapus\" class=\"table-icon delete\"href=\"?module=galeri&mode=delete&id=$data[id]\"></a></td>";
				echo "</tr></tbody>";
				$no++;
			}
			echo "</table>";
			echo "</div>";
		break;
		case "edit":
			$query = mysql_query("select * from galeri where id = '$_GET[id]'");
			$data = mysql_fetch_array($query);
			?>
				<div class="full_w">
				<div class="h_title"><b>Manajemen Data Galeri</b></div>
					<form action="module/galeri/action.php" method="post" enctype="multipart/form-data">
						<input type="hidden" name="id" value="<?php echo $_GET["id"]; ?>" />
						<table class="admin" cellspacing="5px">
							<tr>
								<td><label>Judul Galeri</label></td>
								<td><input type="text" name="judul" style="width: 100%" value="<?php echo $data["judul"]; ?>" /></td>
							</tr>
							<tr>
								<td><label>Deskripsi Galeri</label></td>
								<td><textarea name="deskripsi"><?php echo $data["deskripsi"]; ?></textarea></td>
							</tr>
							<tr>
								<td><label>Foto Galeri</label></td>
								<td><input type="file" name="galeri" /> &nbsp; &nbsp;<a style="color: #999; text-decoration: none" href="../galeri/<?php echo $data['gambar']; ?>" target="_blank">Foto Galeri</a></td>
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
				<div class="h_title"><b>Manajemen Data Galeri</b></div>
					<form action="module/galeri/action.php" method="post" enctype="multipart/form-data">
						<table class="admin" cellspacing="5px">
							<tr>
								<td><label>Judul Galeri</label></td>
								<td><input type="text" name="judul" style="width: 100%" /></td>
							</tr>
							<tr>
								<td><label>Deskripsi Galeri</label></td>
								<td><textarea name="deskripsi"></textarea></td>
							</tr>
							<tr>
								<td><label>Foto Galeri</label></td>
								<td><input type="file" name="galeri" /> &nbsp; &nbsp;JPEG/JPG</td>
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
			mysql_query("delete from galeri where id = '$_GET[id]'");
			header("location: ?module=galeri");
		break;
	}
?>