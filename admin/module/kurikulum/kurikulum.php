<?php
	switch($_GET['mode']){
		default:
			?>
				<div class="full_w">
				<div class="h_title"><b>Manajemen Data Puskesmas</b></div>
				<button type="submit" name="submit" class="ok1" onclick="window.location='?module=kurikulum&mode=add'">Tambah</button>
			<?php
			echo "<table class=\"admin\" border=\"0\" cellpadding=\"5px\" cellspacing=\"1px\"><thead>
				  <tr bgcolor=\"#ffffff\"><th align=\"center\">No</th><th align=\"center\">UPT Puskesmas</th><th align=\"center\">Penanggung Jawab</th><th align=\"center\">Alamat</th><th align=\"center\">Telepon</th><th align=\"center\">Pelayanan Unggulan</th><th>Aksi</th></tr></thead>";
			$query = mysql_query("select * from kurikulum order by id_kurikulum desc");
			$no = 1;
			while ($data = mysql_fetch_array($query)){
				echo "<tbody><tr bgcolor=\"#ffffff\">";
					echo "<td align=\"center\">$no</td>";
					echo "<td>$data[ks]</td>";
					echo "<td>$data[mapel]</td>";
					echo "<td>$data[standar]</td>";
					echo "<td>$data[kompetensi]</td>";
					echo "<td>$data[tambahan]</td>";
					echo "<td align=\"center\"><a title=\"Edit\" class=\"table-icon edit\" href=\"?module=kurikulum&mode=edit&id=$data[id_kurikulum]\"></a>&nbsp;&nbsp;&nbsp;<a title=\"Hapus\" class=\"table-icon delete\"href=\"?module=kurikulum&mode=delete&id=$data[id_kurikulum]\"></a></td>";
				echo "</tr></tbody>";
				$no++;
			}
			echo "</table>";
			echo "</div>";
		break;
		case "edit":
			$query = mysql_query("select * from kurikulum where id_kurikulum = '$_GET[id]'");
			$data = mysql_fetch_array($query);
			?>
				<div class="full_w">
				<div class="h_title"><b>Manajemen Data Puskesmas</b></div>
					<form action="module/kurikulum/action.php" method="post">
						<input type="hidden" name="id" value="<?php echo $_GET["id"]; ?>" />
						<table class="admin" cellspacing="5px">
							<tr>
								<td><label>Nama Puskesmas</label></td>
								<td><input type="text" name="ks" size="80" value="<?php echo $data["ks"]; ?>" /></td>
							</tr>
							<tr>
								<td><label>Penagggung Jawab</label></td>
								<td><input type="text" name="mapel" size="80" value="<?php echo $data["mapel"]; ?>" /></td>
							</tr>
							<tr>
								<td><label>Alamat</label></td>
								<td><textarea name="standar"><?php echo $data["standar"]; ?></textarea></td>
							</tr>
							<tr>
								<td><label>Telepon</label></td>
								<td><textarea name="kompetensi"><?php echo $data["kompetensi"]; ?></textarea></td>
							</tr>
							<tr>
								<td><label>Pelayanan Unggulan</label></td>
								<td><textarea name="tambahan"><?php echo $data["tambahan"]; ?></textarea></td>
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
				<div class="h_title"><b>Manajemen Data Kurikulum Coiii</b></div>
					<form action="module/kurikulum/action.php" method="post">
						<table class="admin" cellspacing="5px">
							<tr>
								<td><label>Nama Puskesmas</label></td>
								<td><input type="text" name="ks" size="80" /></td>
							</tr>
							<tr>
								<td><label>Penganggung Jawab</label></td>
								<td><input type="text" name="mapel" size="80" /></td>
							</tr>
							<tr>
								<td><label>Alamat</label></td>
								<td><textarea name="standar"></textarea></td>
							</tr>
							<tr>
								<td><label>Telepon</label></td>
								<td><textarea name="kompetensi"></textarea></td>
							</tr>
							<tr>
								<td><label>Pelayanan Unggulan</label></td>
								<td><textarea name="tambahan"></textarea></td>
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
			mysql_query("delete from kurikulum where id_kurikulum = '$_GET[id]'");
			header("location: ?module=kurikulum");
		break;
	}
?>
