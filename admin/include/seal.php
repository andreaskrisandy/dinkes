<?php
if(isset($_SESSION['MODGOD'])){
	$username	= $_SESSION['username'];
	$seal		= mysql_query("select * from admin where username='$username'");
	$data		= mysql_fetch_array($seal);
	if($_SESSION['seal'] != $data['session']){
        session_destroy();
        ob_end_clean();
        header("location: ../");
	}
} else {
    session_destroy();
    ob_end_clean();
    header("location: ../");
}
?>