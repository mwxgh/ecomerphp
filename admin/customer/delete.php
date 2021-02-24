<?php
 // require_once '../checkadmin.php';
$customer_id = $_GET['customer_id'];

require_once '../../includes/dbconnect.php';
$sql= " delete from customer
where customer_id = '$customer_id'";
mysqli_query($connect,$sql);
mysqli_close($connect);
header('location:index.php');
exit();
