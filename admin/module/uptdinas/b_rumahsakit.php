<?php
	switch($_GET['mode']){
		default:
			?>
				<div class="full_w">
				<div class="h_title"><b>Manajemen Data Rumah Sakit</b></div>
				<button type="submit" name="submit" class="ok1" onclick="window.location='?module=rumahsakit&mode=add'">Tambah</button>
			<?php
			echo "<table class=\"admin\" border=\"0\" cellpadding=\"5px\" cellspacing=\"1px\"><thead>
				  <tr bgcolor=\"#ffffff\"><th align=\"center\">No</th><th align=\"center\">Rumah Sakit</th><th align=\"center\">Penanggung Jawab</th><th align=\"center\">Alamat</th><th align=\"center\">Telepon</th><th align=\"center\">Pelayanan Unggulan</th><th>Aksi</th></tr></thead>";
			$query = mysql_query("select * from rumahsakit order by id_rs desc");
			$no = 1;
			while ($data = mysql_fetch_array($query)){
				echo "<tbody><tr bgcolor=\"#ffffff\">";
					echo "<td align=\"center\">$no</td>";
					echo "<td>$data[nama_rs]</td>";
					echo "<td>$data[penanggungjawab_rs]</td>";
					echo "<td>$data[alamat_rs]</td>";
					echo "<td>$data[notlp_rs]</td>";
					echo "<td>$data[pu_rs]</td>";
					echo "<td align=\"center\"><a title=\"Edit\" class=\"table-icon edit\" href=\"?module=rumahsakit&mode=edit&id=$data[id_rs]\"></a>&nbsp;&nbsp;&nbsp;<a title=\"Hapus\" class=\"table-icon delete\"href=\"?module=rumahsakit&mode=delete&id=$data[id_rs]\"></a></td>";
				echo "</tr></tbody>";
				$no++;
			}
			echo "</table>";
			echo "</div>";
		break;
		case "edit":
			$query = mysql_query("select * from rumahsakit where id_rs = '$_GET[id]'");
			$data = mysql_fetch_array($query);
			?>
				<div class="full_w">
				<div class="h_title"><b>Manajemen Data Rumah Sakit</b></div>
					<form action="module/uptdinas/action_rumahsakit.php" method="post">
						<input type="hidden" name="id" value="<?php echo $_GET["id"]; ?>" />
						<table class="admin" cellspacing="5px">
							<tr>
								<td><label>Nama Rumah Sakit</label></td>
								<td><input type="text" name="nama_rs" size="80" value="<?php echo $data["nama_rs"]; ?>" /></td>
							</tr>
							<tr>
								<td><label>Penagggung Jawab</label></td>
								<td><input type="text" name="penanggungjawab_rs" size="80" value="<?php echo $data["penanggungjawab_rs"]; ?>" /></td>
							</tr>
							<tr>
								<td><label>Alamat</label></td>
								<td><textarea name="alamat_rs"><?php echo $data["alamat_rs"]; ?></textarea></td>
							</tr>
							<tr>
								<td><label>Telepon</label></td>
								<td><textarea name="notlp_rs"><?php echo $data["notlp_rs"]; ?></textarea></td>
							</tr>
							<tr>
								<td><label>Pelayanan Unggulan</label></td>
								<td><textarea name="pu_rs"><?php echo $data["pu_rs"]; ?></textarea></td>
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
				<div class="h_title"><b>Manajemen Data Rumah Sakit</b></div>
					<form action="module/uptdinas/action_rumahsakit.php" method="post">
						<table class="admin" cellspacing="5px">
							<tr>
								<td><label>Nama Rumah Sakit</label></td>
								<td><input type="text" name="nama_rs" size="80" /></td>
							</tr>
							<tr>
								<td><label>Penganggung Jawab</label></td>
								<td><input type="text" name="penanggungjawab_rs" size="80" /></td>
							</tr>
							<tr>
								<td><label>Alamat</label></td>
								<td><textarea name="alamat_rs"></textarea></td>
							</tr>
							<tr>
								<td><label>Telepon</label></td>
								<td><textarea name="notlp_rs"></textarea></td>
							</tr>
							<tr>
								<td><label>Pelayanan Unggulan</label></td>
								<td><textarea name="pu_rs"></textarea></td>
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
			mysql_query("delete from rumahsakit where id_rs = '$_GET[id]'");
			header("location: ?module=rumahsakit");
		break;
	}
?>
