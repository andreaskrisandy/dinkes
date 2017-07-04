<?php
	switch($_GET['mode']){
		default:
			?>
				<div class="full_w">
				<div class="h_title"><b>Manajemen Data Artikel Kesehatan</b></div>
				<button type="submit" name="submit" class="ok1" onclick="window.location='?module=artikelkesehatan&mode=add'">Tambah</button>
			<?php
			echo "<table class=\"admin\" border=\"0\" cellpadding=\"5px\" cellspacing=\"1px\"><thead>
				  <tr bgcolor=\"#ffffff\"><th align=\"center\">No</th><th align=\"center\">Tanggal artikelkesehatan</th><th align=\"center\">Judul artikelkesehatan</th><th align=\"center\">Isi Artikel Kesehatan</th><th align=\"center\">Pengaturan</th></tr></thead>";
			$query = mysql_query("select * from artikelkesehatan");
			$no = 1;
			while ($data = mysql_fetch_array($query)){
				echo "<tbody><tr bgcolor=\"#ffffff\">";
					echo "<td align=\"center\">$no</td>";
					echo "<td style=\"width: 20%;\">$data[tgl_artikelkesehatan]</td>";
					echo "<td align=\"center\">$data[judul_artikelkesehatan]</td>";
					echo "<td>$data[isi_artikelkesehatan]</td>";
					echo "<td align=\"center\"><a title=\"Edit\" class=\"table-icon edit\" href=\"?module=artikelkesehatan&mode=edit&id=$data[id_artikelkesehatan]\"></a>&nbsp;&nbsp;&nbsp;<a title=\"Hapus\" class=\"table-icon delete\"href=\"?module=artikelkesehatan&mode=delete&id=$data[id_artikelkesehatan]\"></a></td>";
				echo "</tr></tbody>";
				$no++;
			}
			echo "</table>";
			echo "</div>";
		break;
		case "edit":
			$query = mysql_query("select * from artikelkesehatan where id = '$_GET[id_artikelkesehatan]'");
			$data = mysql_fetch_array($query);
			?>
				<div class="full_w">
				<div class="h_title"><b>Manajemen Data Artikel Kesehatan</b></div>
					<form action="module/dashboard/action_artikelkesehatan.php" method="post" enctype="multipart/form-data">
						<input type="hidden" name="id" value="<?php echo $_GET["id"]; ?>" />
						<table class="admin" cellspacing="5px">
							<tr>
								<td><label>Judul Artikel Kesehatan</label></td>
								<td><input type="text" name="judul_artikelkesehatan" style="width: 100%" value="<?php echo $data["judul_artikelkesehatan"]; ?>" /></td>
							</tr>
							<tr>
								<td><label>Isi Artikel Kesehatan</label></td>
								<td><input type="text" name="isi_artikelkesehatan" style="width: 100%" value="<?php echo $data["isi_artikelkesehatan"]; ?>" /></td>
							</tr>
							<tr>
								<td><label>Gambar Artikel Kesehatan</label></td>
								<td><input type="file" name="artikelkesehatan" /> &nbsp; &nbsp;<a style="color: #999; text-decoration: none" href="../galeri/<?php echo $data['gambar_artikelkesehatan']; ?>" target="_blank">Gambar Artikel Kesehatan</a></td>
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
				<div class="h_title"><b>Manajemen Data Artikel Kesehatan</b></div>
					<form action="module/dashboard/action_artikelkesehatan.php" method="post" enctype="multipart/form-data">
						<table class="admin" cellspacing="5px">
							<tr>
								<td><label>Judul artikelkesehatan</label></td>
								<td><input type="text" name="judul_artikelkesehatan" style="width: 100%" /></td>
							</tr>
							<tr>
								<td><label>Isi artikelkesehatan</label></td>
								<td><input type="text" name="isi_artikelkesehatan" style="width: 100%" /></td>
							</tr>
							<tr>
								<td><label>Gambar artikelkesehatan</label></td>
								<td><input type="file" name="artikelkesehatan" /> &nbsp; &nbsp;JPG/PNG</td>
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
			mysql_query("delete from artikelkesehatan where id = '$_GET[id]'");
			header("location: ?module=artikelkesehatan");
		break;
	}
?>
