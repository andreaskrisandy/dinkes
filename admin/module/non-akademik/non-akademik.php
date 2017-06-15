<?php
		switch($_GET['id']){
			default:
				$query = mysql_query("select * from non_akademik where id='1'");
			break;
			case "1":
				$query = mysql_query("select * from non_akademik where id='1'");
			break;
			case "2":
				$query = mysql_query("select * from non_akademik where id='2'");
			break;
			case "3":
				$query = mysql_query("select * from non_akademik where id='3'");
			break;
		}
		$data = mysql_fetch_array($query);
		?>
		<script type="text/javascript" src="tinymcpuk/tiny_mce_src.js"></script>
		<script type="text/javascript" src="tinymcpuk/script.tinymce.js"></script>
		<div class="full_w">
			<div class="h_title"><strong><?php echo $data['judul'];?></strong></div>
			<form action="module/non-akademik/action.php" method="post" enctype="multipart/form-data">
				<input type="hidden" name="id" value="<?php echo $_GET["id"]; ?>" />
				<table>
					<tbody>
						<tr><td><textarea name="isi" ><?php echo $data['isi']; ?></textarea></td></tr>
						<tr><td>&nbsp;</td></tr>
						<tr><td><button type="submit" name="submit" class="ok">Update</button></td></tr>
					</tbody>
				</table>
			</form>
		</div>