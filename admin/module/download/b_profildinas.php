<?php
	switch($_GET['mode']){
		default:
			?>
				<div class="full_w">
				<div class="h_title"><b>Manajemen Data Profil Dinas</b></div>
				<button type="submit" name="submit" class="ok1" onclick="window.location='?module=profildinas&mode=add'">Tambah</button>
			<?php
			echo "<table class=\"admin\" border=\"0\" cellpadding=\"5px\" cellspacing=\"1px\"><thead>
				  <tr bgcolor=\"#ffffff\"><th align=\"center\">No</th><th align=\"center\">Profil Dinas</th><th align=\"center\">Deskripsi</th><th align=\"center\">Pengaturan</th></tr></thead>";
			$query = mysql_query("select * from profildinas");
			$no = 1;
			while ($data = mysql_fetch_array($query)){
				echo "<tbody><tr bgcolor=\"#ffffff\">";
					echo "<td align=\"center\">$no</td>";
					echo "<td style=\"width: 20%;\">$data[nama_profildinas]</td>";
					echo "<td>$data[deskripsi_profildinas]</td>";
					echo "<td align=\"center\"><a title=\"Edit\" class=\"table-icon edit\" href=\"?module=profildinas&mode=edit&id=$data[id_profildinas]\"></a>&nbsp;&nbsp;&nbsp;<a title=\"Hapus\" class=\"table-icon delete\"href=\"?module=profildinas&mode=delete&id=$data[id_profildinas]\"></a></td>";
				echo "</tr></tbody>";
				$no++;
			}
			echo "</table>";
			echo "</div>";
		break;
		case "edit":
			$query = mysql_query("select * from profildinas where id = '$_GET[id_profildinas]'");
			$data = mysql_fetch_array($query);
			?>
				<div class="full_w">
				<div class="h_title"><b>Manajemen Data Download profildinas</b></div>
					<form action="module/download/action_profildinas.php" method="post" enctype="multipart/form-data">
						<input type="hidden" name="id" value="<?php echo $_GET["id"]; ?>" />
						<table class="admin" cellspacing="5px">
							<tr>
								<td><label>Profil Dinas</label></td>
								<td><input type="text" name="nama_profildinas" style="width: 100%" value="<?php echo $data["nama_profildinas"]; ?>" /></td>
							</tr>
							<tr>
								<td><label>Deskripsi</label></td>
								<td><textarea name="deskripsi_profildinas"><?php echo $data["deskripsi_profildinas"]; ?></textarea></td>
							</tr>
							<tr>
								<td><label>File profildinas</label></td>
								<td><input type="file" name="profildinas" /> &nbsp; &nbsp;<a style="color: #999; text-decoration: none" href="../galeri/<?php echo $data['keterangan_profildinas']; ?>" target="_blank">File profildinas</a></td>
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
				<div class="h_title"><b>Manajemen Data Download Profil Dinas</b></div>
					<form action="module/download/action_profildinas.php" method="post" enctype="multipart/form-data">
						<table class="admin" cellspacing="5px">
							<tr>
								<td><label>Profil Dinas</label></td>
								<td><input type="text" name="nama_profildinas" style="width: 100%" /></td>
							</tr>
							<tr>
								<td><label>Deskripsi</label></td>
								<td><textarea name="deskripsi_profildinas"></textarea></td>
							</tr>
							<tr>
								<td><label>File profildinas</label></td>
								<td><input type="file" name="profildinas" /> &nbsp; &nbsp;Document</td>
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
			mysql_query("delete from profildinas where id = '$_GET[id]'");
			header("location: ?module=profildinas");
		break;
	}
?>
