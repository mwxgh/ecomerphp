<?php
// require_once '../checkadmin.php';
$name=$_POST['name'];
$cat_id=$_POST['cat_id'];
$brand_id=$_POST['brand_id'];
$access_id=$_POST['access_id'];
$price=$_POST['price'];
$description=$_POST['description'];
$images=$_FILES['images'];

$array     = explode('/', $images['type']);
$file_type = $array[1];
$imagesname=strtotime("now").".$file_type";

$target_dir = "../../image/";
$target_file = $target_dir . $imagesname;
move_uploaded_file($images["tmp_name"], $target_file);

require_once '../../includes/dbconnect.php';
$sql = "insert into products(product_name,brand_id,cat_id,access_id,product_price,product_images,product_description)
values ('$name','$brand_id','$cat_id','$access_id','$price','$imagesname','$description')";

mysqli_query($connect,$sql);
mysqli_close($connect);
header('location:index.php');
