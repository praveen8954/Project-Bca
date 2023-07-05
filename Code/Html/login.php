<?php

include "db_connection.php";

// unset($_POST);
if($_SERVER['REQUEST_METHOD']=='POST'&& isset($_POST['username']) && isset($_POST['password']))
{
$username=$_POST["username"];
// $email=$_POST["email"];
$password=$_POST["password"];




  
  $select="SELECT  `username` , `password`  FROM `user` WHERE `username`='$username';";
  
  $result=mysqli_query($conc,$select);
  $data=mysqli_fetch_assoc($result);
  $row= mysqli_num_rows($result);
  // echo $row;
  if($row==0)
  {
    echo '<div class="alert alert-danger  alert-dismissible fade show" role="alert">
    You have Entered Wrong Username 
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
  }
  else{
    $encpass= $data['password'];
    // echo $encpass;
    // echo $password;
    // die;
    if(password_verify($password,$encpass)==true)
    {
    session_start();
    $_SESSION['user']=$username;
    // echo  $_SESSION['user'];
    header("location:/BCA Project BUYZEE/Homepage/Homepage.php");
    // echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
    // Login Successfull
    // <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    // </div>';
  }
  else{
    echo '<div class="alert alert-danger  alert-dismissible fade show" role="alert">
    You have Entered Wrong Password
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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link rel="stylesheet" href="/BCA Project BUYZEE/Code/Css/login.css">
   
    <title>BuyEzee</title>
</head> 
<body class="circle circle-container">
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
                <li><a class="dropdown-item" href="#">Categories</a></li>
                <li><a class="dropdown-item" href="#">Profile</a></li>
                <li><a class="dropdown-item" href="#">My Cart</a></li>
                <li><a class="dropdown-item" href="#">My Orders</a></li>
                <li><a class="dropdown-item" href="/BCA Project BUYZEE/Code/Html/login.php">Logout</a></li>
              </ul>
            </div>
          
      
          <span id="righttop">
          <span id="profile-logo">
          <img class="yellow" src="/BCA Project BUYZEE/Homepage/yellow.png" alt="IMAGE"><p id="user">Hi,<?php
         if(isset($_SESSION['user']))
         echo $_SESSION['user'];
         else
           echo "user";
         
         ?>
         </p>

      </span>

      <a href="/BCA Project BUYZEE/Code/Html/index.php" id="register">Register  </a>
          <!-- <a href="/BCA Project BUYZEE/Code/Html/index.php"><button id="register">Register</button></a>
          <a href="/BCA Project BUYZEE/Code/Html/login.php"><button id="login">Login</button></a> -->
      </span>
  </div>
  <hr>

 


<div class="h1">
<h1 id="login-text"> User Login </h1>
</div>
<div class="box">
  <div class="container">
      <img class="img my-4" src="/BCA Project BUYZEE/Homepage/icon.jpeg" alt="">
      <h1>Hi, user</h1>
  </div>
      <form action="#" method="POST">
      <div class="input-field">
            
            <input type ="text" class="input" placeholder="Username"name="username" required> 
      </div>
      <div class="input-field"> 
         
          <input type="password" class="input" placeholder="Password" name="password" required>
      </div>
      <div class="bottom">
              <a href ="/BCA Project BUYZEE/Code/Html/forget.php">Forgot Password?</a>
      </div>
      <button type="submit" class="log">Login</button>
      </form>
</div>

<?php



?>

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