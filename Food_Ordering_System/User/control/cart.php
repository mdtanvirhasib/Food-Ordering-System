<?php
session_start();
include "../DB/db.php";


$cart_items = $cart_items ?? [];
$total = $total ?? 0;
$discount = $discount ?? 0;
$payable = $payable ?? 0;
$msg = $msg ?? "";

if($_SERVER['REQUEST_METHOD']=='POST')
    {
        $id=$_POST['id'];
        $q=mysqli_query($conn,"SELECT * FROM food WHERE id='$id");

    }
?>