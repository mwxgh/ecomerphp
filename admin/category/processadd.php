<?php
require_once '../checkadmin.php';

$cat_title = $_POST['cat_title'];

require_once '../../includes/dbconnect.php';
$sql= "insert into categories(cat_title) values ('$cat_title')";
mysqli_query($connect,$sql);
mysqli_close($connect);
header('location:index.php')
?>
