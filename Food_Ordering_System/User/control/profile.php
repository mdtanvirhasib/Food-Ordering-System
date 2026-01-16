<?php
session_start();
include "../DB/db.php";

$error = "";
$success = "";
$email=$_SESSION['email'];


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

                    if(mysqli_query($conn,$update))
                        {
                            $success="Profile update successfully.";
                        }
                        else
                            {
                                $error=mysqli_error($conn);
                            }
                
                }
    }


if(isset($_POST['delete']))
    {
        mysqli_query($conn, "DELETE FROM users WHERE email='$email'");
        session_destroy();
        header("Location: userlogin.php");
        exit;
    }

    ?>