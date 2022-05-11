<?php
 $name = $_POST['Fname'];
 $Email = $_POST['Email'];
 $message = $_POST['MSG'];
 
 // include database connection file
 require_once("config.php");

 //insert the user data

 $sql = "INSERT INTO contactusdetails(name,email,message) VALUES('$name','$Email','$message')";

 if($conn->query($sql))
{
    echo "Your message sent succesefully";
}
else{
    echo "error".$conn->error;
}
$conn->close();
?>