<?php
session_start();
include "../DB/db.php";

$error = "";
$success = "";
$email=$_SESSION['email'];

$a=mysqli_query($conn, "SELECT name,address,mobile FROM users WHERE email='$email'");
$res=mysqli_fetch_assoc($a);

echo "Name: {$res['name']}<br>";
echo "Address: {$res['address']}<br>";
echo "Mobile: {$res['mobile']}";
?>