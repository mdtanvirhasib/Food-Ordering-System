<?php
include "../DB/db.php";
$result=mysqli_query($conn,"SELECT * FROM voucher");

?>
<!DOCTYPE html>
<html>
    <head>
        <title>My voucher</title>
    </head>
    <body>
        <h2>Vouchers</h2>
        <?php while($a=mysqli_fetch_assoc($result)){?>
        <form action="">
            <p>Code: <?= $a['code']?></p>
            <p>Discount: <?= $a['discount']?>%</p>
        </form>
        <?php }?>
    </body>
</html>