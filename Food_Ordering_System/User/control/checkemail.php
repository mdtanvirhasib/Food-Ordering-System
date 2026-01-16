<?php
include "function.php";

$error="";
$success="";
if(isset($_GET['email']))
    {
        $error="Email already exist.";
    }
    else
        {
            $success="Email available.";
        }

?>