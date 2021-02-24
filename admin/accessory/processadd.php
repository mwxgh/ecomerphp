<?php
require_once '../checkadmin.php';

$access_title = $_POST['access_title'];

require_once '../../includes/dbconnect.php';
$sql= "insert into accessories(access_title) values ('$access_title')";
mysqli_query($connect,$sql);
mysqli_close($connect);
header('location:index.php')
?>
