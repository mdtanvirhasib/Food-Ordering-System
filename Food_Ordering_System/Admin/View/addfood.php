<?php include "../Controller/addfood.php";?>

<!DOCTYPE html>
<html>
    <head>
        <title>
            Add Food
        </title>
    </head>

    <body>
        <h2>Add Food</h2>
        <form method="post" enctype="multipart/form-data">
            <label for="">Food name:</label>
            <input type="text" name="name" id=""><br><br>
            <label for="">Price:</label>
            <input type="text" name="price"><br><br>
            <label for="">Image:</label>
            <input type="file" name="image"><br><br>
            <input type="submit" value="Add Food">

            <p style="color:green;"><?php echo $success; ?></p>
            <p style="color:red;"><?php echo $error; ?></p>
            <p><?php echo $imgerr; ?></p>
        </form>
    </body>
</html>