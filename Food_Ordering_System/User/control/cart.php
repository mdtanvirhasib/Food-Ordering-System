<?php
session_start();
include "../DB/db.php";


$cart_items = $cart_items ?? [];
$total = $total ?? 0;
$discount = $discount ?? 0;
$payable = $payable ?? 0;
$msg = $msg ?? "";

if($_SERVER['REQUEST_METHOD']=='POST')
    {
        $id=$_POST['id'];
        $q=mysqli_query($conn,"SELECT * FROM food WHERE id='$id");
        if($q && mysqli_num_rows($q)>0)
            {
                $food=mysqli_fetch_assoc($q);
            
            $found = false;
            foreach ($_SESSION['cart'] as &$item) 
                {
                    if ($item['id'] == $food['id']) 
                        {
                            $item['quantity']++;
                            $found = true;
                            break;
                        }
                }
                unset($item);

                if(!$found)
                    {
                        $_SESSION['cart'][] =['id' => $food['id'],'name' => $food['name'],'price' => $food['price'],'image' => $food['image'],'quantity' => 1];
                    }
    }
    header("Location: ../View/userhome.php");
    exit;

    }

    
?>