<?php
 session_start();

 if(isset($_SESSION['User'])){
     session_destroy();

     header("Location:home1.php");
 }




?>