<?php
		$query = mysql_query("select * from page where page_id='3'");
		$data = mysql_fetch_array($query);
?>
		<div class="full_w">
			<div class="h_title"><strong><?php echo $data['page_title'];?></strong></div>
			<form action="module/history/action.php" method="post" enctype="multipart/form-data">
				<table>
					<tbody>
						<tr><td><textarea name="sejarah" ><?php echo $data['page_content']; ?></textarea></td></tr>
						<tr><td>&nbsp;</td></tr>
						<tr><td><button type="submit" name="submit" class="ok">Update</button></td></tr>
					</tbody>
				</table>
			</form>
		</div>