<?php
require_once '../checkadmin.php';
$brand_id=$_POST['brand_id'];
$brand_title=$_POST['brand_title'];

require_once '../../includes/dbconnect.php';
$sql= "update brands
set
brand_title='$brand_title'
where brand_id='$brand_id'
";
mysqli_query($connect,$sql);
mysqli_close($connect);
header('location:index.php')
?>
