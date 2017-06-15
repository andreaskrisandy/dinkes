<?php
    session_start();
    error_reporting(0);
    if (isset($_SESSION['login'])){
        ob_end_clean();
        header('location: admin/index.php');
    } else {
        if (isset($_POST['username']) and isset($_POST['password'])) {
            $username	= $_POST['username'];
            $password	= md5($_POST['password']);
            include("include/mysql.php");
            $login_query	= mysql_query("select * from admin where username='$username' and password='$password'");
            $login_num_rows	= mysql_num_rows($login_query);
            if ($login_num_rows > 0){
                $login_fetch_array	= mysql_fetch_array($login_query);
				$_SESSION['login']	= md5(time());
                $_SESSION['uid']	= $login_fetch_array[admin_id];
				$_SESSION['uname']	= $login_fetch_array[username];
				$_SESSION['name']	= $login_fetch_array[admin_name];
                mysql_close();
                ob_end_clean();
                header('location: admin/index.php');
            } else {
                mysql_close();
                session_destroy();
                ob_end_clean();
                header('location: dashboard.php?page=admin');
            }
        } else {
            session_destroy();
            ob_end_clean();
            header('location: dashboard.php?page=admin');
        }
    }
?>