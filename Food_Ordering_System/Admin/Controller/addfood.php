<?php
include "../Project/Food_Ordering_System/DB/db.php";

$success="";
$error="";

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $name=$_POST["name"];
    $price=$_POST["price"];

    if(empty($name)||empty($price))
    {
        $error="Fill up all fields";
    }
    else
    {
        
    }
}



?>