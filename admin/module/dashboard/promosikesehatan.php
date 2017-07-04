<?php
	switch($_GET['mode']){
		default:
			?>
				<div class="full_w">
				<div class="h_title"><b>Manajemen Data Promosi Kesehatan</b></div>
				<button type="submit" name="submit" class="ok1" onclick="window.location='?module=promosikesehatan&mode=add'">Tambah</button>
			<?php
			echo "<table class=\"admin\" border=\"0\" cellpadding=\"5px\" cellspacing=\"1px\"><thead>
				  <tr bgcolor=\"#ffffff\"><th align=\"center\">No</th><th align=\"center\">Tanggal promosikesehatan</th><th align=\"center\">Judul promosikesehatan</th><th align=\"center\">Isi Promosi Kesehatan</th><th align=\"center\">Pengaturan</th></tr></thead>";
			$query = mysql_query("select * from promosikesehatan");
			$no = 1;
			while ($data = mysql_fetch_array($query)){
				echo "<tbody><tr bgcolor=\"#ffffff\">";
					echo "<td align=\"center\">$no</td>";
					echo "<td style=\"width: 20%;\">$data[tgl_promosikesehatan]</td>";
					echo "<td align=\"center\">$data[judul_promosikesehatan]</td>";
					echo "<td>$data[isi_promosikesehatan]</td>";
					echo "<td align=\"center\"><a title=\"Edit\" class=\"table-icon edit\" href=\"?module=promosikesehatan&mode=edit&id=$data[id_promosikesehatan]\"></a>&nbsp;&nbsp;&nbsp;<a title=\"Hapus\" class=\"table-icon delete\"href=\"?module=promosikesehatan&mode=delete&id=$data[id_promosikesehatan]\"></a></td>";
				echo "</tr></tbody>";
				$no++;
			}
			echo "</table>";
			echo "</div>";
		break;
		case "edit":
			$query = mysql_query("select * from promosikesehatan where id = '$_GET[id_promosikesehatan]'");
			$data = mysql_fetch_array($query);
			?>
				<div class="full_w">
				<div class="h_title"><b>Manajemen Data Promosi Kesehatan</b></div>
					<form action="module/dashboard/action_promosikesehatan.php" method="post" enctype="multipart/form-data">
						<input type="hidden" name="id" value="<?php echo $_GET["id"]; ?>" />
						<table class="admin" cellspacing="5px">
							<tr>
								<td><label>Judul Promosi Kesehatan</label></td>
								<td><input type="text" name="judul_promosikesehatan" style="width: 100%" value="<?php echo $data["judul_promosikesehatan"]; ?>" /></td>
							</tr>
							<tr>
								<td><label>Isi Promosi Kesehatan</label></td>
								<td><input type="text" name="isi_promosikesehatan" style="width: 100%" value="<?php echo $data["isi_promosikesehatan"]; ?>" /></td>
							</tr>
							<tr>
								<td><label>Gambar Promosi Kesehatan</label></td>
								<td><input type="file" name="promosikesehatan" /> &nbsp; &nbsp;<a style="color: #999; text-decoration: none" href="../galeri/<?php echo $data['gambar_promosikesehatan']; ?>" target="_blank">Gambar Promosi Kesehatan</a></td>
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
				<div class="h_title"><b>Manajemen Data Promosi Kesehatan</b></div>
					<form action="module/dashboard/action_promosikesehatan.php" method="post" enctype="multipart/form-data">
						<table class="admin" cellspacing="5px">
							<tr>
								<td><label>Judul promosikesehatan</label></td>
								<td><input type="text" name="judul_promosikesehatan" style="width: 100%" /></td>
							</tr>
							<tr>
								<td><label>Isi promosikesehatan</label></td>
								<td><input type="text" name="isi_promosikesehatan" style="width: 100%" /></td>
							</tr>
							<tr>
								<td><label>Gambar promosikesehatan</label></td>
								<td><input type="file" name="promosikesehatan" /> &nbsp; &nbsp;JPG/PNG</td>
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
			mysql_query("delete from promosikesehatan where id = '$_GET[id]'");
			header("location: ?module=promosikesehatan");
		break;
	}
?>
