<?php
include "../DB/db.php";
$result = mysqli_query($conn, "SELECT * FROM voucher");

?>
<!DOCTYPE html>
<html>

<head>
    <title>My voucher</title>
    <link rel="stylesheet" href="../Css/viewvoucher.css">
</head>

<body>
    <form action="" id="links">
        <a href="../View/userhome.php">Home</a>
        <a href="../View/cart.php">My cart</a>
        <a href="../View/viewvoucher.php">Voucher</a>
        <a href="../control/logout.php" class="logout">Logout</a>
    </form>
    <h2>Vouchers</h2>
    <?php while ($a = mysqli_fetch_assoc($result)) { ?>
        <form action="" class="vaucher">
            <p>Code: <?= $a['code'] ?></p>
            <p>Discount: <?= $a['discount'] ?>%</p>
        </form>
    <?php } ?>

</body>

</html>