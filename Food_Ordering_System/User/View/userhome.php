<?php
include "../../Admin/DB/db.php";
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
            <form method="post" class="viewfood">
                <img src="../../Admin/uploads/<?=$a['image']?>" alt="">
                <h3><?= $a['name']?></h3>
                <p>TK<?= $a['price']?></p>
                <input type="hidden" name="id" value="<?= $a['id']?>">


            </form>
            <?php }?>
        </body>
    
</html>