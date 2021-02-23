<?php
session_start();
if(!isset($_SESSION['customer_id'])){
	header('location:../index.php?error=Lỗi đăng nhập');
	exit();
}
?>
