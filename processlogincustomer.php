<?php

$email = $_POST['email'];
$password = $_POST['password'];

require_once 'includes/dbconnect.php';

$sql = "select * from customer where customer_email = '$email' and customer_password = '$password'";
$array = mysqli_query($connect,$sql);
$count = mysqli_num_rows($array);

if($count==1){
	$each = mysqli_fetch_array($array);
	session_start();
	$_SESSION['customer_id']  = $each['customer_id'];
	$_SESSION['first_name'] = $each['first_name'];
	$_SESSION['last_name'] = $each['last_name'];

	if(isset($_POST['remember_login'])){
		setcookie('customer_id',$each['customer_id'],time()+86400*60);
	}

	header('location:customer/index.php');
	exit();
}
else{
	header('location:logincustomer.php?error=Email hoặc mật khẩu không chính xác . Vui lòng đăng nhập lại !');
	exit();
}
?>
