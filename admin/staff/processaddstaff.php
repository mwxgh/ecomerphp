<?php
require_once '../checkadmin.php';

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$user_name = $_POST['user_name'];
$tel_num = $_POST['tel_num'];
$email = $_POST['email'];
$password = $_POST['password'];
$address = $_POST['address'];
$gender = $_POST['gender'];
$user_type = $_POST['user_type'];
$image = $_FILES['image'];
$description = $_POST['description'];

$array     = explode('/', $image['type']);
$file_type = $array[1];
$imagesname=strtotime("now").".$file_type";

$target_dir = "../images/";
$target_file = $target_dir . $imagesname;
move_uploaded_file($images["tmp_name"], $target_file);

require_once '../includes/dbconnect.php';
$sql= "insert into users(first_name,last_name,user_name,tel_num,email,password,address,gender,user_type,image,description) values ('$first_name','$last_name',''$user_name','$tel_num',$email','$password','$address','$gender','$user_type','$imagesname','$description')";
mysqli_query($connect,$sql);
mysqli_close($connect);
header('location:staffs.php')
?>
