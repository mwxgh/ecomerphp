<?php
 require_once '../checkadmin.php';
$access_id = $_GET['access_id'];

require_once '../../includes/dbconnect.php';
$sql= " delete from accessories
where access_id = '$access_id'";
mysqli_query($connect,$sql);
mysqli_close($connect);
header('location:index.php');
exit();
