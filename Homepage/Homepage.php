<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="/BCA Project BUYZEE/Homepage/homepage.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  
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
<!-- <hr> -->

<!-- SLIDE  -->
    <div id="carousel">
    <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="/BCA Project BUYZEE/Homepage/second.jpg" class="d-block carousel-image" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <!-- <h5>First slide label</h5>
              <p>Some representative placeholder content for the first slide.</p> -->
            </div>
          </div>
          <div class="carousel-item">
            <img src="/BCA Project BUYZEE/Homepage/first.jpg" class="d-block carousel-image" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <!-- <h5>Second slide label</h5>
              <p>Some representative placeholder content for the second slide.</p> -->
            </div>
          </div>
          <div class="carousel-item">
            <img src="/BCA Project BUYZEE/Homepage/third.jpg" class="d-block carousel-image" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <!-- <h5>Third slide label</h5>
              <p>Some representative placeholder content for the third slide.</p> -->
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

    </div>

<!-- CARDS -->
<p class="headings">Dairy & Breakfast</p>
<span id="card">
    <form action="/BCA Project BUYZEE/Code/Html/manage_cart.php" method="post">  
  
    <div class="card" style="width: 11.5rem;">
        <img src="/BCA Project BUYZEE/Images/Dairy _ Breakfast _/Butter _ More/1.jpg" class="card-img-top " alt="Amul Butter">
        <div class="card-body">
          <p class="card-text ">Amul Butter</p>
          <section> <span class="rupees">40rs</span>
            <button class="add" type="submit" name="add">add</button></section>
            <input type="hidden" name="Item_Name" value="Amul Butter">
            <input type="hidden" name="Price" value="40">
            <input type="hidden" name="Item_Image" value="/BCA Project BUYZEE/Images/Dairy _ Breakfast _/Butter _ More/1.jpg">
           
        </div> 
    </div>
    </form>
    <form action="/BCA Project BUYZEE/Code/Html/manage_cart.php" method="post">  
          <div class="card" style="width: 11.5rem; ">
            <img src="/BCA Project BUYZEE/Images/Dairy _ Breakfast _/Milk/1.jpg" class="card-img-top" alt="Amul Milk">
            <div class="card-body">
              <p class="card-text">Amul Milk</p>
                  <section> <span class="rupees">40rs</span>
                  <button class="add" type="submit" name="add">add</button></section>
            <input type="hidden" name="Item_Name" value="Amul Milk">
            <input type="hidden" name="Price" value="40">
            <input type="hidden" name="Item_Image" value="/BCA Project BUYZEE/Images/Dairy _ Breakfast _/Milk/1.jpg">
            </div>
        </div>
        </form>
        <form action="/BCA Project BUYZEE/Code/Html/manage_cart.php" method="post">  
          <div class="card" style="width: 11.5rem; ">
            <img src="/BCA Project BUYZEE/Images/Dairy _ Breakfast _/Oats/1.jpg" class="card-img-top" alt="Saffola Masala Oats">
            <div class="card-body">
              <p class="card-text">Saffola Masala Oats</p>
                  <section> <span class="rupees">40rs</span>
                  <button class="add" type="submit" name="add">add</button></section>
            <input type="hidden" name="Item_Name" value="Saffola Masala Oats">
            <input type="hidden" name="Price" value="40">
            <input type="hidden" name="Item_Image" value="/BCA Project BUYZEE/Images/Dairy _ Breakfast _/Oats/1.jpg">
            </div>
        </div>
        </form>
        <form action="/BCA Project BUYZEE/Code/Html/manage_cart.php" method="post">  
          <div class="card" style="width: 11.5rem;">
            <img src="/BCA Project BUYZEE/Images/Dairy _ Breakfast _/Poha , Daliya _ Other Grains/1.jpg" class="card-img-top" alt="Rajdhani Poha">
            <div class="card-body">
              <p class="card-text">Rajdhani Poha</p>
                  <section> <span class="rupees">40rs</span>
                  <button class="add" type="submit" name="add">add</button></section>
            <input type="hidden" name="Item_Name" value="Rajdhani Poha">
            <input type="hidden" name="Price" value="40">
            <input type="hidden" name="Item_Image" value="/BCA Project BUYZEE/Images/Dairy _ Breakfast _/Poha , Daliya _ Other Grains/1.jpg">
        </div>
      </div>
    </form>
      <a class="seeall" href="/BCA Project BUYZEE/Code/Html/dairy.php">see all</a>
  </span>
