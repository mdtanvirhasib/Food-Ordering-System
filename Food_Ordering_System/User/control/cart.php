<?php
session_start();
include "../DB/db.php";



$payable = $payable ?? 0;
$msg = $msg ?? "";
$cart_items = $_SESSION['cart'] ?? [];
$total = 0;
$discount = $_SESSION['discount'] ?? 0;
$msg = "";

if($_SERVER['REQUEST_METHOD']=='POST')
    {
        if (isset($_POST['id']))
            {

            
        $id=$_POST['id'];
        $q=mysqli_query($conn,"SELECT * FROM food WHERE id='$id'");
        if($q && mysqli_num_rows($q)>0)
            {
                $food=mysqli_fetch_assoc($q);
                if (!isset($_SESSION['cart']))
                    {
                        $_SESSION['cart'] = [];
                    }
            
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
    }


    if (isset($_POST['code']))
        {
            $code = ($_POST['code']);
            if($code=="")
                {
                    $msg = "Enter voucher code";
                }
                else
                    {
                        $v = mysqli_query($conn, "SELECT * FROM voucher WHERE code='$code'");
                        if ($v && mysqli_num_rows($v) > 0)
                            {
                                $row = mysqli_fetch_assoc($v);
                                $_SESSION['discount'] = $row['discount'];
                                $discount = $row['discount'];
                                $msg = "Voucher applied successfully";
                            }
                            else
                                {
                                    $msg = "Invalid voucher";
                                }
                    }

                    header("Location: ../View/cart.php");
                    exit;

        }
        
        foreach ($cart_items as $c)
            {
                $total += $c['price'] * $c['quantity'];
            }

            $payable = $total - ($total * $discount / 100);




?>