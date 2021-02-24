<?php
require_once '../checkadmin.php';

$$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$email=$_POST['email'];
$password=$_POST['password'];
$telnum=$_POST['telnum'];
$gender=$_POST['gender'];
$address=$_POST['address'];
$images = $_FILES['images'];

$array     = explode('/', $image['type']);
$file_type = $array[1];
$imagesname=strtotime("now").".$file_type";

$target_dir = "../../images/";
$target_file = $target_dir . $imagesname;
move_uploaded_file($images["tmp_name"], $target_file);

require_once '../../includes/dbconnect.php';
$sql= "insert into customer(first_name,last_name,customer_email,customer_password,customer_tel,customer_gender,image,customer_address) values ('$first_name','$last_name','$email','$password','$telnum','$gender','$imagesname','$address')";
mysqli_query($connect,$sql);
mysqli_close($connect);
header('location:index.php');
?>
