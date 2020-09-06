<?php
session_start();
if(isset($_SESSION["student_logged_in"]) or isset($_SESSION["admin_logged_in"]) or isset($_SESSION["lecturer_logged_in"])){
	$_SESSION=[];
	if(ini_get('session.use_cookies')){
		//$parameters = session_get_cookie_params();
		setcookie(session_name(), time()-1, "/");
	}
	session_destroy();
	header("Location:login_page.php");
}else{
	header("Location:login_page.php");
}
?>