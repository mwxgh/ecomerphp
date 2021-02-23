<?php
require_once '../checkadmin.php';

$brand_title = $_POST['brand_title'];

require_once '../../includes/dbconnect.php';
$sql= "insert into brands(brand_title) values ('$brand_title')";
mysqli_query($connect,$sql);
mysqli_close($connect);
header('location:index.php')
?>
