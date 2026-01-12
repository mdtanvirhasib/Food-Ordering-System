<?php
include "../DB/db.php";

$error="";
$success="";

if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $code=$_POST['code'];
        $discount=$_POST['discount'];

        if(empty($code)||empty($discount))
            {
                $error="All fields required";
            } 
        else 
            {
                $sql="INSERT INTO voucher(code,discount)VALUES('$code','$discount')";
            
        if($conn->query($sql))
        {
            $success="Vaucher added successfully.";
        }
        else
        {
            $error="Error: " . $conn->error;
        }
    }
    }




?>