<?php
 require_once '../checkadmin.php';
$cat_id = $_GET['cat_id'];

require_once '../../includes/dbconnect.php';
$sql= " delete from categories
where cat_id = '$cat_id'";
mysqli_query($connect,$sql);
mysqli_close($connect);
header('location:index.php');
exit();
