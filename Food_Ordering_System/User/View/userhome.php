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

        <body>
            <h2>Food Menu</h2>
            <?php while($a=mysqli_fetch_assoc($result)){?>
            <form method="post">
                <img src="../uploads/" alt="">
                <h3><?= $a['name']?></h3>
                <p>TK<?= $a['price']?></p>
                <input type="hidden" <?php $a['id']?>>


            </form>
            <?php }?>
        </body>
    </head>
</html>