<?php include "../Controller/adminlogin.php";?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="../css/adminlogin.css">
    </head>

    <body>
        <form method="post">
            <h1>Admin Login</h1>
     
                        <label for="">Email ID:</label>
     
                        <input type="text" name="email" placeholder="Enter Email ID" id="in">

                        <label for="">Password:</label>

                        <input type="password" name="password" placeholder="Enter Password" id="in">

                        <a href="" id="fp">Forgot Password?</a>
            <input type="submit" value="Login" id="sub">
            <a href="../View/adminreg.php" id="reg">Create Account</a>

        </form>
        <center>
            <p style="color:red;"><?php echo $error; ?></p>
        </center>
    </body>
</html>