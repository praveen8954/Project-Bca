<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="organic.css">
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
  <h1>Organic Grocery</h1>
  <div class="dairy">
  <span id="card">
      
    <form action="/BCA Project BUYZEE/Code/Html/manage_cart.php" method="post">   <div class="card" style="width: 11.5rem;">
        <img src="/BCA Project BUYZEE/Images/Organic Grocery_/Dry Fruits/1.jpg" class="card-img-top" alt="flax seed">
        <div class="card-body">
          <p class="card-text">Organic Flax Seed</p>

              <section> <span class="rupees">240rs</span>
               <button class="add" type="submit" name="add">add</button></section>
            <input type="hidden" name="Item_Name" value="Organic Flax Seed">
            <input type="hidden" name="Price" value="240">
            <input type="hidden" name="Item_Image" value="/BCA Project BUYZEE/Images/Organic Grocery_/Dry Fruits/1.jpg">
        </div> 
    </div></form>
          <form action="/BCA Project BUYZEE/Code/Html/manage_cart.php" method="post">   <div class="card" style="width: 11.5rem;">
            <img src="/BCA Project BUYZEE/Images\Organic Grocery_/Dry Fruits/2.jpg" class="card-img-top" alt="Raisin">
            <div class="card-body">
              <p class="card-text">Organic Raisin</p>
                 <section><span class="rupees">120rs</span>
               <button class="add" type="submit" name="add">add</button></section>
            <input type="hidden" name="Item_Name" value="Organic Raisin">
            <input type="hidden" name="Price" value="120">
            <input type="hidden" name="Item_Image" value="/BCA Project BUYZEE/Images/Organic Grocery_/Dry Fruits/2.jpg">
            </div>
        </div></form>
          <form action="/BCA Project BUYZEE/Code/Html/manage_cart.php" method="post">   <div class="card" style="width: 11.5rem;">
            <img src="/BCA Project BUYZEE/Images/Organic Grocery_/Dry Fruits/3.jpg" class="card-img-top" alt="Chia Seeds">
            <div class="card-body">
              <p class="card-text">Chia Seeds 2kg</p>
                <section><span class="rupees">270rs</span>
               <button class="add" type="submit" name="add">add</button></section>
            <input type="hidden" name="Item_Name" value="Chia Seeds 2kg">
            <input type="hidden" name="Price" value="270">
            <input type="hidden" name="Item_Image" value="/BCA Project BUYZEE/Images/Organic Grocery_/Dry Fruits/3.jpg">
            </div>
        </div></form>

          <form action="/BCA Project BUYZEE/Code/Html/manage_cart.php" method="post">   <div class="card" style="width: 11.5rem;">
            <img src="/BCA Project BUYZEE/Images/Organic Grocery_/Dry Fruits/4.jpg" class="card-img-top" alt="Mamra Almonds">
            <div class="card-body">
              <p class="card-text">Mamra Almonds</p>
                 <section><span class="rupees">200rs</span>
               <button class="add" type="submit" name="add">add</button></section>
            <input type="hidden" name="Item_Name" value="Mamra Almonds">
            <input type="hidden" name="Price" value="200">
            <input type="hidden" name="Item_Image" value="/BCA Project BUYZEE/Images/Organic Grocery_/Dry Fruits/4.jpg">
        </div>
      </div></form>
     
    </span>
  <span id="card">
      
    <form action="/BCA Project BUYZEE/Code/Html/manage_cart.php" method="post">   <div class="card" style="width: 11.5rem;">
        <img src="/BCA Project BUYZEE/Images/Organic Grocery_/Dry Fruits/5.jpg" class="card-img-top" alt="Organic Chia seeds">
        <div class="card-body">
          <p class="card-text">Organic Chia seeds1kg</p>
             <section><span class="rupees">135rs</span>
               <button class="add" type="submit" name="add">add</button></section>
            <input type="hidden" name="Item_Name" value="Organic Chia seeds1kg">
            <input type="hidden" name="Price" value="135">
            <input type="hidden" name="Item_Image" value="/BCA Project BUYZEE/Images/Organic Grocery_/Dry Fruits/5.jpg">
        </div> 
    </div></form>
          <form action="/BCA Project BUYZEE/Code/Html/manage_cart.php" method="post">   <div class="card" style="width: 11.5rem;">
            <img src="/BCA Project BUYZEE/Images/Organic Grocery_/Flours_/1.jpg" class="card-img-top" alt="Organic Ragi FLour">
            <div class="card-body">
              <p class="card-text">Ragi Flour</p>
                 <section><span class="rupees">240rs</span>
                 <button class="add" type="submit" name="add">add</button></section>
              <input type="hidden" name="Item_Name" value="Ragi Flour">
              <input type="hidden" name="Price" value="240">
              <input type="hidden" name="Item_Image" value="/BCA Project BUYZEE/Images/Organic Grocery_/Flours_/1.jpg">
            </div>
        </div></form>
          <form action="/BCA Project BUYZEE/Code/Html/manage_cart.php" method="post">   <div class="card" style="width: 11.5rem;">
            <img src="/BCA Project BUYZEE/Images/Organic Grocery_/Flours_/2.jpg" class="card-img-top" alt="Bajra Flour">
            <div class="card-body">
              <p class="card-text">Bajra Flour</p>
                 <section><span class="rupees">80rs</span>
               <button class="add" type="submit" name="add">add</button></section>
            <input type="hidden" name="Item_Name" value="Bajra Flour">
            <input type="hidden" name="Price" value="80">
            <input type="hidden" name="Item_Image" value="/BCA Project BUYZEE/Images/Organic Grocery_/Flours_/2.jpg">
            </div>
        </div>
        </form>
          <form action="/BCA Project BUYZEE/Code/Html/manage_cart.php" method="post">   <div class="card" style="width: 11.5rem;">
            <img src="/BCA Project BUYZEE/Images/Organic Grocery_/Flours_/3.jpg" class="card-img-top" alt=">Wheat Flour">
            <div class="card-body">
              <p class="card-text">Wheat Flour</p>
                 <section><span class="rupees">150rs</span>
               <button class="add" type="submit" name="add">add</button></section>
            <input type="hidden" name="Item_Name" value="Wheat Flour">
            <input type="hidden" name="Price" value="150">
            <input type="hidden" name="Item_Image" value="/BCA Project BUYZEE/Images/Organic Grocery_/Flours_/3.jpg">
        </div>
      </div></form>
     
    </span>
  <span id="card">
      
    <form action="/BCA Project BUYZEE/Code/Html/manage_cart.php" method="post">   <div class="card" style="width: 11.5rem;">
        <img src="/BCA Project BUYZEE/Images/Organic Grocery_/Flours_/4.jpg" class="card-img-top" alt=">Wheat Daliya">
        <div class="card-body">
          <p class="card-text">Wheat Daliya</p>
             <section><span class="rupees">140rs</span>
               <button class="add" type="submit" name="add">add</button></section>
            <input type="hidden" name="Item_Name" value="Wheat Daliya">
            <input type="hidden" name="Price" value="140">
            <input type="hidden" name="Item_Image" value="/BCA Project BUYZEE/Images/Organic Grocery_/Flours_/4.jpg">
        </div> 
    </div></form>
          <form action="/BCA Project BUYZEE/Code/Html/manage_cart.php" method="post">   <div class="card" style="width: 11.5rem;">
            <img src="/BCA Project BUYZEE/Images/Organic Grocery_/Flours_/5.jpg" class="card-img-top" alt="Wheat Suji">
            <div class="card-body">
              <p class="card-text">Wheat Suji</p>
              </section> <span class="rupees">200rs</span>
               <button class="add" type="submit" name="add">add</button></section>
            <input type="hidden" name="Item_Name" value="Wheat Suji">
            <input type="hidden" name="Price" value="200">
            <input type="hidden" name="Item_Image" value="/BCA Project BUYZEE/Images/Organic Grocery_/Flours_/5.jpg">
            </div>
        </div></form>
          <form action="/BCA Project BUYZEE/Code/Html/manage_cart.php" method="post">   <div class="card" style="width: 11.5rem;">
            <img src="/BCA Project BUYZEE/Images/Organic Grocery_/Flours_/6.jpg" class="card-img-top" alt="Aashirvaad Aata">
            <div class="card-body">
              <p class="card-text">Aashirvaad Aata</p>
                 <section><span class="rupees">250rs</span>
                 <button class="add" type="submit" name="add">add</button></section>
            <input type="hidden" name="Item_Name" value="Aashirvaad Aata">
            <input type="hidden" name="Price" value="250">
            <input type="hidden" name="Item_Image" value="/BCA Project BUYZEE/Images/Organic Grocery_/Flours_/6.jpg">
            </div>
        </div>
        </form>
          <form action="/BCA Project BUYZEE/Code/Html/manage_cart.php" method="post">   <div class="card" style="width: 11.5rem;">
            <img src="/BCA Project BUYZEE/Images/Organic Grocery_/Flours_/7.jpg" class="card-img-top" alt="7 Grain Aata">
            <div class="card-body">
              <p class="card-text">7 Grain Aata</p>
                <section><span class="rupees">200rs</span>
               <button class="add" type="submit" name="add">add</button></section>
            <input type="hidden" name="Item_Name" value="7 Grain Aata">
            <input type="hidden" name="Price" value="200">
            <input type="hidden" name="Item_Image" value="/BCA Project BUYZEE/Images/Organic Grocery_/Flours_/7.jpg">
        </div>
      </div>
      </form>
    </span>
  <span id="card">
      
    <form action="/BCA Project BUYZEE/Code/Html/manage_cart.php" method="post">   <div class="card" style="width: 11.5rem;">
        <img src="/BCA Project BUYZEE/Images/Organic Grocery_/Flours_/8.jpg" class="card-img-top" alt="Chakhi Fresh Aata">
        <div class="card-body">
          <p class="card-text">Chakhi Fresh Aata</p>
             <section><span class="rupees">140rs</span>
               <button class="add" type="submit" name="add">add</button></section>
            <input type="hidden" name="Item_Name" value="Chakhi Fresh Aata">
            <input type="hidden" name="Price" value="140">
            <input type="hidden" name="Item_Image" value="/BCA Project BUYZEE/Images/Organic Grocery_/Flours_/8.jpg">
        </div> 
    </div></form>
          <form action="/BCA Project BUYZEE/Code/Html/manage_cart.php" method="post">   <div class="card" style="width: 11.5rem;">
            <img src="/BCA Project BUYZEE/Images/Organic Grocery_/Flours_/9.jpg" class="card-img-top" alt="Whole Wheat Aata">
            <div class="card-body">
              <p class="card-text">Whole Wheat Aata</p>
                <section> <span class="rupees">130rs</span>
               <button class="add" type="submit" name="add">add</button></section>
            <input type="hidden" name="Item_Name" value="Whole Wheat Aata">
            <input type="hidden" name="Price" value="130">
            <input type="hidden" name="Item_Image" value="/BCA Project BUYZEE/Images/Organic Grocery_/Flours_/9.jpg">
            </div>
        </div></form>
          <form action="/BCA Project BUYZEE/Code/Html/manage_cart.php" method="post">   <div class="card" style="width: 11.5rem;">
            <img src="/BCA Project BUYZEE/Images/Organic Grocery_/Oil _ Ghee/1.jpg" class="card-img-top" alt="Natural Ghee">
            <div class="card-body">
              <p class="card-text">Natural Ghee</p>
                 <section><span class="rupees">200rs</span>
               <button class="add" type="submit" name="add">add</button></section>
            <input type="hidden" name="Item_Name" value="Natural Ghee">
            <input type="hidden" name="Price" value="200">
            <input type="hidden" name="Item_Image" value="/BCA Project BUYZEE/Images/Organic Grocery_/Oil _ Ghee/1.jpg">
            </div>
        </div></form>

          <form action="/BCA Project BUYZEE/Code/Html/manage_cart.php" method="post">   <div class="card" style="width: 11.5rem;">
            <img src="/BCA Project BUYZEE/Images/Organic Grocery_/Oil _ Ghee/2.jpg" class="card-img-top" alt="Mustard Oil">
            <div class="card-body">
              <p class="card-text">Mustard Oil</p>
                 <section><span class="rupees">250rs</span>
               <button class="add" type="submit" name="add">add</button></section>
            <input type="hidden" name="Item_Name" value="Mustard Oil">
            <input type="hidden" name="Price" value="250">
            <input type="hidden" name="Item_Image" value="/BCA Project BUYZEE/Images/Organic Grocery_/Oil _ Ghee/2.jpg">
        </div>
      </div></form>
     
    </span>
    <span id="card">
      
      <form action="/BCA Project BUYZEE/Code/Html/manage_cart.php" method="post">   <div class="card" style="width: 11.5rem;">
          <img src="/BCA Project BUYZEE/Images/Organic Grocery_/Oil _ Ghee/3.jpg" class="card-img-top" alt="Organic Mustard Oil">
          <div class="card-body">
            <p class="card-text">Organic Mustard Oil 2L</p>
               <section><span class="rupees">300rs</span>
                 <button class="add" type="submit" name="add">add</button></section>
            <input type="hidden" name="Item_Name" value="Organic Mustard Oil 2L">
            <input type="hidden" name="Price" value="300">
            <input type="hidden" name="Item_Image" value="/BCA Project BUYZEE/Images/Organic Grocery_/Oil _ Ghee/3.jpg">
          </div> 
      </div></form>
            <form action="/BCA Project BUYZEE/Code/Html/manage_cart.php" method="post">   <div class="card" style="width: 11.5rem;">
              <img src="/BCA Project BUYZEE/Images/Organic Grocery_/Oil _ Ghee/4.jpg" class="card-img-top" alt="Virgin Coconut Oil">
              <div class="card-body">
                <p class="card-text">Coconut Oil</p>
                </section> <span class="rupees">300rs</span>
                 <button class="add" type="submit" name="add">add</button></section>
            <input type="hidden" name="Item_Name" value="Coconut Oil">
            <input type="hidden" name="Price" value="300">
            <input type="hidden" name="Item_Image" value="/BCA Project BUYZEE/Images/Organic Grocery_/Oil _ Ghee/4.jpg">
              </div>
          </div></form>
            <form action="/BCA Project BUYZEE/Code/Html/manage_cart.php" method="post">   <div class="card" style="width: 11.5rem;">
              <img src="/BCA Project BUYZEE/Images/Organic Grocery_/Oil _ Ghee/5.jpg" class="card-img-top" alt="Mustard Oil">
              <div class="card-body">
                <p class="card-text">Mustard Oil</p>
                   <section><span class="rupees">140rs</span>
                   <button class="add" type="submit" name="add">add</button></section>
            <input type="hidden" name="Item_Name" value="Mustard Oil">
            <input type="hidden" name="Price" value="140">
            <input type="hidden" name="Item_Image" value="/BCA Project BUYZEE/Images/Organic Grocery_/Oil _ Ghee/5.jpg">
              </div>
          </div></form>
  
            <form action="/BCA Project BUYZEE/Code/Html/manage_cart.php" method="post">   <div class="card" style="width: 11.5rem;">
              <img src="/BCA Project BUYZEE/Images/Organic Grocery_/Oil _ Ghee/6.jpg" class="card-img-top" alt="Pure Cow Ghee">
              <div class="card-body">
                <p class="card-text">Pure Cow Ghee</p>
                  <section><span class="rupees">400rs</span>
                 <button class="add" type="submit" name="add">add</button></section>
            <input type="hidden" name="Item_Name" value="Pure Cow Ghee">
            <input type="hidden" name="Price" value="400">
            <input type="hidden" name="Item_Image" value="/BCA Project BUYZEE/Images/Organic Grocery_/Oil _ Ghee/6.jpg">
          </div>
        </div></form>
       
      </span>
      <span id="card">
      
        <form action="/BCA Project BUYZEE/Code/Html/manage_cart.php" method="post">   <div class="card" style="width: 11.5rem;">
            <img src="/BCA Project BUYZEE/Images/Organic Grocery_/Oil _ Ghee/7.jpg" class="card-img-top" alt="Sesame Oil">
            <div class="card-body">
              <p class="card-text">Sesame Oil</p>
                 <section><span class="rupees">240rs</span>
                   <button class="add" type="submit" name="add">add</button></section>
            <input type="hidden" name="Item_Name" value="Sesame Oil">
            <input type="hidden" name="Price" value="240">
            <input type="hidden" name="Item_Image" value="/BCA Project BUYZEE/Images/Organic Grocery_/Oil _ Ghee/7.jpg">
            </div> 
        </div></form>
              <form action="/BCA Project BUYZEE/Code/Html/manage_cart.php" method="post">   <div class="card" style="width: 11.5rem;">
                <img src="/BCA Project BUYZEE/Images/Organic Grocery_/Pulses _ Millets/1.jpg" class="card-img-top" alt="Kabuli Chana">
                <div class="card-body">
                  <p class="card-text">Kabuli Chana 1kg</p>
                  </section> <span class="rupees">120rs</span>
                   <button class="add" type="submit" name="add">add</button></section>
              <input type="hidden" name="Item_Name" value="Kabuli Chana 1kg">
              <input type="hidden" name="Price" value="120">
             <input type="hidden" name="Item_Image" value="/BCA Project BUYZEE/Images/Organic Grocery_/Pulses _ Millets/1.jpg">
                </div>
            </div></form>
              <form action="/BCA Project BUYZEE/Code/Html/manage_cart.php" method="post">   <div class="card" style="width: 11.5rem;">
                <img src="/BCA Project BUYZEE/Images/Organic Grocery_/Pulses _ Millets/2.jpg" class="card-img-top" alt="Masoor Whole">
                <div class="card-body">
                  <p class="card-text">"Masoor Whole</p>
                     <section><span class="rupees">150rs</span>
                     <button class="add" type="submit" name="add">add</button></section>
              <input type="hidden" name="Item_Name" value="Masoor Whole">
              <input type="hidden" name="Price" value="150">
              <input type="hidden" name="Item_Image" value="/BCA Project BUYZEE/Images/Organic Grocery_/Pulses _ Millets/2.jpg">
                  </section>
                </div>
            </div>
            </form>
              <form action="/BCA Project BUYZEE/Code/Html/manage_cart.php" method="post">   <div class="card" style="width: 11.5rem;">
                <img src="/BCA Project BUYZEE/Images/Organic Grocery_/Pulses _ Millets/3.jpg" class="card-img-top" alt="Organic Moong Dal">
                <div class="card-body">
                  <p class="card-text">Organic Moong Dal</p>
                    <section><span class="rupees">250rs</span>
                   <button class="add" type="submit" name="add">add</button></section>
            <input type="hidden" name="Item_Name" value="Organic Moong Dal">
            <input type="hidden" name="Price" value="250">
            <input type="hidden" name="Item_Image" value="/BCA Project BUYZEE/Images/Organic Grocery_/Pulses _ Millets/3.jpg">
            </div>
          </div>
          </form>
        </span>
        <span id="card">
      
          <form action="/BCA Project BUYZEE/Code/Html/manage_cart.php" method="post">   <div class="card" style="width: 11.5rem;">
              <img src="/BCA Project BUYZEE/Images/Organic Grocery_/Pulses _ Millets/4.jpg" class="card-img-top" alt="Kabuli Chana">
              <div class="card-body">
                <p class="card-text">Kabuli Chana</p>
                   <section><span class="rupees">270rs</span>
                     <button class="add" type="submit" name="add">add</button></section>
            <input type="hidden" name="Item_Name" value="Kabuli Chana">
            <input type="hidden" name="Price" value="270">
            <input type="hidden" name="Item_Image" value="/BCA Project BUYZEE/Images/Organic Grocery_/Pulses _ Millets/4.jpg">
              </div> 
          </div></form>
                <form action="/BCA Project BUYZEE/Code/Html/manage_cart.php" method="post">   <div class="card" style="width: 11.5rem;">
                  <img src="/BCA Project BUYZEE/Images/Organic Grocery_/Pulses _ Millets/5.jpg" class="card-img-top" alt="Tur/Arhar Dal">
                  <div class="card-body">
                    <p class="card-text">Tur/Arhar Dal</p>
                    </section> <span class="rupees">240rs</span>
                     <button class="add" type="submit" name="add">add</button></section>
            <input type="hidden" name="Item_Name" value="Tur/Arhar Dal">
            <input type="hidden" name="Price" value="240">
            <input type="hidden" name="Item_Image" value="/BCA Project BUYZEE/Images/Organic Grocery_/Pulses _ Millets/5.jpg">
                  </div>
              </div></form>
                <form action="/BCA Project BUYZEE/Code/Html/manage_cart.php" method="post">   <div class="card" style="width: 11.5rem;">
                  <img src="/BCA Project BUYZEE/Images/Organic Grocery_/Pulses _ Millets/6.jpg" class="card-img-top" alt="Unpolished Masoor Dal">
                  <div class="card-body">
                    <p class="card-text">Unpolished Masoor Dal</p>
                       <section><span class="rupees">240rs</span>
                       <button class="add" type="submit" name="add">add</button></section>
            <input type="hidden" name="Item_Name" value="Unpolished Masoor Dal">
            <input type="hidden" name="Price" value="240">
            <input type="hidden" name="Item_Image" value="/BCA Project BUYZEE/Images/Organic Grocery_/Pulses _ Millets/6.jpg">
                  </div>
              </div>
              </form>
                <form action="/BCA Project BUYZEE/Code/Html/manage_cart.php" method="post">   <div class="card" style="width: 11.5rem;">
                  <img src="/BCA Project BUYZEE/Images/Organic Grocery_/Pulses _ Millets/7.jpg" class="card-img-top" alt="Unpolished Toor Dal">
                  <div class="card-body">
                    <p class="card-text">Unpolished Toor Dal</p>
                      <section><span class="rupees">250rs</span>
                     <button class="add" type="submit" name="add">add</button></section>
            <input type="hidden" name="Item_Name" value="Unpolished Toor Dal">
            <input type="hidden" name="Price" value="250">
            <input type="hidden" name="Item_Image" value="/BCA Project BUYZEE/Images/Organic Grocery_/Pulses _ Millets/7.jpg">
              </div>
            </div>
            </form>
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