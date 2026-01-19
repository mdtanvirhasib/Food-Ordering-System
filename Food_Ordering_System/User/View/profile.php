<?php
include "../control/profile.php";
?>

<!DOCTYPE html>
<html>
    <head>
        <title>My profile</title>
        <link rel="stylesheet" href="../Css/profile.css">
    </head>

    <body>
        <h2>My profile</h2>
            <form action="" id="links">
                <a href="../View/userhome.php">Home</a>
                <a href="../View/cart.php">My cart</a>
                <a href="../View/viewvoucher.php">Voucher</a>
                <a href="../View/profile.php">My profile</a>
                <a href="../control/logout.php" class="logout">Logout</a>
            </form>
        <form action="" method="post" class="form">
            <label for="">Name: </label>
            <input type="text" name="name" value="<?= $user['name'] ?>">

            <label for="">Address: </label>
            <input type="text" name="address" value="<?= $user['address'] ?>">

            <label for="">Mobile: </label>
            <input type="text" name="mobile" value="<?= $user['mobile'] ?>">

            <input type="submit" value="update" name="update" class="update">
            <input type="submit" value="delete" name="delete" class="delete">
        </form>

        <form action="" class="form">
            <p id="ajex"></p>
            
        </form>
        <button onclick="profileajex()">Load profile</button>
        <script src="../js/profileajex.js"></script>
    </body>
</html>