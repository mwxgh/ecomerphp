<?php
session_start();
if(!isset($_SESSION['staff_level']) || $_SESSION['staff_level']!=1){
	header('location:../index.php?error=Phải đăng nhập đã');
	exit();
}
?>
