<?php
$flag=0;
include "db_connection.php";

// unset($_POST);
if($_SERVER['REQUEST_METHOD']=='POST'&& isset($_POST['check']))
{
$email=$_POST["email"];

// $_SESSION['passemail']=$email;
// echo $_SESSION['passemail'];




  
  $select="SELECT  *  FROM `user` WHERE `email`='$email';";
  
  $result=mysqli_query($conc,$select);
  $data=mysqli_fetch_assoc($result);
  $row= mysqli_num_rows($result);
  // echo $row;
  if($row==0)
  {

    echo '<div class="alert alert-danger  alert-dismissible fade show" role="alert">
    No user with this email exists !
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
  }
  else{
      $flag=1;
  }
}


 else if(isset($_POST['reset']))
 {   
   $email=$_POST["email"];
      $npassword=$_POST["npassword"];
      // echo $npassword;
      $nencpass=password_hash($npassword,PASSWORD_BCRYPT);
      // echo $nencpass;
      $sql="UPDATE `user` SET `password`='$nencpass' WHERE `email`='$email';";
      $result=mysqli_query($conc,$sql);
      if($result)
      {
        echo"<script>
                    alert('Password Updated Successfully . You can login now With New Password');
                    window.location.href='/BCA Project BUYZEE/Code/Html/login.php';
                    </script>";
      
      }
 }
else{
  echo"";
}


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
    <link rel="stylesheet" href="/BCA Project BUYZEE/Code/Css/login.css">
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
                <li><a class="dropdown-item" href="/BCA Project BUYZEE/Code/Html/cart.php">My Cart</a></li>
                 <li><a class="dropdown-item" href="/BCA Project BUYZEE/Code/Html/myorder.php">My Orders</a></li>
               
              </ul>
            </div>
          
      
          <span id="righttop">
          <span id="profile-logo">
          <img class="yellow" src="/BCA Project BUYZEE/Homepage/yellow.png" alt="IMAGE"><p id="user">Hi,
            
          <?php
          session_start();
           if(!isset($_SESSION['user']))
           echo "user";
           else
           echo $_SESSION['user'];
            ?>
           
          </p>
           
          
  </div>
  <hr>
  

  <div class="h1">
<h1 id="login-text">Forgot Paasword? </h1>
</div>
<div class="box" id="box">
  <div class="container">
      <img class="img my-4" src="/BCA Project BUYZEE/Homepage/icon.jpeg" alt="">
      <h1>Hi, user</h1>
  </div>
      <form action="#" method="POST">
      <div class="input-field">
            
            <input type ="email" class="input" placeholder="Verify Email To Reset Password"name="email" required> 
      </div>
         
         
      <button type="submit" name="check" class="log">Reset</button>
      </form>
</div>
<?php
if($flag==1){
   echo"<script>
   document.getElementById('box').style.display='none';
 </script>";
 
   echo "
   <div class='box' id='box'>
   <div class='container'>
       <img class='img my-4' src='/BCA Project BUYZEE/Homepage/icon.jpeg' alt=''>
       <h1>Update Password</h1>
   </div>
          <form action='#' method='post'>
           <div class='input-field'> 
             
           <input type='password' class='input' placeholder='Enter new Password' name='npassword' required>
           
           <input type='hidden'  name='email' value=$email required>
           
           </div>
           <button type='submit' name='reset'class='log'>Reset</button>
         </form>
         </div>";
}
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