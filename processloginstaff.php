<?php
$email = $_POST['email'];
$password = $_POST['password'];

require_once 'includes/dbconnect.php';

$sql = "select * from staff
where staff_email = '$email' and staff_password = '$password'";
$array = mysqli_query($connect,$sql);
$count = mysqli_num_rows($array);
if($count==1){
	session_start();
	$each = mysqli_fetch_array($array);
	$_SESSION['staff_id']     = $each['staff_id'];
	$_SESSION['first_name']    = $each['first_name'];
    $_SESSION['last_name']    = $each['last_name'];
	$_SESSION['level'] = $each['level'];

	if(isset($_POST['remember_login'])){
		setcookie('staff_id',$each['staff_id'],time()+86400*60);
	}

	header('location:admin/index.php');
	exit();
}
else{
	header('location:index.php?error=Đăng nhập thất bại');
	exit();
}
