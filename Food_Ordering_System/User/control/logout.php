<?php
session_start();

session_destroy();
header("Location:../View/userlogin.php");
exit();

?>