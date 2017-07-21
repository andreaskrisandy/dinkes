<?php
	switch($_GET['mode']){
		default:
			?>
				<div class="full_w">
				<div class="h_title"><b>Manajemen Data Laboratorium</b></div>
				<button type="submit" name="submit" class="ok1" onclick="window.location='?module=laboratorium&mode=add'">Tambah</button>
			<?php
			echo "<table class=\"admin\" border=\"0\" cellpadding=\"5px\" cellspacing=\"1px\"><thead>
				  <tr bgcolor=\"#ffffff\"><th align=\"center\">No</th><th align=\"center\">Jenis Pelayanan</th><th align=\"center\">Tarif Pelayanan</th><th>Aksi</th></tr></thead>";
			$query = mysql_query("select * from laboratorium order by id_lab desc");
			$no = 1;
			while ($data = mysql_fetch_array($query)){
				echo "<tbody><tr bgcolor=\"#ffffff\">";
					echo "<td align=\"center\">$no</td>";
					echo "<td>$data[jenis_pelayanan]</td>";
					echo "<td>$data[tarif_pelayanan]</td>";
					
					echo "<td align=\"center\"><a title=\"Edit\" class=\"table-icon edit\" href=\"?module=laboratorium&mode=edit&id=$data[id_lab]\"></a>&nbsp;&nbsp;&nbsp;<a title=\"Hapus\" class=\"table-icon delete\"href=\"?module=laboratorium&mode=delete&id=$data[id_lab]\"></a></td>";
				echo "</tr></tbody>";
				$no++;
			}
			echo "</table>";
			echo "</div>";
		break;
		case "edit":
			$query = mysql_query("select * from laboratorium where id_lab = '$_GET[id]'");
			$data = mysql_fetch_array($query);
			?>
				<div class="full_w">
				<div class="h_title"><b>Manajemen Data Laboratorium</b></div>
					<form action="module/uptdinas/action_lab.php" method="post">
						<input type="hidden" name="id" value="<?php echo $_GET["id"]; ?>" />
						<table class="admin" cellspacing="5px">
							<tr>
								<td><label>Jenis Pelayanan</label></td>
								<td><input type="text" name="jenis_pelayanan" size="80" value="<?php echo $data["jenis_pelayanan"]; ?>" /></td>
							</tr>
							<tr>
								<td><label>Tarif Pelayanan</label></td>
								<td><input type="text" name="tarif_pelayanan" size="80" value="<?php echo $data["tarif_pelayanan"]; ?>" /></td>
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
				<div class="h_title"><b>Manajemen Data Laboratorium</b></div>
					<form action="module/uptdinas/action_lab.php" method="post">
						<table class="admin" cellspacing="5px">
							<tr>
								<td><label>Jenis Pelayanan</label></td>
								<td><input type="text" name="jenis_pelayanan" size="80" /></td>
							</tr>
							<tr>
								<td><label>Tarif Pelayanan</label></td>
								<td><input type="text" name="tarif_pelayanan" size="80" /></td>
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
			mysql_query("delete from laboratorium where id_lab = '$_GET[id]'");
			header("location: ?module=laboratorium");
		break;
	}
?>
