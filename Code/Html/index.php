<?php

include "db_connection.php";



if($_SERVER['REQUEST_METHOD']=='POST'&& isset($_POST['username']) && isset($_POST['password'])&& isset($_POST["email"]))
{
$username=$_POST["username"];
$email=$_POST["email"];
$password=$_POST["password"];
$encpass=password_hash($password,PASSWORD_BCRYPT);
$existSql = "SELECT * FROM `user` WHERE username = '$username' or email='$email'";
$result = mysqli_query($conc, $existSql);
$numExistRows = mysqli_num_rows($result);
if($numExistRows > 0){
  echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  "Username or Email Already Exists";
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>' ;
}


else{
  $insert="INSERT INTO `user` (`email`, `password`,`username`) VALUES ('$email', '$encpass','$username');";
  
  $result=mysqli_query($conc,$insert);

  if(!$result )
  {
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    Sorryyyyyyy we are facing some technical issues right now please try agian later.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
  }
  else{
  
   echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
   Account created successfully . You can login now.
   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
 </div>';
  }
 
}
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/BCA Project BUYZEE/Code/Css/register.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>BuyEzee</title>
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
          session_start();
          // session_destroy();
          // session_destroy()  ;
           if(!isset($_SESSION['user']))
           echo "user";
           else
           echo $_SESSION['user'];
            ?>
           
          </p>
           
      </span>
      <a href="/BCA Project BUYZEE/Code/Html/logout.php" id="login">Login   </a>
          <!-- <a href="/BCA Project BUYZEE/Code/Html/index.php"><button id="register">Register</button></a> -->
          <!-- <a href="/BCA Project BUYZEE/Code/Html/login.php"><button id="login">Logout</button></a> -->
      </span>
  </div>
  <hr>

  


  <main class="main">

    <section class="section" >
 
      <form action="#" method="POST">
         <!-- <fieldset style="border-color: black;" > -->
         <h3>Create Your Account</h3>
         <h5>Let's get started with your Journey with us!</h5><br>
       
         <label class="info" for="name">Username</label><br>
         <input class="button" type="text" id="username" placeholder="enter username" name="username" required><br>
 
         <label class="info" for="email">Email</label><br>
         <input class="button" type="email" id="email" name="email" placeholder="enter your email" required><br>
 
 
         <label class="info" for="password">Password</label><br>
         <input class="button" type="password" id="pass" name="password" placeholder="enter your password" required><br>
         
 
 
          <input class="sign" type="submit" id="button" value="Sign Up"> <br>
          <label for="login"> Already have an account?</label><a class="login" href="/BCA Project BUYZEE/Code/Html/login.php">login</a>
      </form>
    

    </section>
 
 
     <aside class="img">
      <img class="img" src="/BCA Project BUYZEE/Images/Sub Images/grocery.jpeg"alt="grocery" >
     </aside>
 
 
 </main>



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