<?php
$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$email=$_POST['email'];
$password=$_POST['password'];
$telnum=$_POST['telnum'];
$gender=$_POST['gender'];
$level=$_POST['level'];
$address=$_POST['address'];

require_once 'includes/dbconnect.php';
$sql= "insert into staff(first_name,last_name,staff_email,staff_password,staff_tel,staff_gender,staff_level,staff_address) values ('$name','$email','$password','$telnum','$gender','$level','$address')";
mysqli_query($connect,$sql);
mysqli_close($connect);
header('location:index.php');
exit();
?>
