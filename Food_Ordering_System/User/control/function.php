<?php
include "../DB/db.php";
function checkemail($conn,$email)
{
    $sql="SELECT * FROM users WHERE email='$email'";
    $result=mysqli_query($conn,$sql);
    return mysqli_num_rows($result)>0;
}



?>
<script>
    function ajexforemail()
    {
        let email=document.getElementById("email").value;

        if(email=="")
        {
            document.getElementById("checkemail").innerHTML="";
            return;
        }

        let xhttp=new XMLHttpRequest();
        xhttp.onreadystatechange=function()
        {
            if(this.readyState===4 && this.status===200)
            {
                document.getElementById("checkemail").innerHTML=this.responseText;
            }
        }
        xhttp.open("GET","../control/checkemail.php",true);
        xhttp.send();
    }
</script>