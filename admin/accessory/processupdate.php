<?php
// require_once '../checkadmin.php';
$access_id=$_POST['access_id'];
$access_title=$_POST['access_title'];

require_once '../../includes/dbconnect.php';
$sql= "update accessories
set
access_title='$access_title'
where access_id='$access_id'
";
mysqli_query($connect,$sql);
mysqli_close($connect);
header('location:index.php')
?>