<!-- CARDS -->
<p class="headings">Cold Drinks & Juices</p>
    <span id="card">
       <form action="/BCA Project BUYZEE/Code/Html/manage_cart.php" method="post"> 
    <div class="card" style="width: 11.5rem;">
        <img src="/BCA Project BUYZEE/Images/Cold Beverages_/Fruit Juices_/3.jpg" class="card-img-top" alt="">
        <div class="card-body">
          <p class="card-text">Tropicana up</p>
          <section>  <span class="rupees">90rs</span>
           
          <button class="add" type="submit" name="add">add</button></section>
            <input type="hidden" name="Item_Name" value="Tropicana up">
            <input type="hidden" name="Price" value="90">
            <input type="hidden" name="Item_Image" value="/BCA Project BUYZEE/Images/Cold Beverages_/Fruit Juices_/3.jpg">
        </div> 
    </div>
  </form>
         <form action="/BCA Project BUYZEE/Code/Html/manage_cart.php" method="post">
             <div class="card" style="width: 11.5rem; ">
            <img src="/BCA Project BUYZEE/Images/Cold Beverages_/Milk Based Drinks/Milkshake _ Flavoured Milk/1.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Amul cool</p>
                  <section> <span class="rupees">20rs</span>
             
              <button class="add" type="submit" name="add">add</button></section>
            <input type="hidden" name="Item_Name" value="Amul cool">
            <input type="hidden" name="Price" value="20">
            <input type="hidden" name="Item_Image" value="/BCA Project BUYZEE/Images/Cold Beverages_/Milk Based Drinks/Milkshake _ Flavoured Milk/1.jpg">
            </div>
        </div>
         </form>
          <form action="/BCA Project BUYZEE/Code/Html/manage_cart.php" method="post"> 
             <div class="card" style="width: 11.5rem; ">
            <img src="/BCA Project BUYZEE/Images/Cold Beverages_/Milk Drinks_/2.jpg" class="card-img-top" alt="  ">
             <div class="card-body">
            <p class="card-text">Strawberry shake </p>
                  <section> <span class="rupees">30rs</span>
               
              <button class="add" type="submit" name="add">add</button></section>
            <input type="hidden" name="Item_Name" value="Strawberry shake">
            <input type="hidden" name="Price" value="30">
            <input type="hidden" name="Item_Image" value="/BCA Project BUYZEE/Images/Cold Beverages_/Milk Drinks_/2.jpg">
            </div>
        </div></form>

       <form action="/BCA Project BUYZEE/Code/Html/manage_cart.php" method="post">   <div class="card" style="width: 11.5rem;">
            <img src="/BCA Project BUYZEE/Images/Cold Beverages_/Soft Drinks_/1.jpg  " class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Seven Up</p>
                  <section> <span class="rupees">40rs</span>
               
              <button class="add" type="submit" name="add">add</button></section>
            <input type="hidden" name="Item_Name" value="Seven Up">
            <input type="hidden" name="Price" value="40">
            <input type="hidden" name="Item_Image" value="/BCA Project BUYZEE/Images/Cold Beverages_/Soft Drinks_/1.jpg">
        </div>
      </div></form>
      <a class="seeall" href="/BCA Project BUYZEE/Code/Html/cold.php">see all</a>
    </span>
<!-- CARDS -->
<p class="headings">Soaps and Detrgent</p>
    <span id="card">
      
     <form action="/BCA Project BUYZEE/Code/Html/manage_cart.php" method="post"> <div class="card" style="width: 11.5rem;">
        <img src="/BCA Project BUYZEE/Images/Bathing Soaps_/1.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text">Patanjali Neem Kanti</p>
              <section> <span class="rupees">140rs</span>
           
          <button class="add" type="submit" name="add">add</button></section>
            <input type="hidden" name="Item_Name" value="Patanjali Neem Kanti">
            <input type="hidden" name="Price" value="140">
            <input type="hidden" name="Item_Image" value="/BCA Project BUYZEE/Images/Bathing Soaps_/1.jpg">
        </div> 
    </div></form>
          <form action="/BCA Project BUYZEE/Code/Html/manage_cart.php" method="post">  <div class="card" style="width: 11.5rem; ">
            <img src="/BCA Project BUYZEE/Images/Bathing Soaps_/2.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Godrej CINTHOL</p>
                  <section> <span class="rupees">120rs</span>
             
              <button class="add" type="submit" name="add">add</button></section>
            <input type="hidden" name="Item_Name" value="Godrej CINTHOL">
            <input type="hidden" name="Price" value="120">
            <input type="hidden" name="Item_Image" value="/BCA Project BUYZEE/Images/Bathing Soaps_/2.jpg">
            </div>
        </div></form>
          <form action="/BCA Project BUYZEE/Code/Html/manage_cart.php" method="post">  <div class="card" style="width: 11.5rem; ">
            <img src="/BCA Project BUYZEE/Images/Bathing Soaps_/3.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Dettol ICY COOL</p>
             <section> <span class="rupees">80rs</span>
              
              <button class="add" type="submit" name="add">add</button></section>
            <input type="hidden" name="Item_Name" value="Dettol ICY COOL">
            <input type="hidden" name="Price" value="80">
            <input type="hidden" name="Item_Image" value="/BCA Project BUYZEE/Images/Bathing Soaps_/3.jpg">
            </div>
        </div>
