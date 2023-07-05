<?php
include "db_connection.php";
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
    <style>
        .tbl td{
            border:none;
        }
        .tbl input,textarea
        {
            width: 80%;
            border-radius: 4px;
            font-weight: bolder;
            font-size: large;
            background-color: lightsalmon;
        }
        
       
    </style>
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
      <div class=" text-center border rounded bg-light my-4">
      <h1>MY PROFILE</h1>
      </div>
      <div class="col-lg-8 container ">
        
        

      <table class='table text-center  table-success tbl '>
                <!-- <thead>
                <tr>
                <th scope='col'>Item Image</th>
                <th scope='col'>Item Name</th>
                <th scope='col'>Price</th>
                <th scope='col' >Quantity</th>
                <th scope='col' >Order Date</th>
                </tr>
                </thead> -->
                <tbody>
                    <?php
                $order_query="SELECT * FROM `user_profile` WHERE `username`='$_SESSION[user]' ORDER BY `order_date`  LIMIT 1" ;
                $order_result=mysqli_query($conc,$order_query);
                while($order_fetch=mysqli_fetch_assoc($order_result))
                {
                   
                echo" <tr><td> <label for='name'><h3>Name</h3></label></td> </tr>";
                echo" <tr><td><input type='text' name='name' value='$order_fetch[name]' readonly></td> </tr>"; 
                echo" <tr><td> <label for='phone'><h3>Phone Number</h3></label> </tr>";           
                     echo" <tr><td><input type='text' name='name' value='$order_fetch[phone]' readonly></td> </tr>";
                echo" <tr><td> <label for='address'><h3>Address</h3></label> </tr>";
                echo" <tr><td><textarea name='address' id='address' cols='15' rows='8' readonly>$order_fetch[address]</textarea>
                </td> </tr>";
              
                }
                ?>
                </tbody>
            </table>
          
</div>
    </div>
  </div>


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