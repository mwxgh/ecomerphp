<?php
require_once '../checkadmin.php';
$cat_id=$_POST['cat_id'];
$cat_title=$_POST['cat_title'];

require_once '../../includes/dbconnect.php';
$sql= "update categories
set
cat_title='$cat_title'
where cat_id='$cat_id'
";
mysqli_query($connect,$sql);
mysqli_close($connect);
header('location:index.php')
?>
