<?php
	$query = mysql_query("select * from page where page_id='1'");
	$data = mysql_fetch_array($query);
?>
<script type="text/javascript" src="tinymcpuk/tiny_mce_src.js"></script>
<script type="text/javascript" src="tinymcpuk/script.tinymce.js"></script>
<div class="full_w">
	<div class="h_title"><strong><?php echo $data['page_title'];?></strong></div>
	<form action="module/main/action.php" method="post">
		<table>
			<tbody>
				<tr><td><textarea name="sambutan" ><?php echo $data['page_content']; ?></textarea></td></tr>
				<tr><td>&nbsp;</td></tr>
				<tr><td><button type="submit" name="submit" class="ok">Update</button></td></tr>
			</tbody>
		</table>
	</form>
</div>