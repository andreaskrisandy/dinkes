<?php
	switch($_GET['mode']){
		default:
			?>
				<div class="full_w">
				<div class="h_title"><b>Manajemen Data Admin</b></div>
				<button type="submit" name="submit" class="ok1" onclick="window.location='?module=admin&mode=add'">Tambah</button>
			<?php
			echo "<table class=\"admin\" border=\"0\" cellpadding=\"5px\" cellspacing=\"1px\"><thead>
				  <tr bgcolor=\"#ffffff\"><th align=\"center\">No</th><th align=\"center\">Username</th><th align=\"center\">Nama Admin</th><th align=\"center\">Pengaturan</th></tr></thead>";
			$query = mysql_query("select * from admin");
			$no = 1;
			while ($data = mysql_fetch_array($query)){
				echo "<tbody><tr bgcolor=\"#ffffff\">";
					echo "<td align=\"center\">$no</td>";
					echo "<td>$data[username]</td>";
					echo "<td>$data[admin_name]</td>";
					echo "<td align=\"center\"><a title=\"Edit\" class=\"table-icon edit\" href=\"?module=admin&mode=edit&user=$data[username]\"></a>&nbsp;&nbsp;&nbsp;<a title=\"Hapus\" class=\"table-icon delete\"href=\"?module=admin&mode=delete&user=$data[username]\"></a></td>";
				echo "</tr></tbody>";
				$no++;
			}
			echo "</table>";
			echo "</div>";
		break;
		case "edit":
			$query = mysql_query("select * from admin where username = '$_GET[user]'");
			$data = mysql_fetch_array($query);
			?>
				<div class="full_w">
				<div class="h_title"><b>Manajemen Data Admin</b></div>
					<form action="module/admin/action.php" method="post">
						<input type="hidden" name="user" value="<?php echo $_GET["user"]; ?>" />
						<table class="admin" cellspacing="5px">
							<tr>
								<td><label>Nama Admin</label></td>
								<td><input type="text" name="name" size="25" value="<?php echo $data["admin_name"]; ?>" /></td>
							</tr>
							<tr>
								<td><label>Password</label></td>
								<td><input type="password" name="password" size="25" value="passwd" /></td>
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
				<div class="h_title"><b>Manajemen Data Admin</b></div>
					<form action="module/admin/action.php" method="post">
						<table class="admin" cellspacing="5px">
							<tr>
								<td width="150px"><label>Username</label></td>
								<td><input type="text" name="username" size="45" autofocus/></td>
							</tr>
							<tr>
								<td><label>Password</label></td>
								<td><input type="password" name="password" size="45" /></td>
							</tr>
							<tr>
								<td><label>Nama Admin</label></td>
								<td><input type="text" name="name" size="45" /></td>
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
			mysql_query("delete from admin where username = '$_GET[user]'");
			header("location: ?module=admin");
		break;
	}
?>