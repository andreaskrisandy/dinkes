<?php
    session_start();
    error_reporting(0);
    if (isset($_SESSION['MODGOD'])){
        ob_end_clean();
        header('location: dashboard.php?module=main');
    } else {
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="pl" xml:lang="pl">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="author" content="Paweł 'kilab' Balicki - kilab.pl" />
<title>Admin Panel</title>
<link rel="shortcut icon" href="img/icon.jpg">
<link rel="stylesheet" type="text/css" href="css/login.css" media="screen" />
</head>
<body>
<div class="wrap">
	<div id="content">
		<div id="main">
			<h2>Admin Panel</h2>
			<div class="full_w">
				<form action="login.php" method="post">
					<label for="login">Username:</label>
					<input id="login" name="username" class="text" autofocus />
					<label for="pass">Password:</label>
					<input id="pass" name="password" type="password" class="text" />
					<div class="sep"></div>
					<button type="submit" name="submit" class="ok">Login</button>
				</form>
			</div>
		</div>
	</div>
</div>
</body>
</html>
<?php
    }
?>