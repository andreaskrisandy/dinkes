<?php
	switch($_GET['mode']){
		default:
			?>
				<div class="full_w">
				<div class="h_title"><b>Manajemen Data Laporan Realisasi I dan II</b></div>
				<button type="submit" name="submit" class="ok1" onclick="window.location='?module=laprealisasi&mode=add'">Tambah</button>
			<?php
			echo "<table class=\"admin\" border=\"0\" cellpadding=\"5px\" cellspacing=\"1px\"><thead>
				  <tr bgcolor=\"#ffffff\"><th align=\"center\">No</th><th align=\"center\">Laporan Realisasi I dan II</th><th align=\"center\">Tahun</th><th align=\"center\">Deskripsi</th><th align=\"center\">Pengaturan</th></tr></thead>";
			$query = mysql_query("select * from laprealisasi");
			$no = 1;
			while ($data = mysql_fetch_array($query)){
				echo "<tbody><tr bgcolor=\"#ffffff\">";
					echo "<td align=\"center\">$no</td>";
					echo "<td style=\"width: 20%;\">$data[nama_laprealisasi]</td>";
					echo "<td align=\"center\">$data[tahun_laprealisasi]</td>";
					echo "<td>$data[deskripsi_laprealisasi]</td>";
					echo "<td align=\"center\"><a title=\"Edit\" class=\"table-icon edit\" href=\"?module=laprealisasi&mode=edit&id=$data[id_laprealisasi]\"></a>&nbsp;&nbsp;&nbsp;<a title=\"Hapus\" class=\"table-icon delete\"href=\"?module=laprealisasi&mode=delete&id=$data[id_laprealisasi]\"></a></td>";
				echo "</tr></tbody>";
				$no++;
			}
			echo "</table>";
			echo "</div>";
		break;
		case "edit":
			$query = mysql_query("select * from laprealisasi where id_laprealisasi = '$_GET[id]'");
			$data = mysql_fetch_array($query);
			?>
				<div class="full_w">
				<div class="h_title"><b>Manajemen Data Download Laporan Realisasi I dan II</b></div>
					<form action="module/ppid/action_laprealisasi.php" method="post" enctype="multipart/form-data">
						<input type="hidden" name="id" value="<?php echo $_GET["id"]; ?>" />
						<table class="admin" cellspacing="5px">
							<tr>
								<td><label>Laporan Realisasi I dan II</label></td>
								<td><input type="text" name="nama_laprealisasi" style="width: 100%" value="<?php echo $data["nama_laprealisasi"]; ?>" /></td>
							</tr>
							<tr>
								<td><label>Tahun</label></td>
								<td><input type="text" name="tahun_laprealisasi" style="width: 100%" value="<?php echo $data["tahun_laprealisasi"]; ?>" /></td>
							</tr>
							<tr>
								<td><label>Deskripsi</label></td>
								<td><textarea name="deskripsi_laprealisasi"><?php echo $data["deskripsi_laprealisasi"]; ?></textarea></td>
							</tr>
							<tr>
								<td><label>Link Download</label></td>
								<td><input type="text" name="link_download" style="width: 100%" value="<?php echo $data["keterangan_laprealisasi"]; ?>" /></td>
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
				<div class="h_title"><b>Manajemen Data Download Laporan Realisasi I dan II</b></div>
					<form action="module/ppid/action_laprealisasi.php" method="post" enctype="multipart/form-data">
						<table class="admin" cellspacing="5px">
							<tr>
								<td><label>Laporan Realisasi I dan II</label></td>
								<td><input type="text" name="nama_laprealisasi" style="width: 100%" /></td>
							</tr>
							<tr>
								<td><label>Tahun</label></td>
								<td><input type="text" name="tahun_laprealisasi" style="width: 100%" /></td>
							</tr>
							<tr>
								<td><label>Deskripsi</label></td>
								<td><textarea name="deskripsi_laprealisasi"></textarea></td>
							</tr>
							<tr>
								<td><label>Link Download</label></td>
								<td><input type="text" name="link_download" style="width: 100%" /></td>
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
			mysql_query("delete from laprealisasi where id_laprealisasi = '$_GET[id]'");
			header("location: ?module=laprealisasi");
		break;
	}
?>
