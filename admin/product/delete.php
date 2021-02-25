<?php
 // require_once '../checkadmin.php';
$staff_id = $_GET['staff_id'];

require_once '../../includes/dbconnect.php';
$sql= " delete from staff
where staff_id = '$staff_id'";
mysqli_query($connect,$sql);
mysqli_close($connect);
header('location:index.php');
exit();