</form>
         <form action="/BCA Project BUYZEE/Code/Html/manage_cart.php" method="post">   <div class="card" style="width: 11.5rem;">
            <img src="/BCA Project BUYZEE/Images/Bathing Soaps_/4.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Dettol Skincare</p>
                  <section> <span class="rupees">110rs</span>
               
              <button class="add" type="submit" name="add">add</button></section>
            <input type="hidden" name="Item_Name" value="Dettol Skincare">
            <input type="hidden" name="Price" value="110">
            <input type="hidden" name="Item_Image" value="/BCA Project BUYZEE/Images/Bathing Soaps_/4.jpg">
        </div>
      </div></form>
      <a class="seeall" href="/BCA Project BUYZEE/Code/Html/soaps.php">see all</a>
    </span>
<!-- CARDS -->
<p class="headings">Skin Care</p>
    <span id="card">
      
    <form action="/BCA Project BUYZEE/Code/Html/manage_cart.php" method="post">  <div class="card" style="width: 11.5rem;">
        <img src="/BCA Project BUYZEE/Images/Skin Care/Body Lotion _ Face Cream/2.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text">Coconut moisturer</p>
             <section>  <span class="rupees">240rs</span>
           
          <button class="add" type="submit" name="add">add</button></section>
            <input type="hidden" name="Item_Name" value="Coconut moisturer">
            <input type="hidden" name="Price" value="240">
            <input type="hidden" name="Item_Image" value="/BCA Project BUYZEE/Images/Skin Care/Body Lotion _ Face Cream/2.jpg">
        </div> 
    </div></form>
          <form action="/BCA Project BUYZEE/Code/Html/manage_cart.php" method="post">  <div class="card" style="width: 11.5rem; ">
            <img src="/BCA Project BUYZEE/Images/Skin Care/Hair Removal_/2.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Veet Professional</p>
                  <section> <span class="rupees">60rs</span>
              
              <button class="add" type="submit" name="add">add</button></section>
            <input type="hidden" name="Item_Name" value="Veet Professional">
            <input type="hidden" name="Price" value="60">
            <input type="hidden" name="Item_Image" value="/BCA Project BUYZEE/Images/Skin Care/Hair Removal_/2.jpg">
            </div>
        </div></form>
          <form action="/BCA Project BUYZEE/Code/Html/manage_cart.php" method="post">  <div class="card" style="width: 11.5rem; ">
            <img src="/BCA Project BUYZEE/Images/Skin Care/Face Wash/1.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Neem face wash</p>
                  <section> <span class="rupees">70rs</span>
              
              <button class="add" type="submit" name="add">add</button></section>
            <input type="hidden" name="Item_Name" value="Neem face wash">
            <input type="hidden" name="Price" value="70">
            <input type="hidden" name="Item_Image" value="/BCA Project BUYZEE/Images/Skin Care/Face Wash/1.jpg">
            </div>
        </div>
</form>
           <form action="/BCA Project BUYZEE/Code/Html/manage_cart.php" method="post"> <div class="card" style="width: 11.5rem;">
            <img src="/BCA Project BUYZEE/Images/Skin Care/Body Lotion _ Face Cream/1.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Fair &Lovely</p>
                 <section>  <span class="rupees">65rs</span>  
               
              <button class="add" type="submit" name="add">add</button></section>
            <input type="hidden" name="Item_Name" value="Fair &Lovely">
            <input type="hidden" name="Price" value="65">
            <input type="hidden" name="Item_Image" value="/BCA Project BUYZEE/Images/Skin Care/Body Lotion _ Face Cream/1.jpg">
        </div>
      </div></form>
      <a class="seeall" href="/BCA Project BUYZEE/Code/Html/skin_care.php">see all</a>
    </span>
    
   
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
      <script src="homepage.js"></script>
      <!-- <script>
            if(document.getElementById("user").innerHTML!="Hi,user"){
            document.getElementById("register").style.display="none";
            document.getElementById("login").style.display="none";
            }
          </script> -->
</body>
</html>
