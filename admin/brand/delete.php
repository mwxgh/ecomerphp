<?php
 // require_once '../checkadmin.php';
$brand_id = $_GET['brand_id'];

require_once '../../includes/dbconnect.php';
$sql= " delete from brands
where brand_id = '$brand_id'";
mysqli_query($connect,$sql);
mysqli_close($connect);
header('location:index.php');
exit();
