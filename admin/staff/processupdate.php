<?php
require_once '../checkadmin.php';
$staff_id=$_POST['staff_id'];
$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$email=$_POST['email'];
$telnum=$_POST['telnum'];
$gender=$_POST['gender'];
$address=$_POST ['address'];
// $newimages = $_FILES['newimages'];
//
// if($newimages['size']==0){
// 	$fileimages = $_POST['preimages'];
// }
// else{
// 	$array     = explode('/', $newimages['type']);
// 	$file_type = $array[1];
// 	$fileimages   = strtotime("now").".$file_type";
// 	$target_dir = "../../images/";
// 	$target_file = $target_dir . $fileimages;
// 	move_uploaded_file($newimages["tmp_name"], $target_file);
// }


require_once '../../includes/dbconnect.php';
$sql = "update staff
set
first_name = '$first_name',
last_name = '$last_name',
staff_email = '$email',
staff_tel = '$telnum',
staff_gender = '$gender',
staff_address = '$address'
where
staff_id = '$staff_id'
";

mysqli_query($connect,$sql);
mysqli_close($connect);
header('location:index.php');
