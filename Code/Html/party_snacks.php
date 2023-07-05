<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>BuyEzee</title>
    <link rel="stylesheet" href="/BCA Project BUYZEE/Code/Css/dairy.css">
   
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
<h1>Party Snacks</h1>

<div class="dairy">
    <span id="card">
        
      <form action="/BCA Project BUYZEE/Code/Html/manage_cart.php" method="post">   <div class="card" style="width: 11.5rem;">
          <img src="/BCA Project BUYZEE/Images/Party , Snacks _ Drinks/Beverages/1.jpg" class="card-img-top" alt="amul butter">
          <div class="card-body">
            <p class="card-text">Seven Up</p>
  
                <section> <span class="rupees">30rs</span>
                 <button class="add" type="submit" name="add">add</button></section>
            <input type="hidden" name="Item_Name" value="Seven Up">
            <input type="hidden" name="Price" value="30">
            <input type="hidden" name="Item_Image" value="/BCA Project BUYZEE/Images/Party , Snacks _ Drinks/Beverages/1.jpg">
          </div> 
      </div></form>
            <form action="/BCA Project BUYZEE/Code/Html/manage_cart.php" method="post">   <div class="card" style="width: 11.5rem;">
              <img src="/BCA Project BUYZEE/Images/Party , Snacks _ Drinks/Beverages/2.jpg" class="card-img-top" alt="Amul Milk 500ml">
              <div class="card-body">
                <p class="card-text">Maaza</p>
                   <section><span class="rupees">40rs</span>
                 <button class="add" type="submit" name="add">add</button></section>
            <input type="hidden" name="Item_Name" value="Maaza">
            <input type="hidden" name="Price" value="40">
            <input type="hidden" name="Item_Image" value="/BCA Project BUYZEE/Images/Party , Snacks _ Drinks/Beverages/2.jpg">
              </div>
          </div></form>
            <form action="/BCA Project BUYZEE/Code/Html/manage_cart.php" method="post">   <div class="card" style="width: 11.5rem;">
              <img src="/BCA Project BUYZEE/Images/Party , Snacks _ Drinks/Beverages/3.jpg" class="card-img-top" alt="Amul Gold 1l">
              <div class="card-body">
                <p class="card-text">Mountain Dew</p>
                  <section><span class="rupees">40rs</span>
                 <button class="add" type="submit" name="add">add</button></section>
            <input type="hidden" name="Item_Name" value="Mountain Dew">
            <input type="hidden" name="Price" value="40">
            <input type="hidden" name="Item_Image" value="/BCA Project BUYZEE/Images/Party , Snacks _ Drinks/Beverages/3.jpg">
              </div>
          </div>
          </form>
            <form action="/BCA Project BUYZEE/Code/Html/manage_cart.php" method="post">   <div class="card" style="width: 11.5rem;">
              <img src="/BCA Project BUYZEE/Images/Party , Snacks _ Drinks/Beverages/4.jpg" class="card-img-top" alt="Amul Lactose FREE 1L">
              <div class="card-body">
                <p class="card-text">Coca Cola</p>
                   <section><span class="rupees">40rs</span>
                 <button class="add" type="submit" name="add">add</button></section>
            <input type="hidden" name="Item_Name" value="Coca Cola">
            <input type="hidden" name="Price" value="40">
            <input type="hidden" name="Item_Image" value="/BCA Project BUYZEE/Images/Party , Snacks _ Drinks/Beverages/4.jpg">
          </div>
        </div>
        </form>
      </span>
      <span id="card">
        
         <form action="/BCA Project BUYZEE/Code/Html/manage_cart.php" method="post">   <div class="card" style="width: 11.5rem;">
            <img src="/BCA Project BUYZEE/Images/Party , Snacks _ Drinks/Beverages/5.jpg" class="card-img-top" alt="">
            <div class="card-body">
              <p class="card-text">Mirinda</p>
    
                  <section> <span class="rupees">40rs</span>
                   <button class="add" type="submit" name="add">add</button></section>
            <input type="hidden" name="Item_Name" value="Mirinda">
            <input type="hidden" name="Price" value="40">
            <input type="hidden" name="Item_Image" value="/BCA Project BUYZEE/Images/Party , Snacks _ Drinks/Beverages/5.jpg">
            </div> 
        </div></form>
              <form action="/BCA Project BUYZEE/Code/Html/manage_cart.php" method="post">   <div class="card" style="width: 11.5rem;">
                <img src="/BCA Project BUYZEE/Images/Party , Snacks _ Drinks/Bhujia _ Mixtures_/1.jpg" class="card-img-top" alt="">
                <div class="card-body">
                  <p class="card-text">BINGO Mad Angle</p>
                     <section><span class="rupees">20rs</span>
                   <button class="add" type="submit" name="add">add</button></section>
            <input type="hidden" name="Item_Name" value="BINGO Mad Angle">
            <input type="hidden" name="Price" value="20">
            <input type="hidden" name="Item_Image" value="/BCA Project BUYZEE/Images/Party , Snacks _ Drinks/Bhujia _ Mixtures_/1.jpg">
                </div>
            </div></form>
            <form action="/BCA Project BUYZEE/Code/Html/manage_cart.php" method="post">   <div class="card" style="width: 11.5rem;">
                <img src="/BCA Project BUYZEE/Images/Party , Snacks _ Drinks/Bhujia _ Mixtures_/3.jpg" class="card-img-top" alt="">
                <div class="card-body">
                  <p class="card-text">Haldiram Khatha Meetha </p>
                     <section><span class="rupees">60rs</span>
                   <button class="add" type="submit" name="add">add</button></section>
            <input type="hidden" name="Item_Name" value="Haldiram Khatha Meetha">
            <input type="hidden" name="Price" value="60">
            <input type="hidden" name="Item_Image" value="/BCA Project BUYZEE/Images/Party , Snacks _ Drinks/Bhujia _ Mixtures_/3.jpg">
                </div>
            </div></form>
            <form action="/BCA Project BUYZEE/Code/Html/manage_cart.php" method="post">   <div class="card" style="width: 11.5rem;">
                <img src="/BCA Project BUYZEE/Images/Party , Snacks _ Drinks/Bhujia _ Mixtures_/4.jpg" class="card-img-top" alt="Amul Milk 500ml">
                <div class="card-body">
                  <p class="card-text">Haldiram Boondi</p>
                     <section><span class="rupees">50rs</span>
                   <button class="add" type="submit" name="add">add</button></section>
            <input type="hidden" name="Item_Name" value="Haldiram Boondi">
            <input type="hidden" name="Price" value="50">
            <input type="hidden" name="Item_Image" value="/BCA Project BUYZEE/Images/Party , Snacks _ Drinks/Bhujia _ Mixtures_/4.jpg">
                </div>
            </div></form>
      </span>
      <span id="card">
        
        <form action="/BCA Project BUYZEE/Code/Html/manage_cart.php" method="post">   <div class="card" style="width: 11.5rem;">
           <img src="/BCA Project BUYZEE/Images/Party , Snacks _ Drinks/Bhujia _ Mixtures_/5.jpg" class="card-img-top" alt="Amul Lactose FREE 1L">
           <div class="card-body">
             <p class="card-text">Haldiram Nut Cracker</p>
   
                 <section> <span class="rupees">55rs</span>
                  <button class="add" type="submit" name="add">add</button></section>
            <input type="hidden" name="Item_Name" value="Haldiram Nut Cracker">
            <input type="hidden" name="Price" value="55">
            <input type="hidden" name="Item_Image" value="/BCA Project BUYZEE/Images/Party , Snacks _ Drinks/Bhujia _ Mixtures_/5.jpg">
           </div> 
       </div></form>
             <form action="/BCA Project BUYZEE/Code/Html/manage_cart.php" method="post">   <div class="card" style="width: 11.5rem;">
               <img src="/BCA Project BUYZEE/Images/Party , Snacks _ Drinks/Bhujia _ Mixtures_/6.jpg" class="card-img-top" alt="Amul Milk 500ml">
               <div class="card-body">
                 <p class="card-text">Haldiram Punjabi Tadka</p>
                    <section><span class="rupees">50rs</span>
                  <button class="add" type="submit" name="add">add</button></section>
            <input type="hidden" name="Item_Name" value="Haldiram Punjabi Tadka">
            <input type="hidden" name="Price" value="50">
            <input type="hidden" name="Item_Image" value="/BCA Project BUYZEE/Images/Party , Snacks _ Drinks/Bhujia _ Mixtures_/6.jpg">
               </div>
           </div></form>
           <form action="/BCA Project BUYZEE/Code/Html/manage_cart.php" method="post">   <div class="card" style="width: 11.5rem;">
               <img src="/BCA Project BUYZEE/Images/Party , Snacks _ Drinks/Bhujia _ Mixtures_/7.jpg" class="card-img-top" alt="Amul Milk 500ml">
               <div class="card-body">
                 <p class="card-text">Cornnito Nacho Crisps</p>
                    <section><span class="rupees">20rs</span>
                  <button class="add" type="submit" name="add">add</button></section>
            <input type="hidden" name="Item_Name" value="Cornnito Nacho Crisps">
            <input type="hidden" name="Price" value="20">
            <input type="hidden" name="Item_Image" value="/BCA Project BUYZEE/Images/Party , Snacks _ Drinks/Bhujia _ Mixtures_/7.jpg">
               </div>
           </div></form>
           <form action="/BCA Project BUYZEE/Code/Html/manage_cart.php" method="post">   <div class="card" style="width: 11.5rem;">
               <img src="/BCA Project BUYZEE/Images/Party , Snacks _ Drinks/Chips _ Crisps/1.jpg" class="card-img-top" alt="Amul Milk 500ml">
               <div class="card-body">
                 <p class="card-text">ACt II Tomato Chilli</p>
                    <section><span class="rupees">20rs</span>
                  <button class="add" type="submit" name="add">add</button></section>
            <input type="hidden" name="Item_Name" value="ACt II Tomato Chilli">
            <input type="hidden" name="Price" value="20">
            <input type="hidden" name="Item_Image" value="/BCA Project BUYZEE/Images/Party , Snacks _ Drinks/Chips _ Crisps/1.jpg">
               </div>
           </div></form>
     </span>
     <span id="card">
        
        <form action="/BCA Project BUYZEE/Code/Html/manage_cart.php" method="post">   <div class="card" style="width: 11.5rem;">
           <img src="/BCA Project BUYZEE/Images/Party , Snacks _ Drinks/Chips _ Crisps/2.jpg" class="card-img-top" alt="Amul Lactose FREE 1L">
           <div class="card-body">
             <p class="card-text">Haldiram All In One</p>
   
                 <section> <span class="rupees">40rs</span>
                  <button class="add" type="submit" name="add">add</button></section>
            <input type="hidden" name="Item_Name" value="Haldiram All In One">
            <input type="hidden" name="Price" value="40">
            <input type="hidden" name="Item_Image" value="/BCA Project BUYZEE/Images/Party , Snacks _ Drinks/Chips _ Crisps/2.jpg">
           </div> 
       </div></form>
             <form action="/BCA Project BUYZEE/Code/Html/manage_cart.php" method="post">   <div class="card" style="width: 11.5rem;">
               <img src="/BCA Project BUYZEE/Images/Party , Snacks _ Drinks/Chips _ Crisps/3.jpg" class="card-img-top" alt="Amul Milk 500ml">
               <div class="card-body">
                 <p class="card-text">Haldiram Punjabi Tadka</p>
                    <section><span class="rupees">50rs</span>
                  <button class="add" type="submit" name="add">add</button></section>
            <input type="hidden" name="Item_Name" value="Haldiram Punjabi Tadka">
            <input type="hidden" name="Price" value="50">
            <input type="hidden" name="Item_Image" value="/BCA Project BUYZEE/Images/Party , Snacks _ Drinks/Chips _ Crisps/3.jpg">
               </div>
           </div></form>
           <form action="/BCA Project BUYZEE/Code/Html/manage_cart.php" method="post">   <div class="card" style="width: 11.5rem;">
               <img src="/BCA Project BUYZEE/Images/Party , Snacks _ Drinks/Popcorn_/1.jpg" class="card-img-top" alt="Amul Milk 500ml">
               <div class="card-body">
                 <p class="card-text">ACt II Butter Loves</p>
                    <section><span class="rupees">25rs</span>
                  <button class="add" type="submit" name="add">add</button></section>
            <input type="hidden" name="Item_Name" value="ACt II Butter Loves">
            <input type="hidden" name="Price" value="25">
            <input type="hidden" name="Item_Image" value="/BCA Project BUYZEE/Images/Party , Snacks _ Drinks/Popcorn_/1.jpg">
               </div>
           </div></form>
           <form action="/BCA Project BUYZEE/Code/Html/manage_cart.php" method="post">   <div class="card" style="width: 11.5rem;">
               <img src="/BCA Project BUYZEE/Images/Party , Snacks _ Drinks/Popcorn_/2.jpg" class="card-img-top" alt="Amul Milk 500ml">
               <div class="card-body">
                 <p class="card-text">ACt II Golden Puzzle</p>
                    <section><span class="rupees">25rs</span>
                  <button class="add" type="submit" name="add">add</button></section>
            <input type="hidden" name="Item_Name" value="ACt II Golden Puzzle">
            <input type="hidden" name="Price" value="25">
            <input type="hidden" name="Item_Image" value="/BCA Project BUYZEE/Images/Party , Snacks _ Drinks/Popcorn_/2.jpg">
               </div>
           </div></form>
     </span>
     
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