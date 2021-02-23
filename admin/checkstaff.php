<?php
session_start();
if(!isset($_SESSION['user_name']) || $_SESSION['user_type']!= 2 ){
	header('location:../login.php?error=Đăng nhập vào đã nhé');
	exit();
}
?>
