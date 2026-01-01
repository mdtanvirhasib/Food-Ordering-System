<?php
include "../DB/db.php";

$success="";
$error="";
$imgerr="";
$imagepath="";

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
        $image= $_FILES["image"]["name"];
        if(move_uploaded_file($_FILES["image"]["tmp_name"],"../uploads/".$_FILES["image"]["name"]))
        {
            $imagepath="../uploads/".$_FILES["image"]["name"];
            $imgerr="File Uploaded.";
        }
        else
        {
            $imgerr="No file is upload.";
        }

        $sql="INSERT INTO food(name,price,image) VALUES('$name','$price','$imagepath')";
        if($conn->query($sql))
        {
            $success="Food added successfully.";
        }
        else
        {
            $error="Error: " . $conn->error;
        }


    }
}



?>