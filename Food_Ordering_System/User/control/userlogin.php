<?php
session_start();
include "../DB/db.php";

$error="";
if($_SERVER['REQUEST_METHOD']=='POST')
    {
        $email=$_POST['email'];
        $password=$_POST['password'];
    

    if(empty($email)||empty($password))
        {
            $error="Email and password can't be empty";
        }

        else
            {
                $sql="SELECT * FROM users where email='$email' and password ='$password'";

                $res=$conn->query($sql);

                if($res->num_rows==1)
                    {
                        $user=mysqli_fetch_assoc($res);

                        $_SESSION['user']=$user['id'];
                        $_SESSION['email'] = $user['email'];
                        $_SESSION['role']=$user['role'];

                        if($user['role']=='customer')
                            {
                                header("Location: ../View/userhome.php");
                                exit;   
                            }

                            elseif($user['role']=='admin')
                                {
                                    header("Location: ../../Admin/View/adminhome.php");                      
                                }

                        
                    }
                    else
                        {
                            $error = "Invalid Email or Password";
                        }

            }
            }

?>