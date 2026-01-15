<?php
include "../control/cart.php";

?>

<!DOCTYPE html>
<html>
    <head>
        <title>My cart</title>
    </head>
    <body>
        <h2>My cart</h2>
        <?php if(count($cart_items)>0):?>
            <?php foreach($cart_items as $a):?>
        <form class="viewfood">
                <img src="../../Admin/uploads/<?=$a['image']?>" alt="" width="80px">
                <h3><?= $a['name']?></h3>
                <p>TK<?= $a['price']?>x<?=$a['quantity']?></p>
                <p>Total: TK<?= $a['price']*$a['quantity']?></p>
        </form>
        <?php endforeach;?>

        <p>Total: TK<?= $total ?></p>
        <p>Discount: <?=$discount?>%</p>
        <p>Payable: <?=$payable?></p>

        <?php else:?>
            <p>Your cart is empty.</p>
            <?php endif;?>
            <p class="msg"><?= $msg ?></p>

        <form action="../control/cart.php" method="post" class="vaucher">
            <input type="text" name="code" placeholder="Enter Vaucher code">
            <button type="submit">Apply Vaucher</button>
        </form><br>

        <a href="../View/payment.php" class="btn">Proceed to Payment</a>
        <a href="../View/userhome.php" class="btn">Back to Menu</a>

    </body>
</html>