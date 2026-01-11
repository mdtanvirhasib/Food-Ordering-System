<?php
session_start();
include "../DB/db.php";

$error="";
$success="";

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $name=$_POST["name"];
    $address=$_POST["address"];
    $mobile=$_POST["mobile"];
    $email=$_POST['email'];
    $password=$_POST["password"];
    $cpassword=$_POST["cpassword"];

    if(empty($name)||empty($address)||empty($mobile)||empty($email)||empty($password)||empty($cpassword))
    {
        $error="All field must be fill_up";
    }
    elseif(!preg_match("/^[a-zA-Z ]*$/",$name))
    {
        $error ="Only letters and white space allowed";
    }

    elseif(!filter_var($email,FILTER_VALIDATE_EMAIL))
        {
            $error = "Invalid email format";
        }
    elseif(strlen($password)<6)
        {
            $error="Password must be at least 6 character.";
        }

        elseif ($password!=$cpassword) 
        {
            $error="Password and confirm password are not same.";
        }


    else
    {
 
        $sql= "INSERT INTO users(name,address,mobile,email,password) VALUES ('$name','$address','$mobile','$email','$password')";
        if($conn->query($sql))
        {
            $success="Registration Complete.";
            header("Location: ../View/userlogin.php");
        }
 
        else
        {
            $error = "Error: ".$conn->error;
        }
    }

}
?>