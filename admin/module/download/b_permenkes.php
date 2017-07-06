<?php
	switch($_GET['mode']){
		default:
			?>
				<div class="full_w">
				<div class="h_title"><b>Manajemen Data Permenkes</b></div>
				<button type="submit" name="submit" class="ok1" onclick="window.location='?module=permenkes&mode=add'">Tambah</button>
			<?php
			echo "<table class=\"admin\" border=\"0\" cellpadding=\"5px\" cellspacing=\"1px\"><thead>
				  <tr bgcolor=\"#ffffff\"><th align=\"center\">No</th><th align=\"center\">Permenkes</th><th align=\"center\">Tahun</th><th align=\"center\">Deskripsi</th><th align=\"center\">Pengaturan</th></tr></thead>";
			$query = mysql_query("select * from permenkes");
			$no = 1;
			while ($data = mysql_fetch_array($query)){
				echo "<tbody><tr bgcolor=\"#ffffff\">";
					echo "<td align=\"center\">$no</td>";
					echo "<td style=\"width: 20%;\">$data[nama_permenkes]</td>";
					echo "<td align=\"center\">$data[tahun_permenkes]</td>";
					echo "<td>$data[deskripsi_permenkes]</td>";
					echo "<td align=\"center\"><a title=\"Edit\" class=\"table-icon edit\" href=\"?module=permenkes&mode=edit&id=$data[id_permenkes]\"></a>&nbsp;&nbsp;&nbsp;<a title=\"Hapus\" class=\"table-icon delete\"href=\"?module=permenkes&mode=delete&id=$data[id_permenkes]\"></a></td>";
				echo "</tr></tbody>";
				$no++;
			}
			echo "</table>";
			echo "</div>";
		break;
		case "edit":
			$query = mysql_query("select * from permenkes where id = '$_GET[id_permenkes]'");
			$data = mysql_fetch_array($query);
			?>
				<div class="full_w">
				<div class="h_title"><b>Manajemen Data Download Permenkes</b></div>
					<form action="module/download/action_permenkes.php" method="post" enctype="multipart/form-data">
						<input type="hidden" name="id" value="<?php echo $_GET["id"]; ?>" />
						<table class="admin" cellspacing="5px">
							<tr>
								<td><label>Permenkes</label></td>
								<td><input type="text" name="nama_permenkes" style="width: 100%" value="<?php echo $data["nama_permenkes"]; ?>" /></td>
							</tr>
							<tr>
								<td><label>Tahun</label></td>
								<td><input type="text" name="tahun_permenkes" style="width: 100%" value="<?php echo $data["tahun_permenkes"]; ?>" /></td>
							</tr>
							<tr>
								<td><label>Deskripsi</label></td>
								<td><textarea name="deskripsi_permenkes"><?php echo $data["deskripsi_permenkes"]; ?></textarea></td>
							</tr>
							<tr>
								<td><label>File Permenkes</label></td>
								<td><input type="file" name="permenkes" /> &nbsp; &nbsp;<a style="color: #999; text-decoration: none" href="../galeri/<?php echo $data['keterangan_permenkes']; ?>" target="_blank">File Permenkes</a></td>
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
				<div class="h_title"><b>Manajemen Data Download Permenkes</b></div>
					<form action="module/download/action_permenkes.php" method="post" enctype="multipart/form-data">
						<table class="admin" cellspacing="5px">
							<tr>
								<td><label>Permenkes</label></td>
								<td><input type="text" name="nama_permenkes" style="width: 100%" /></td>
							</tr>
							<tr>
								<td><label>Tahun</label></td>
								<td><input type="text" name="tahun_permenkes" style="width: 100%" /></td>
							</tr>
							<tr>
								<td><label>Deskripsi</label></td>
								<td><textarea name="deskripsi_permenkes"></textarea></td>
							</tr>
							<tr>
								<td><label>File Permenkes</label></td>
								<td><input type="file" name="permenkes" /> &nbsp; &nbsp;Document</td>
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
			mysql_query("delete from permenkes where id_permenkes = '$_GET[id]'");
			header("location: ?module=permenkes");
		break;
	}
?>
