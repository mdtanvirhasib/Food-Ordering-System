<?php include "../control/userreg.php";?>


<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="../Css/userreg.css">
    </head>

    <body>
        <img src="../uploads/registration.jpg" class="setimg" alt="">
        <form action="">
            <h1>Registration Form</h1>
            <label for="">Name:</label>
            <input type="text" placeholder="Enter Your Name" name="name" id="in">

            <label for="">Address:</label>
            <input type="text" placeholder="Enter Your Adderss" name="address" id=in>

            <label for="">Mobile Number:</label>
            <input type="tel" placeholder="Enter Mobile Number" name="number" id="in">

            <label for="">Email:</label>
            <input type="email" placeholder="Enter Email Address" name="email" id="in">

            <label for="">Password:</label>
            <input type="password" placeholder="Enter Password" name="password" id="in">
            <label for="">Comfirm Password:</label>
            <input type="password" placeholder="Enter Password" name="cpassword" id="in">

            <input type="submit" value="Register" id="reg">

            <a href="../View/userlogin.php" id="li">Already have an account?</a>
        </form>
    </body>
</html>