<?php include "../Controller/addvaucher.php";?>

<!DOCTYPE html>
<html>
    <head>
        <title>Add vaucher</title>
    </head>

    <body>
        <form action="" method="post">
            <h2>Add vaucher</h2>
            <label for="">Code:</label>
            <input type="text" name="code">
            <label for="">Discount:</label>
            <input type="text" name="discount">
            <button name="add">Generate</button>
            <p style="color:green;"><?php echo $success; ?></p>
            <p style="color:red;"><?php echo $error; ?></p>
        </form>

    </body>
</html>