<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="/BCA Project BUYZEE/Code/Css/categories.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
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


  <h1>CATEGORIES</h1>
   
    <span id="card">
         
        <div class="card" style="width: 18rem; height: 12rem;" >
        <img src="/BCA Project BUYZEE/Images/Aata , Rice _ Dal/Besan , Sooji _ Maida/6.jpg" class="card-img-top" alt="Aata">
        
        <div class="card-body">
            <a class="card-name" href="/BCA Project BUYZEE/Code/Html/aata.php">Aata,DAl & Rice</a>
        </div>
        
        </div>

         
        <div class="card" style="width: 18rem; height: 12rem;" >
            <img src="/BCA Project BUYZEE/Images/Home Essentials_/1.jpg" class="card-img-top" alt="..">
           
            <div class="card-body">
                <a class="card-name" href="/BCA Project BUYZEE/Code/Html/home_essential.php">Home Essentials</a>
            </div>
        </div>
         
            <div class="card" style="width: 18rem; height: 12rem;" >
                <img src="/BCA Project BUYZEE/Images/Kids Store/Diapering/1.jpg" class="card-img-top" alt="..">
               
                <div class="card-body">
                    <a class="card-name" href="/BCA Project BUYZEE/Code/Html/kidstore.php">Kids store</a>
                </div>
            </div>
             
                <div class="card" style="width: 18rem; height: 12rem;" >
                    <img src="/BCA Project BUYZEE/Images/Summer Favourites/Milk Drinks_/1.jpg" class="card-img-top" alt="..">
                    
                    <div class="card-body">
                       
        <a class="card-name" href="/BCA Project BUYZEE/Code/Html/summer.php">Summer Favourites</a>
                    </div>
                </div>
    </span>
 
    <span id="card">
         
        <div class="card" style="width: 18rem; height: 12rem;" >
        <img src="/BCA Project BUYZEE/Images/Bakery _ Biscuit_/Cream Biscuits/1.jpg" class="card-img-top" alt="biscuit">
        
        <div class="card-body">
            <a class="card-name" href="/BCA Project BUYZEE/Code/Html/bakery_biscuit.php">Bakery & Biscuits</a>
        </div>
        </div>

         
        <div class="card" style="width: 18rem; height: 12rem;" >
            <img src="/BCA Project BUYZEE/Images/Ice Creams/5.jpg" class="card-img-top" alt="..">
           
            <div class="card-body">
                <a class="card-name" href="/BCA Project BUYZEE/Code/Html/ice_cream.php">Ice-cream</a>
            </div>
        </div>
         
            <div class="card" style="width: 18rem; height: 12rem;" >
                <img src="/BCA Project BUYZEE/Images/Organic Grocery_/Dry Fruits/1.jpg" class="card-img-top" alt="..">
              
                <div class="card-body">
                    <a class="card-name" href="/BCA Project BUYZEE/Code/Html/organic.php">Organic Grocery</a>
                </div>
            </div>
             
                <div class="card" style="width: 18rem; height: 12rem;" >
                    <img src="/BCA Project BUYZEE/Images/Vegetables _ Fruits/1.jpg" class="card-img-top" alt="vegetable">
                  
                    <div class="card-body">
                        <a class="card-name" href="/BCA Project BUYZEE/Code/Html/vegetable.php">vegetable & Fruits</a>
                    </div>
                </div>
    </span>

    <span id="card">
         
        <div class="card" style="width: 18rem; height: 12rem;" >
        <img src="/BCA Project BUYZEE/Images/Bathing Soaps_/1.jpg" class="card-img-top" alt="soap">
      
        <div class="card-body">
            <a class="card-name" href="/BCA Project BUYZEE/Code/Html/soaps.php">Bathing Soaps</a>
        </div>
        </div>

         
        <div class="card" style="width: 18rem; height: 12rem;" >
            <img src="/BCA Project BUYZEE/Images/Bathing Essentials/Conditioners/1.jpg" class="card-img-top" alt="..">
           
            <div class="card-body">
                <a class="card-name" href="/BCA Project BUYZEE/Code/Html/bathing.php">Bathing Essentials</a>
            </div>
        </div>
         
            <div class="card" style="width: 18rem; height: 12rem;" >
                <img src="/BCA Project BUYZEE/Images/Party , Snacks _ Drinks/Beverages/1.jpg" class="card-img-top" alt="..">
               
                <div class="card-body">
                    <a class="card-name" href="/BCA Project BUYZEE/Code/Html/party_snacks.php">Party,Snacks&Drinks</a>
                </div>
            </div>
             
                <div class="card" style="width: 18rem; height: 12rem;" >
                    <img src="/BCA Project BUYZEE/Images/Dairy _ Breakfast _/Butter _ More/1.jpg" class="card-img-top" alt="..">
                    
                    <div class="card-body">
                        <a class="card-name" href="/BCA Project BUYZEE/Code/Html/dairy.php">Dairy&Breakfast</a>
                    </div>
                </div>
    </span>

    <span id="card">
         
        <div class="card" style="width: 18rem; height: 12rem;" >
        <img src="/BCA Project BUYZEE/Images/Cold Beverages_/Soft Drinks_/1.jpg" class="card-img-top" alt="cold">
      
        <div class="card-body">
            <a class="card-name" href="/BCA Project BUYZEE/Code/Html/cold.php">Cold Beverages</a>
        </div>
        </div>

         
        <!-- <div class="card" style="width: 18rem; height: 12rem;" >
            <img src="/BCA Project BUYZEE/Images/Personal Care/1.jpg" class="card-img-top" alt="..">
          
            <div class="card-body">
                <a class="card-name" href="/....">Personal Care</a>
            </div>
        </div> -->
         
            <div class="card" style="width: 18rem; height: 12rem;" >
                <img src="/BCA Project BUYZEE/Images/Dry Fruits, Masala _ Oil/Powered spices/1.jpg" class="card-img-top" alt="..">
              
                <div class="card-body">
                    <a class="card-name" href="/BCA Project BUYZEE/Code/Html/dry_fruit.php">Dry Fruit,Masala&Oil</a>
                </div>
            </div>
             
                <div class="card" style="width: 18rem; height: 12rem;" >
                    <img src="/BCA Project BUYZEE/Images/Instant _ Frozen Food/Noodles/1.jpg" class="card-img-top" alt="..">
                
                    <div class="card-body">
                        <a class="card-name" href="/BCA Project BUYZEE/Code/Html/instant_food.php">Instant-frozen Food</a>
                    </div>
                </div>
                <div class="card" style="width: 18rem; height: 12rem;" >
        <img src="/BCA Project BUYZEE/Images/Skin Care/Body Lotion _ Face Cream/1.jpg" class="card-img-top" alt="..">
        
        <div class="card-body">
            <a class="card-name" href="/BCA Project BUYZEE/Code/Html/skin_care.php"> Skin Care & beauty Products</a>
        </div>
        </div>
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