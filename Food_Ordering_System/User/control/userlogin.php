<?php
session_start();
include "../DB/db.php";

$error="";
if($_SERVER['REQUEST_METHOD']=='POST')
    {
        $email=$_POST['email'];
        $password=$_POST['password'];
    }

    if(empty($email)||empty($password))
        {
            $error="Email and password can't be empty";
        }

        else
            {
                $sql="SELECT * FROM users where email='$email' and password ='$password' and role='customer'";

                $res=$conn->query($sql);

                if($res->num_rows==1)
                    {
                        $user=mysqli_fetch_assoc($res);

                        $_SESSION['user']=$user['id'];
                        $_SESSION['email'] = $user['email'];

                        header("Location: ../View/userhome.php");
                        exit;
                    }
                    else
                        {
                            $error = "Invalid Email or Password";
                        }

            }

?>