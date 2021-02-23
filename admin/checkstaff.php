<?php
session_start();
if(!isset($_SESSION['staff_level'])){
	header('location:../loginstaff.php?error=Vui lòng đăng nhập lại !');
	exit();
}
?>
