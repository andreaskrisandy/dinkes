<?php

		$query = mysql_query("select * from kepsek where id='1'");
		$data = mysql_fetch_array($query);
?>
		<div class="full_w">
			<div class="h_title"><strong><?php echo $data['title'];?></strong></div>
			<form action="module/kepsek/action.php" method="post" enctype="multipart/form-data">
				<table>
					<tbody>
						<tr><td><textarea name="profil" ><?php echo $data['profil']; ?></textarea></td></tr>
						<tr><td><input type="file" name="kepsek" /> &nbsp; &nbsp;Foto Kepala Sekolah</td></tr>
						<tr><td>&nbsp;</td></tr>
						<tr><td><button type="submit" name="submit" class="ok">Update</button></td></tr>
					</tbody>
				</table>
			</form>
		</div>