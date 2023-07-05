<?php
include "db_connection.php";
session_start();
// session_destroy();
if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        if(isset($_POST['purchase']))
         {
          $query1= " INSERT INTO `user_profile`(`username`, `name`, `phone`, `address`,  `pay_mode`) VALUES ('$_SESSION[user]','$_POST[fullname]','$_POST[phone_no]','$_POST[address]','$_POST[pay_mode]')";
         if( mysqli_query($conc,$query1))
         {
            $order_id=mysqli_insert_id($conc);
            $query2="INSERT INTO `user_orders`(`id`, `item_name`, `price`, `quantity`,`username`,`img_url`) VALUES (?,?,?,?,?,?)";
            $stmt=mysqli_prepare($conc,$query2);
            if($stmt)
            {
                mysqli_stmt_bind_param($stmt,"isiiss",$order_id,$item_name,$price,$quantity,$username,$img_url);
                foreach($_SESSION['cart'] as $key => $value)
                {
                    $item_name=$value['Item_Name'];
                    $price=$value['Price'];
                    $quantity=$value['Quantity'];
                    $img_url=$value['Item_Image'];
                    $username=$_SESSION['user'];
                    mysqli_stmt_execute($stmt);
                }
                unset($_SESSION['cart']);
                echo"<script>
                alert('order placed');
                window.location.href='/BCA Project BUYZEE/Code/Html/myorder.php';
                </script>";
            }
            else
            {
                
                echo"<script>
                alert('sql query prepare error');
                window.location.href='/BCA Project BUYZEE/Code/Html/cart.php';
                </script>";
            }
         }
         else
         {
            echo"<script>
            alert('sql error');
           window.location.href='/BCA Project BUYZEE/Code/Html/cart.php';
            </script>";
         }
        }
    }

    ?>