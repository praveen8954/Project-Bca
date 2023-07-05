<?php
$servername="localhost";
$user="root";
$password="";
$database="buyezee";
$conc=mysqli_connect($servername,$user,$password,$database);
if(!$conc){
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    Sorry we are facing some technical issues right now please try agian later
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';

  }
  else{
//    echo die( mysqli_error($conc));
echo mysqli_error($conc);
  }
?>