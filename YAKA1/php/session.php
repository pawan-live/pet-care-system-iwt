<?php 
require_once('config.php');
session_start();
    if(isset($_POST['sub1']))
    {
        $username = $_POST['user-name'];
        $password = $_POST['passsword'];
        echo $username;
       if(empty($_POST['user-name']) || empty($_POST['passsword']))
       {
            header("location:login.php?Empty= please enter the details properly");
       }
       else
       {
            $sql="select * from user where email like '%$username%' and Password like '%$password%'";
            $result=mysqli_query($conn,$sql);

            if(mysqli_fetch_assoc($result))
            {
                $_SESSION['User']=$_POST['user-name'];
                header("location:home1.php");
            }
            else
            {
                header("location:login.php?Invalid= Please Enter Correct User Name and Password ");
            }
       }
    }
 

 ?>