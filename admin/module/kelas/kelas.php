<?php
	switch($_GET['mode']){
		default:
			?>
				<div class="full_w">
				<div class="h_title"><b>Manajemen Data Kelas</b></div>
				<button type="submit" name="submit" class="ok1" onclick="window.location='?module=kelas&mode=add'">Tambah</button>
			<?php
			echo "<table class=\"admin\" border=\"0\" cellpadding=\"5px\" cellspacing=\"1px\"><thead>
				  <tr bgcolor=\"#ffffff\"><th align=\"center\">No</th><th align=\"center\">Kelas</th><th align=\"center\">Jumlah Siswa</th><th align=\"center\">Jumlah Siswi</th><th align=\"center\">Wali Kelas</th><th align=\"center\">Pengaturan</th></tr></thead>";
			$query = mysql_query("select k.*, g.* from kelas k join guru g where k.nip = g.nip order by k.kelas_id desc");
			$no = 1;
			while ($data = mysql_fetch_array($query)){
				echo "<tbody><tr bgcolor=\"#ffffff\">";
					echo "<td align=\"center\">$no</td>";
					echo "<td>$data[kelas_name]</td>";
					echo "<td>$data[siswa]</td>";
					echo "<td>$data[siswi]</td>";
					echo "<td>$data[guru_name]</td>";
					echo "<td align=\"center\"><a title=\"Edit\" class=\"table-icon edit\" href=\"?module=kelas&mode=edit&id=$data[kelas_id]\"></a>&nbsp;&nbsp;&nbsp;<a title=\"Hapus\" class=\"table-icon delete\"href=\"?module=kelas&mode=delete&id=$data[kelas_id]\"></a></td>";
				echo "</tr></tbody>";
				$no++;
			}
			echo "</table>";
			echo "</div>";
		break;
		case "edit":
			$query = mysql_query("select k.*, g.* from kelas k join guru g where k.nip = g.nip and k.kelas_id = '$_GET[id]'");
			$data = mysql_fetch_array($query);
			?>
				<div class="full_w">
				<div class="h_title"><b>Manajemen Data Kelas</b></div>
					<form action="module/kelas/action.php" method="post">
						<input type="hidden" name="id" value="<?php echo $_GET["id"]; ?>" />
						<table class="admin" cellspacing="5px">
							<tr>
								<td><label>Kelas</label></td>
								<td><input type="text" name="kls" size="80" value="<?php echo $data["kelas_name"]; ?>" /></td>
							</tr>
							<tr>
								<td><label>Jumlah Siswa</label></td>
								<td><input type="text" name="siswa" size="80" value="<?php echo $data["siswa"]; ?>" /></td>
							</tr>
							<tr>
								<td><label>Jumlah Siswi</label></td>
								<td><input type="text" name="siswi" size="80" value="<?php echo $data["siswi"]; ?>" /></td>
							</tr>
							<tr>
								<td><label>Wali Kelas</label></td>
								<td>
                                    <select name="nip">
                                        <option></option>
                                        <?php
                                        	$qnip = mysql_query("select * from guru order by nip desc");
                                        	while ($dnip=mysql_fetch_array($qnip)){
                                        		if ($data['nip'] == $dnip ['nip']){
                                        			echo "<option value=\"$dnip[nip]\" selected>$dnip[guru_name]</option>";
                                        		} else {
                                        			echo "<option value=\"$dnip[nip]\">$dnip[guru_name]</option>";
                                        		}
                                        	}
                                        ?>
                                    </select>
                                </td>
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
				<div class="h_title"><b>Manajemen Data Kelas</b></div>
					<form action="module/kelas/action.php" method="post">
						<table class="admin" cellspacing="5px">
							<tr>
								<td><label>Kelas</label></td>
								<td><input type="text" name="kls" size="80" /></td>
							</tr>
							<tr>
								<td><label>Jumlah Siswa</label></td>
								<td><input type="text" name="siswa" size="80" /></td>
							</tr>
							<tr>
								<td><label>Jumlah Siswi</label></td>
								<td><input type="text" name="siswi" size="80" /></td>
							</tr>
							<tr>
								<td><label>Wali Kelas</label></td>
								<td>
                                    <select name="nip">
                                        <option></option>
                                        <?php
                                        	$qnip = mysql_query("select * from guru order by nip desc");
                                        	while ($dnip=mysql_fetch_array($qnip)){
                                        		echo "<option value=\"$dnip[nip]\">$dnip[guru_name]</option>";
                                        	}
                                        ?>
                                    </select>
                                </td>
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
			mysql_query("delete from kelas where kelas_id = '$_GET[id]'");
			header("location: ?module=kelas");
		break;
	}
?>