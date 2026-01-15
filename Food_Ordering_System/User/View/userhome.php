<?php
include "../DB/db.php";
$result=mysqli_query($conn,"SELECT* FROM food");
?>

<!DOCTYPE html>
<html>
    <head>
        <title>
            Home
        </title>
        <link rel="stylesheet" href="../Css/userhome.css">
    </head>
        <body>
            <h2>Food Menu</h2>
            
            <?php while($a=mysqli_fetch_assoc($result)){?>
            <form method="post" action="../View/cart.php" class="viewfood">
                <img src="../../Admin/uploads/<?=$a['image']?>" alt="">
                <h3><?= $a['name']?></h3>
                <p>TK<?= $a['price']?></p>
                <input type="hidden" name="id" value="<?= $a['id']?>">
                <input type="submit" value="Add to cart" class="sub">


            </form>

      
            <?php }?>

            <header>
                <a href="../View/cart.php" class="cart">View Cart</a>
            </header>

            
            
        </body>
    
</html>