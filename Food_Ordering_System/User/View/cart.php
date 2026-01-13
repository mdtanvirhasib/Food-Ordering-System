<!DOCTYPE html>
<html>
    <head>
        <title>My cart</title>
    </head>
    <body>
        <h2>My cart</h2>
        <form action="">
                <img src="../../Admin/uploads/<?=$a['image']?>" alt="">
                <h3><?= $a['name']?></h3>
                <p>TK<?= $a['price']?></p>
        </form>

        <p>Total: TK</p>
        <p>Discount: </p>
        <p>Payable: </p>


        <form action="">
            <input type="text" name="code" placeholder="Enter Vaucher code">
            <button type="submit">Apply Vaucher</button>
        </form>

    </body>
</html>