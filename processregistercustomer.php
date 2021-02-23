<?php
$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$email=$_POST['email'];
$password=$_POST['password'];
$telnum=$_POST['telnum'];
$gender=$_POST['gender'];
$address=$_POST['address'];

require_once 'includes/dbconnect.php';
$sql= "insert into customer(first_name,last_name,customer_email,customer_password,customer_tel,customer_gender,customer_address) values ('$first_name','$last_name','$email','$password','$telnum','$gender','$address')";
mysqli_query($connect,$sql);
mysqli_close($connect);
header('location:index.php');
exit();
?>
