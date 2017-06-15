<?php
	if (isset($_POST['submit'])) {
		mysql_query("update page set page_content = '$_POST[kontak]' where page_id = '4'");
		header("location: ?module=contact");
	} else {
		$query = mysql_query("select * from page where page_id='4'");
		$data = mysql_fetch_array($query);
		?>
		<script type="text/javascript" src="tinymcpuk/tiny_mce_src.js"></script>
		<script type="text/javascript" src="tinymcpuk/script.tinymce.js"></script>
		<div class="full_w">
			<div class="h_title"><strong><?php echo $data['page_title'];?></strong></div>
			<form action="?module=contact" method="post" enctype="multipart/form-data">
				<table>
					<tbody>
						<tr><td><textarea name="kontak" ><?php echo $data['page_content']; ?></textarea></td></tr>
						<tr><td>&nbsp;</td></tr>
						<tr><td><button type="submit" name="submit" class="ok">Update</button></td></tr>
					</tbody>
				</table>
			</form>
		</div>
<?php
	}
?>