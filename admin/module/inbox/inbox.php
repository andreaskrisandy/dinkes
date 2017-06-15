<?php
	switch($_GET['mode']){
		default:
			?>
				<div class="full_w">
				<div class="h_title"><b>Pesan Masuk</b></div>
			<?php
			echo "<table border=\"0\" cellpadding=\"5px\" cellspacing=\"1px\"><thead>
				  <tr bgcolor=\"#ffffff\"><th width=\"35\" align=\"center\">No</th><th width=\"150px\" align=\"center\">Nama Pengirim</th><th width=\"150px\" align=\"center\">Email</th><th align=\"center\">Isi Pesan</th><th width=\"50px\" align=\"center\">Hapus</th></tr></thead>";
			$query = mysql_query("select * from tamu");
			$no = 1;
			while ($data = mysql_fetch_array($query)){
				echo "<tbody><tr bgcolor=\"#ffffff\">";
					echo "<td align=\"center\">$no</td>";
					echo "<td>$data[nama_tamu]</td>";
					echo "<td>$data[email_tamu]</td>";
					echo "<td>$data[pesan]</td>";
					echo "<td align=\"center\"><a title=\"Hapus\" class=\"table-icon delete\"href=\"?module=inbox&mode=delete&id=$data[id_tamu]\"></a></td>";
				echo "</tr></tbody>";
				$no++;
			}
			echo "</table>";
			echo "</div>";
		break;
		/*
		case "detail":
			$query = mysql_query("select * from inbox where id_tamu = '$_GET[id]'");
			$data = mysql_fetch_array($query);
			?>
				<div class="full_w">
				<div class="h_title"><b>Manajemen Data inbox</b></div>
					<form action="module/inbox/action.php" method="post">
						<input type="hidden" name="id" value="<?php echo $_GET["id"]; ?>" />
						<table class="inbox" cellspacing="5px">
							<tr>
								<td><label>Nama inbox</label></td>
								<td><input type="text" name="name" size="25" value="<?php echo $data["inbox_name"]; ?>" /></td>
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
									<input id="submit" type="submit" name="detail" value="Update" />
									<input id="reset" type="reset"  value="Batal" onclick="self.history.back()" />
								</td>
							</tr>
						</table>
					</form>
				</div>
			<?php
		break;
		*/
		case "delete":
			mysql_query("delete from tamu where id_tamu = '$_GET[id]'");
			header("location: ?module=inbox");
		break;
	}
?>