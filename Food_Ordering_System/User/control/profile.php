<?php
session_start();
include "../DB/db.php";

$error = "";
$success = "";

if (isset($_POST['update'])) 
    {
        $name = $_POST['name'];
        $address = $_POST['address'];
        $mobile = $_POST['mobile'];

        if(empty($name) || empty($address) || empty($mobile))
            {
                $error = "All fields are required.";
            }
            else
                {
                    $update = "UPDATE users SET name='$name', address='$address', mobile='$mobile' WHERE email='$email'";
                }
    }
