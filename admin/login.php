<?php
    session_start();
    error_reporting(0);
    if (isset($_SESSION['MODGOD'])){
        ob_end_clean();
        header('location: dashboard.php?module=main');
    } else {
        if (isset($_POST['submit'])) {
            $username	= $_POST['username'];
            $password	= md5($_POST['password']);
            $_SESSION['MODGOD']	= md5(time());
            include("include/mysql.php");
            $login_query	= mysql_query("select * from admin where username='$username' and password='$password'");
            $login_num_rows	= mysql_num_rows($login_query);
            if ($login_num_rows > 0){
                $login_fetch_array			= mysql_fetch_array($login_query);
                $_SESSION['username']		= $login_fetch_array['username'];
                $_SESSION['password']		= $login_fetch_array['password'];
				$_SESSION['name']			= $login_fetch_array['admin_name'];
                $sid    					= session_id();	
                session_regenerate_id();
                $sid    					= session_id();
                $_SESSION['seal']			= $sid;
                mysql_query("update admin set session='$sid' where username='$username'");
                mysql_close();
                ob_end_clean();
                header('location: dashboard.php?module=main');
            } else {
                mysql_close();
                session_destroy();
                ob_end_clean();
                header("location: ./");
            }
        } else {
            session_destroy();
            ob_end_clean();
            header("location: ./");
        }
    }
?>