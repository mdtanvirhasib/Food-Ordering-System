<?php
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
    else
    {
        $hasspassword=password_hash($password,PASSWORD_DEFAULT);
 
        $sql= "INSERT INTO users(name,address,mobile,email,password) VALUES ('$name','$address','$mobile','$email','$hassPassword')";
        if($conn->query($sql))
        {
            $success="Registration Complete you can do the login";
        }
 
        else
        {
            $error = "Error: ".$conn->error;
        }
    }

}
?>