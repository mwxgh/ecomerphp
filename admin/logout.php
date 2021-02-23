<?php
session_start();
session_destroy();
setcookie('staff_id','',time()-1000);
header('location:../index.php');
exit();
?>
