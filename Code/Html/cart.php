<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>BuyEzee</title>
    <link rel="stylesheet" href="/BCA Project BUYZEE/Code/Css/cart.css">
</head>
<body>
 
  <div id="header">
        
        <a href="/BCA Project BUYZEE/Homepage/Homepage.php"> <img  id="logo"src="/BCA Project BUYZEE/Homepage/logo.jpeg" alt=""></a> 
       
          <ul>
  
          
         <li> <a href="/BCA Project BUYZEE/Homepage/Homepage.php">Home</a></li>
        <li>  <a href="/BCA Project BUYZEE/Code/Html/about.php">About Us</a></li>
         <li> <a href="/BCA Project BUYZEE/Code/Html/contact.php">Contact Us</a></li>
        <li>  <a href="/BCA Project BUYZEE/Code/Html/services.php">Services</a></li>
      </ul>
         
  
          <div class="dropdown-center ">
              <button class="btn  btn-light dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
              <!-- <p>Categories</p> -->
                  <img class="yellow" src="/BCA Project BUYZEE/Homepage/categories.png" alt="">
              </button>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="/BCA Project BUYZEE/Code/Html/categories.php">Categories</a></li>
               <li><a class="dropdown-item" href="/BCA Project BUYZEE/Code/Html/profile.php">Profile</a></li>
               <li><a class="dropdown-item" href="/BCA Project BUYZEE/Code/Html/cart.php">My Cart<?php
               if(isset($_SESSION['cart']))
                {
                  echo " (".count($_SESSION['cart']).")";
                }    
              ?>
              </a></li>
                 <li><a class="dropdown-item" href="/BCA Project BUYZEE/Code/Html/myorder.php">My Orders</a></li>
               
              </ul>
            </div>
          
      
          <span id="righttop">
          <span id="profile-logo">
          <img class="yellow" src="/BCA Project BUYZEE/Homepage/yellow.png" alt="IMAGE"><p id="user">Hi,
            
          <?php
          // session_start();
           if(!isset($_SESSION['user']))
           echo "user";
           else
           echo $_SESSION['user'];
            ?>
           
          </p>
           
      </span><a href="/BCA Project BUYZEE/Code/Html/logout.php" id="logout">Logout
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
    <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z"/>
    <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
    </svg></a>
          <!-- <a href="/BCA Project BUYZEE/Code/Html/index.php"><button id="register">Register</button></a> -->
          <!-- <a href="/BCA Project BUYZEE/Code/Html/login.php"><button id="login">Logout</button></a> -->
      </span>
  </div>
  <hr>
  
 
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center border rounded bg-light my-4">
      <h1>MY CART</h1>
      </div>
      <div class="col-lg-8 container my-3">
        <table class="table ">
          <thead class="text-center">
            <tr>
                <th scope="col">Serial No.</th>
                <th scope="col">Item Image</th>
                <th scope="col">Item Name</th>
                <th scope="col">Item Price</th>
                <th scope="col">Quantity</th>
                <th scope="col">Total</th>
                <th scope="col">Remove Item</th>
            </tr>
          </thead>
        

            <tbody class="text-center ">
            <?php
            
              if(isset($_SESSION['cart']))

                {
                    foreach($_SESSION['cart'] as $key => $value)
                  {$sr=$key+1;
                    
                    echo"
                    <tr>
                    
                    <td>$sr</td>
                    <td ><img src='$value[Item_Image]' alt='image' width='70px' height='50px'></td>
                      <td>$value[Item_Name]</td>
                      <td>$value[Price]<input type='hidden' class='iprice' value='$value[Price]'></td>
                      <form action='/BCA Project BUYZEE/Code/Html/manage_cart.php' method='POST'>
                      <td><input class='text-center iquantity ' name='Mod_Quantity' onchange='this.form.submit();' type='number' value='$value[Quantity]' min='1' max='10'>
                      </td>
                      <input type='hidden' name='Item_Name' value='$value[Item_Name]'>
                      </form>
                      <td class='itotal'> 0</td>
                    <td>
                      <form action='/BCA Project BUYZEE/Code/Html/manage_cart.php' method='POST'>
                        <button name='Remove_Item' class='btn  btn-outline-danger'>REMOVE </button>
                        <input type='hidden' name='Item_Name' value='$value[Item_Name]'>
                      </form>
                      </td>
                      </tr>
                    ";
                  }
              }
              ?>
            </tbody>
        </table>

      </div>
        <div class="d-flex flex-row justify-content-end my-3">
          <div class="border bg-light rounded p-4">
            <h4 class="d-inline">Grand Total:<h4 class="text-right d-inline my-2" id="gtotal"></h4></h4>
            
            <br>

            <?php

              if(isset($_SESSION['cart']) && count($_SESSION['cart'])>0)
              {
               ?>
              <form action="purchase.php" method="POST">
               <div class="form-group">
                <label>Full Name</label>
                <input type="text" name="fullname" class="form-control" required> </div>
                <div class="form-group">
                <label>Phone Number</label>
                <input type="number" name="phone_no" class="form-control" required> </div>
                <div class="form-group">
                <label>Address</label>
                <input type="text" name="address" class="form-control" required>
                </div>
                <div class="form-check my-2">
                <input class="form-check-input" type="radio" name="pay_mode" value="COD" checked> 
                <label class="form-check-label" for="flexRadioDefault2">
                  Cash On Delivery
                  
                  </label>
                </div>
                <button class="btn btn-primary btn-block my-2 w-100" name="purchase">Make Purchase</button>
              </form>
              <?php
              }
              ?>
          </div>
      </div>
    </div>
  </div>
              



<script>
    var gt=0;
    var iprice=document.getElementsByClassName('iprice');
    var iquantity=document.getElementsByClassName('iquantity'); 
    var itotal=document.getElementsByClassName('itotal');
    var gtotal=document.getElementById('gtotal');
      function subTotal()
      {
        gt=0;
        for(i=0;i<iprice.length; i++)
        {
          itotal[i].innerText=(iprice[i].value)*(iquantity[i].value);
          gt=gt+(iprice[i].value)*(iquantity[i].value);
          gtotal.innerText=gt;
        }
      }
    subTotal();
  </script>

  <footer>
        <section id="footer">
        <ul class="footerul">
          <li>BUYEZEE</li>
          <li><a href="/BCA Project BUYZEE/Homepage/Homepage.php"> Home</li></a>     
          <li><a href="/BCA Project BUYZEE/Code/Html/about.php"> About us</a><li>
          </ul>     
          <ul class="footerul">
            <li>HELP</li>
            <li><a href="/BCA Project BUYZEE/Code/Html/contact.php"> Contact Us</a></li>
            <li><a href="/BCA Project BUYZEE/Homepage/Homepage.php"> Get Started</a></li>
           </ul>
        <ul class="footerul">
          <li>CONTACT</li>
          <li><a href="https://www.facebook.com/parveen.sangroula/"> Facebook</a></li>
          <li><a href="https://www.instagram.com/________preeti___/"> Instagram</a></li>
          <!-- <li><a href=""> Twitter</a></li>    -->
        </ul>
      </section>
        <span id="copyright"> All Rights Reserved | Copyright &copy | www.BuyEzee.com</span>
      </footer>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>
</html>