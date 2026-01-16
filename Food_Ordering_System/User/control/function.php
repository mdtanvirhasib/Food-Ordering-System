<?php
include "../DB/db.php";
function checkemail()
{
    $sql="SELECT * FROM users WHERE email='$email'";
    $result=mysqli_query($sql);
    return mysqli_num_rows($result)>0;
}

?>