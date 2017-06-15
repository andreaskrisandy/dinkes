<?php
	switch($_GET['mode']){
		default:
			?>
				<div class="full_w">
				<div class="h_title"><b>Manajemen Data Jadwal</b></div>
				<button type="submit" name="submit" class="ok1" onclick="window.location='?module=jadwal&mode=add'">Tambah</button>
			<?php
			echo "<table class=\"admin\" border=\"0\" cellpadding=\"5px\" cellspacing=\"1px\"><thead>
				  <tr bgcolor=\"#ffffff\"><th align=\"center\">No</th><th align=\"center\">Kelas</th><th align=\"center\">Hari</th><th align=\"center\">Jam</th><th align=\"center\">Kode Mapel</th><th align=\"center\">Mata Pelajaran</th><th align=\"center\">Guru</th><th align=\"center\">Pengaturan</th></tr></thead>";
			$query = mysql_query("select j.*, k.*, g.* from jadwal j join kelas k, guru g where j.kelas_id = k.kelas_id and j.nip = g.nip order by j.id desc");
			$no = 1;
			while ($data = mysql_fetch_array($query)){
				echo "<tbody><tr bgcolor=\"#ffffff\">";
					echo "<td align=\"center\">$no</td>";
					echo "<td>$data[kelas_name]</td>";
					echo "<td>$data[hari]</td>";
					echo "<td>$data[jam]</td>";
                    echo "<td>$data[kmapel]</td>";
					echo "<td>$data[mapel]</td>";
					echo "<td>$data[guru_name]</td>";
					echo "<td align=\"center\"><a title=\"Edit\" class=\"table-icon edit\" href=\"?module=jadwal&mode=edit&id=$data[id]\"></a>&nbsp;&nbsp;&nbsp;<a title=\"Hapus\" class=\"table-icon delete\"href=\"?module=jadwal&mode=delete&id=$data[id]\"></a></td>";
				echo "</tr></tbody>";
				$no++;
			}
			echo "</table>";
			echo "</div>";
		break;
		case "edit":
			$query = mysql_query("select j.*, k.*, g.* from jadwal j join kelas k, guru g where j.kelas_id = k.kelas_id and j.nip = g.nip and j.id = '$_GET[id]'");
			$data = mysql_fetch_array($query);
			?>
				<div class="full_w">
				<div class="h_title"><b>Manajemen Data Jadwal</b></div>
					<form action="module/jadwal/action.php" method="post">
						<input type="hidden" name="id" value="<?php echo $_GET["id"]; ?>" />
						<table class="admin" cellspacing="5px">
							<tr>
								<td><label>Kelas</label></td>
								<td>
                                    <select name="kls">
                                        <option></option>
                                        <?php
                                        	$qkls = mysql_query("select * from kelas order by kelas_id desc");
                                        	while ($dkls=mysql_fetch_array($qkls)){
                                        		if ($data['kelas_id'] == $dkls['kelas_id']){
                                        			echo "<option value=\"$dkls[kelas_id]\" selected>$dkls[kelas_name]</option>";
                                        		} else {
                                        			echo "<option value=\"$dkls[kelas_id]\">$dkls[kelas_name]</option>";
                                        		}
                                        	}
                                        ?>
                                    </select>
                                </td>
							</tr>
							<tr>
								<td><label>Hari</label></td>
								<td>
                                    <select name="hari">
                                        <option></option>
                                        <option value="Senin" <?php if ($data['hari'] == 'Senin') { echo "selected"; } ?>>Senin</option>
                                        <option value="Selasa" <?php if ($data['hari'] == 'Selasa') { echo "selected"; } ?>>Selasa</option>
                                        <option value="Rabu" <?php if ($data['hari'] == 'Rabu') { echo "selected"; } ?>>Rabu</option>
                                        <option value="Kamis" <?php if ($data['hari'] == 'Kamis') { echo "selected"; } ?>>Kamis</option>
                                        <option value="Jumat" <?php if ($data['hari'] == 'Jumat') { echo "selected"; } ?>>Jumat</option>
                                        <option value="Sabtu" <?php if ($data['hari'] == 'Sabtu') { echo "selected"; } ?>>Sabtu</option>
                                    </select>
                                </td>
							</tr>
							<tr>
								<td><label>Jam</label></td>
								<td><input type="text" name="jam" size="80" value="<?php echo $data["jam"]; ?>" /></td>
							</tr>
                            <tr>
                                <td><label>Kode Mapel</label></td>
                                <td><input type="text" name="kmapel" size="80" value="<?php echo $data["kmapel"]; ?>" /></td>
                            </tr>
							<tr>
								<td><label>Mata Pelajran</label></td>
								<td><input type="text" name="mapel" size="80" value="<?php echo $data["mapel"]; ?>" /></td>
							</tr>
							<tr>
								<td><label>Guru</label></td>
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
				<div class="h_title"><b>Manajemen Data Jadwal</b></div>
					<form action="module/jadwal/action.php" method="post">
						<table class="admin" cellspacing="5px">
							<tr>
								<td><label>Kelas</label></td>
								<td>
                                    <select name="kls">
                                        <option></option>
                                        <?php
                                        	$qkls = mysql_query("select * from kelas order by kelas_id desc");
                                        	while ($dkls=mysql_fetch_array($qkls)){
                                        		echo "<option value=\"$dkls[kelas_id]\">$dkls[kelas_name]</option>";
                                        	}
                                        ?>
                                    </select>
                                </td>
							</tr>
							<tr>
								<td><label>Hari</label></td>
								<td>
                                    <select name="hari">
                                        <option></option>
                                        <option value="Senin">Senin</option>
                                        <option value="Selasa">Selasa</option>
                                        <option value="Rabu">Rabu</option>
                                        <option value="Kamis">Kamis</option>
                                        <option value="Jumat">Jumat</option>
                                        <option value="Sabtu">Sabtu</option>
                                    </select>
                                </td>
							</tr>
							<tr>
								<td><label>Jam</label></td>
								<td><input type="text" name="jam" size="80" /></td>
							</tr>
                            <tr>
                                <td><label>Kode Mapel</label></td>
                                <td><input type="text" name="kmapel" size="80" /></td>
                            </tr>
							<tr>
								<td><label>Mata Pelajran</label></td>
								<td><input type="text" name="mapel" size="80" /></td>
							</tr>
							<tr>
								<td><label>Guru</label></td>
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
			mysql_query("delete from jadwal where id = '$_GET[id]'");
			header("location: ?module=jadwal");
		break;
	}
?>