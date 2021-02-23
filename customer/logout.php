<?php
session_start();
session_destroy();
setcookie('customer_id','',time()-1000);
header('location:../index.php');
exit();
?>
