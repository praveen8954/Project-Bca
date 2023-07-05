<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="kidstore.css">
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
  <h1>Kids Store</h1>
  <div class="dairy">
  <span id="card">
    
    <form action="/BCA Project BUYZEE/Code/Html/manage_cart.php" method="post">   <div class="card" style="width: 11.5rem;">
        <img src="/BCA Project BUYZEE/Images/Kids Store/Soap _ Wash/1.jpg" class="card-img-top" alt="Johnson's Soap"> 
        <div class="card-body">
          <p class="card-text">Johnson's Soap</p>

              <section> <span class="rupees">60rs</span>
               <button class="add" type="submit" name="add">add</button></section>
            <input type="hidden" name="Item_Name" value="Amul Butter">
            <input type="hidden" name="Price" value="40">
            <input type="hidden" name="Item_Image" value="/BCA Project BUYZEE/Images/Dairy _ Breakfast _/Butter _ More/1.jpg">
        </div> 
    </div></form>
          <form action="/BCA Project BUYZEE/Code/Html/manage_cart.php" method="post">   <div class="card" style="width: 11.5rem;">
            <img src="/BCA Project BUYZEE/Images/Kids Store/Soap _ Wash/2.jpg" class="card-img-top" alt="Johnson's Shampoo">     
            <div class="card-body">
              <p class="card-text">Johnson's Shampoo</p>
                 <section><span class="rupees">80rs</span>
               <button class="add" type="submit" name="add">add</button></section>
            <input type="hidden" name="Item_Name" value="Amul Butter">
            <input type="hidden" name="Price" value="40">
            <input type="hidden" name="Item_Image" value="/BCA Project BUYZEE/Images/Dairy _ Breakfast _/Butter _ More/1.jpg">
            </div>
        </div></form>
          <form action="/BCA Project BUYZEE/Code/Html/manage_cart.php" method="post">   <div class="card" style="width: 11.5rem;">
            <img src="/BCA Project BUYZEE/Images/Kids Store/Soap _ Wash/3.jpg" class="card-img-top" alt="Baby Wash">
            <div class="card-body">
              <p class="card-text">Baby Wash</p>
                <section><span class="rupees">90rs</span>
               <button class="add" type="submit" name="add">add</button></section>
            <input type="hidden" name="Item_Name" value="Amul Butter">
            <input type="hidden" name="Price" value="40">
            <input type="hidden" name="Item_Image" value="/BCA Project BUYZEE/Images/Dairy _ Breakfast _/Butter _ More/1.jpg">
            </div>
        </div></form>

          <form action="/BCA Project BUYZEE/Code/Html/manage_cart.php" method="post">   <div class="card" style="width: 11.5rem;">
            <img src="/BCA Project BUYZEE/Images/Kids Store/Soap _ Wash/4.jpg" class="card-img-top" alt="Himalaya Baby Wash">
            <div class="card-body">
              <p class="card-text">Himalaya Baby Wash</p>
                 <section><span class="rupees">80rs</span>
               <button class="add" type="submit" name="add">add</button></section>
            <input type="hidden" name="Item_Name" value="Amul Butter">
            <input type="hidden" name="Price" value="40">
            <input type="hidden" name="Item_Image" value="/BCA Project BUYZEE/Images/Dairy _ Breakfast _/Butter _ More/1.jpg">
        </div>
      </div></form>
     
    </span>
  <span id="card">
      
    <form action="/BCA Project BUYZEE/Code/Html/manage_cart.php" method="post">   <div class="card" style="width: 11.5rem;">
        <img src="/BCA Project BUYZEE/Images/Kids Store/Soap _ Wash/5.jpg" class="card-img-top" alt="Himalaya Baby Soap">
        <div class="card-body">
          <p class="card-text">Himalaya Baby Soap</p>
             <section><span class="rupees">40rs</span>
               <button class="add" type="submit" name="add">add</button></section>
            <input type="hidden" name="Item_Name" value="Amul Butter">
            <input type="hidden" name="Price" value="40">
            <input type="hidden" name="Item_Image" value="/BCA Project BUYZEE/Images/Dairy _ Breakfast _/Butter _ More/1.jpg">
        </div> 
    </div></form>
          <form action="/BCA Project BUYZEE/Code/Html/manage_cart.php" method="post">   <div class="card" style="width: 11.5rem;">
            <img src="/BCA Project BUYZEE/Images/Kids Store/Soap _ Wash/6.jpg" class="card-img-top" alt="Mamaearth Baby Wash">
            <div class="card-body">
              <p class="card-text">Mamaearth Baby Wash</p>
                 <section><span class="rupees">120rs</span>
               <button class="add" type="submit" name="add">add</button></section>
            <input type="hidden" name="Item_Name" value="Mamaearth Baby Wash">
            <input type="hidden" name="Price" value="120">
            <input type="hidden" name="Item_Image" value="/BCA Project BUYZEE/Images/Kids Store/Soap _ Wash/6.jpg">
            </section>
            </div>
        </div></form>
          <form action="/BCA Project BUYZEE/Code/Html/manage_cart.php" method="post">   <div class="card" style="width: 11.5rem;">
            <img src="/BCA Project BUYZEE/Images/Kids Store/Soap _ Wash/7.jpg" class="card-img-top" alt="Johnson's Wash and Shampoo">
            <div class="card-body">
              <p class="card-text">Johnson's Wash and Shampoo</p>
                 <section><span class="rupees">70rs</span>
               <button class="add" type="submit" name="add">add</button></section>
            <input type="hidden" name="Item_Name" value="Johnson's Wash and Shampoo">
            <input type="hidden" name="Price" value="70">
            <input type="hidden" name="Item_Image" value="/BCA Project BUYZEE/Images/Kids Store/Soap _ Wash/7.jpg">
            </div>
        </div>
        </form>
          <form action="/BCA Project BUYZEE/Code/Html/manage_cart.php" method="post">   <div class="card" style="width: 11.5rem;">
            <img src="/BCA Project BUYZEE/Images/Kids Store/Soap _ Wash/8.jpg" class="card-img-top" alt="Cetaphil Baby Lotion">
            <div class="card-body">
              <p class="card-text">Cetaphil Baby Lotion</p>
                 <section><span class="rupees">90rs</span>
               <button class="add" type="submit" name="add">add</button></section>
            <input type="hidden" name="Item_Name" value="Cetaphil Baby Lotion">
            <input type="hidden" name="Price" value="90">
            <input type="hidden" name="Item_Image" value="/BCA Project BUYZEE/Images/Kids Store/Soap _ Wash/8.jpg">
        </div>
      </div>
      </form>
    </span>
  <span id="card">
     
    <form action="/BCA Project BUYZEE/Code/Html/manage_cart.php" method="post">   <div class="card" style="width: 11.5rem;">
        <img src="/BCA Project BUYZEE/Images/Kids Store/Diapering/1.jpg" class="card-img-top" alt="Diaper">
        <div class="card-body">
          <p class="card-text">Mamy Poko Pants</p>
             <section><span class="rupees">140rs</span>
               <button class="add" type="submit" name="add">add</button></section>
            <input type="hidden" name="Item_Name" value="Mamy Poko Pants">
            <input type="hidden" name="Price" value="140">
            <input type="hidden" name="Item_Image" value="/BCA Project BUYZEE/Images/Kids Store/Diapering/1.jpg">
        </div> 
    </div></form>
          <form action="/BCA Project BUYZEE/Code/Html/manage_cart.php" method="post">   <div class="card" style="width: 11.5rem;">
            <img src="/BCA Project BUYZEE/Images/Kids Store/Diapering/2.jpg" class="card-img-top" alt="Pampers">
            <div class="card-body">
              <p class="card-text">Pampers(S)</p>
              </section> <span class="rupees">120rs</span>
               <button class="add" type="submit" name="add">add</button></section>
            <input type="hidden" name="Item_Name" value="Pampers(S)">
            <input type="hidden" name="Price" value="120">
            <input type="hidden" name="Item_Image" value="/BCA Project BUYZEE/Images/Kids Store/Diapering/2.jpg">
            </div>
        </div></form>
          <form action="/BCA Project BUYZEE/Code/Html/manage_cart.php" method="post">   <div class="card" style="width: 11.5rem;">
            <img src="/BCA Project BUYZEE/Images/Kids Store/Diapering/3.jpg" class="card-img-top" alt="Huggies">
            <div class="card-body">
              <p class="card-text">Huggies(XL)</p>
                 <section><span class="rupees">150rs</span>
               <button class="add" type="submit" name="add">add</button></section>
            <input type="hidden" name="Item_Name" value="Huggies(XL)">
            <input type="hidden" name="Price" value="150">
            <input type="hidden" name="Item_Image" value="/BCA Project BUYZEE/Images/Kids Store/Diapering/3.jpg">
              </section>
            </div>
        </div>
        </form>
          <form action="/BCA Project BUYZEE/Code/Html/manage_cart.php" method="post">   <div class="card" style="width: 11.5rem;">
            <img src="/BCA Project BUYZEE/Images/Kids Store/Diapering/4.jpg" class="card-img-top" alt="Huggies">
            <div class="card-body">
              <p class="card-text">Huggies(L)</p>
                </section><span class="rupees">150rs</span>
               <button class="add" type="submit" name="add">add</button></section>
            <input type="hidden" name="Item_Name" value="Huggies(L)">
            <input type="hidden" name="Price" value="150">
            <input type="hidden" name="Item_Image" value="/BCA Project BUYZEE/Images/Kids Store/Diapering/4.jpg">
        </div>
      </div></form>
     
    </span>
  <span id="card">
      
    <form action="/BCA Project BUYZEE/Code/Html/manage_cart.php" method="post">   <div class="card" style="width: 11.5rem;">
        <img src="/BCA Project BUYZEE/Images/Kids Store/Diapering/5.jpg" class="card-img-top" alt="Pamper">
        <div class="card-body">
          <p class="card-text">Pampers(L)</p>
             <section><span class="rupees">120rs</span>
               <button class="add" type="submit" name="add">add</button></section>
            <input type="hidden" name="Item_Name" value="Pampers(L)">
            <input type="hidden" name="Price" value="120">
            <input type="hidden" name="Item_Image" value="/BCA Project BUYZEE/Images/Kids Store/Diapering/5.jpg">
        </div> 
    </div></form>
          <form action="/BCA Project BUYZEE/Code/Html/manage_cart.php" method="post">   <div class="card" style="width: 11.5rem;">
            <img src="/BCA Project BUYZEE/Images/Kids Store/Diapering/6.jpg" class="card-img-top" alt="Huggies Monthly Pack">
            <div class="card-body">
              <p class="card-text">Huggies Monthly Pack</p>
                <section> <span class="rupees">200rs</span>
               <button class="add" type="submit" name="add">add</button></section>
            <input type="hidden" name="Item_Name" value="Huggies Monthly Pack">
            <input type="hidden" name="Price" value="200">
            <input type="hidden" name="Item_Image" value="/BCA Project BUYZEE/Images/Kids Store/Diapering/6.jpg">
            </div>
        </div></form>
          <form action="/BCA Project BUYZEE/Code/Html/manage_cart.php" method="post">   <div class="card" style="width: 11.5rem;">
            <img src="/BCA Project BUYZEE/Images/Kids Store/Diapering/7.jpg" class="card-img-top" alt="Huggies">
            <div class="card-body">
              <p class="card-text">Huggies</p>
                 <section><span class="rupees">150rs</span>
               <button class="add" type="submit" name="add">add</button></section>
            <input type="hidden" name="Item_Name" value="Huggies">
            <input type="hidden" name="Price" value="150">
            <input type="hidden" name="Item_Image" value="/BCA Project BUYZEE/Images/Kids Store/Diapering/7.jpg">
            </div>
        </div>
        </form>
          <form action="/BCA Project BUYZEE/Code/Html/manage_cart.php" method="post">   <div class="card" style="width: 11.5rem;">
            <img src="/BCA Project BUYZEE/Images/Kids Store/Diapering/9.jpg" class="card-img-top" alt="Littles Comfy Baby Pants">
            <div class="card-body">
              <p class="card-text">Littles Comfy Baby Pants</p>
                 <section><span class="rupees">140rs</span>
               <button class="add" type="submit" name="add">add</button></section>
            <input type="hidden" name="Item_Name" value="Littles Comfy Baby Pants">
            <input type="hidden" name="Price" value="140">
            <input type="hidden" name="Item_Image" value="/BCA Project BUYZEE/Images/Kids Store/Diapering/9.jpg">
        </div>
      </div>
      </form>
         
        </span>
      <span id="card">
         
        <form action="/BCA Project BUYZEE/Code/Html/manage_cart.php" method="post">   <div class="card" style="width: 11.5rem;">
            <img src="/BCA Project BUYZEE/Images/Kids Store/Baby Food/1.jpg" class="card-img-top" alt="Cerelac Wheat Honey Dates">
            <div class="card-body">
              <p class="card-text">Cerelac Wheat Honey Dates</p>
                 <section><span class="rupees">120rs</span>
                   <button class="add" type="submit" name="add">add</button></section>
            <input type="hidden" name="Item_Name" value="Cerelac Wheat Honey Dates">
            <input type="hidden" name="Price" value="120">
            <input type="hidden" name="Item_Image" value="/BCA Project BUYZEE/Images/Kids Store/Baby Food/1.jpg">
            </div> 
        </div></form>
              <form action="/BCA Project BUYZEE/Code/Html/manage_cart.php" method="post">   <div class="card" style="width: 11.5rem;">
                <img src="/BCA Project BUYZEE/Images/Kids Store/Baby Food/2.jpg" class="card-img-top" alt="Cerelac Wheat-Rice Mixed Fruit">
                <div class="card-body">
                  <p class="card-text">Cerelac Wheat-Rice Mixed Fruit</p>
                  </section> <span class="rupees">140rs</span>
                   <button class="add" type="submit" name="add">add</button></section>
            <input type="hidden" name="Item_Name" value="Cerelac Wheat-Rice Mixed Fruit">
            <input type="hidden" name="Price" value="140">
            <input type="hidden" name="Item_Image" value="/BCA Project BUYZEE/Images/Kids Store/Baby Food/2.jpg">
                </div>
            </div></form>
              <form action="/BCA Project BUYZEE/Code/Html/manage_cart.php" method="post">   <div class="card" style="width: 11.5rem;">
                <img src="/BCA Project BUYZEE/Images/Kids Store/Baby Food/3.jpg" class="card-img-top" alt="Infant Milk Food">
                <div class="card-body">
                  <p class="card-text">Infant Milk Food</p>
                     <section><span class="rupees">90rs</span>
                   <button class="add" type="submit" name="add">add</button></section>
            <input type="hidden" name="Item_Name" value="Infant Milk Food">
            <input type="hidden" name="Price" value="90">
            <input type="hidden" name="Item_Image" value="/BCA Project BUYZEE/Images/Kids Store/Baby Food/3.jpg">
                  </section>
                </div>
            </div>
            </form>
              <form action="/BCA Project BUYZEE/Code/Html/manage_cart.php" method="post">   <div class="card" style="width: 11.5rem;">
                <img src="/BCA Project BUYZEE/Images/Kids Store/Baby Food/4.jpg" class="card-img-top" alt="Ceregrow with Milk and Fruits">
                <div class="card-body">
                  <p class="card-text">Ceregrow with Milk and Fruits</p>
                    </section><span class="rupees">40rs</span>
                   <button class="add" type="submit" name="add">add</button></section>
            <input type="hidden" name="Item_Name" value="Ceregrow with Milk and Fruits">
            <input type="hidden" name="Price" value="40">
            <input type="hidden" name="Item_Image" value="/BCA Project BUYZEE/Images/Kids Store/Baby Food/4.jpg">
            </div>
          </div></form>
        </span>
        <span id="card">
          <form action="/BCA Project BUYZEE/Code/Html/manage_cart.php" method="post">   <div class="card" style="width: 11.5rem;">
            <img src="/BCA Project BUYZEE/Images/Kids Store/Baby Food/5.jpg" class="card-img-top" alt="Timios">
            <div class="card-body">
              <p class="card-text">Timios(Banana and Honey Star)</p>
                 <section><span class="rupees">180rs</span>
                   <button class="add" type="submit" name="add">add</button></section>
            <input type="hidden" name="Item_Name" value="Timios(Banana and Honey Star)">
            <input type="hidden" name="Price" value="180">
            <input type="hidden" name="Item_Image" value="/BCA Project BUYZEE/Images/Kids Store/Baby Food/5.jpg">
            </div> 
        </div></form>
              <form action="/BCA Project BUYZEE/Code/Html/manage_cart.php" method="post">   <div class="card" style="width: 11.5rem;">
                <img src="/BCA Project BUYZEE/Images/Kids Store/Baby Food/6.jpg" class="card-img-top" alt="Aptamil Gold">
                <div class="card-body">
                  <p class="card-text">Aptamil Gold 3</p>
                    <section> <span class="rupees">80rs</span>
                   <button class="add" type="submit" name="add">add</button></section>
            <input type="hidden" name="Item_Name" value="Aptamil Gold 3">
            <input type="hidden" name="Price" value="80">
            <input type="hidden" name="Item_Image" value="/BCA Project BUYZEE/Images/Kids Store/Baby Food/6.jpg">
                </div>
            </div></form>
              <form action="/BCA Project BUYZEE/Code/Html/manage_cart.php" method="post">   <div class="card" style="width: 11.5rem;">
                <img src="/BCA Project BUYZEE/Images/Kids Store/Baby Food/7.jpg" class="card-img-top" alt="Dexolac">
                <div class="card-body">
                  <p class="card-text">Dexolac</p>
                     <section><span class="rupees">120rs</span>
                   <button class="add" type="submit" name="add">add</button></section>
            <input type="hidden" name="Item_Name" value="Dexolac">
            <input type="hidden" name="Price" value="120">
            <input type="hidden" name="Item_Image" value="/BCA Project BUYZEE/Images/Kids Store/Baby Food/7.jpg">
                </div>
            </div></form>
    
              <form action="/BCA Project BUYZEE/Code/Html/manage_cart.php" method="post">   <div class="card" style="width: 11.5rem;">
                <img src="/BCA Project BUYZEE/Images/Kids Store/Baby Food/9.jpg" class="card-img-top" alt="Ceregrow Grain">
                <div class="card-body">
                  <p class="card-text">Ceregrow Grain Selection</p>
                     <section><span class="rupees">180rs</span>
                   <button class="add" type="submit" name="add">add</button></section>
            <input type="hidden" name="Item_Name" value="Ceregrow Grain Selection">
            <input type="hidden" name="Price" value="180">
            <input type="hidden" name="Item_Image" value="/BCA Project BUYZEE/Images/Kids Store/Baby Food/9.jpg">
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