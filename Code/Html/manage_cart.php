<?php
session_start();
// session_destroy();
if($_SERVER["REQUEST_METHOD"]=="POST")
    {
    if(isset($_POST['add']))
        {
        if(isset($_SESSION['cart']))

            {

                $myitems=array_column($_SESSION['cart' ], 'Item_Name');
                if(in_array($_POST['Item_Name'], $myitems))
                    {
                        // print_r($_SESSION['cart']);
                    echo"<script>
                    alert('Item Already Added');
                    history.back();
                    </script>";
                    // window.location.href='index.php';
                    }
                else
                    {
                    $count=count ($_SESSION['cart']);
                    $_SESSION['cart'][$count] = array( 'Item_Name'=>$_POST['Item_Name'], 'Price'=>$_POST['Price' ], 'Quantity' =>1,'Item_Image'=>$_POST['Item_Image']);
                    // print_r($_SESSION['cart']);
                    echo"<script>
                    alert('Item Added');
                    history.back();
                    </script>";
                    // window.location.href='';
                    }
            }
            else
                {
                    $_SESSION['cart' ][0]=array( 'Item_Name'=>$_POST['Item_Name'], 'Price'=>$_POST['Price'], 'Quantity'=>1,'Item_Image'=>$_POST['Item_Image']);
                    // print_r($_SESSION['cart']);
                    echo" <script>
                    alert('Item Added');
                        history.back();
                        </script>";
                }
        
        // window.location.href='index.php';
        }
        

        if(isset($_POST['Mod_Quantity']))
            {
                // echo"hello";
            foreach($_SESSION['cart'] as $key => $value)
                {
                if($value['Item_Name']==$_POST['Item_Name'])
                    {
                        $_SESSION['cart'][$key]['Quantity']=$_POST['Mod_Quantity'];
                        echo "<script>
                        window.location.href='/BCA Project BUYZEE/Code/Html/cart.php';
                        </script>";
                    }
                }
        }

        if(isset($_POST['Remove_Item']))
            {
                // echo"hello";
            foreach($_SESSION['cart'] as $key => $value)
                {
                if($value['Item_Name']==$_POST['Item_Name'])
                    {
                        unset($_SESSION['cart'][$key]);
                        $_SESSION['cart']=array_values($_SESSION['cart']);
                        echo "<script>
                        alert('Item Removed');
                        window.location.href='/BCA Project BUYZEE/Code/Html/cart.php';
                        </script>";
                    }
                }
        }
}
?>