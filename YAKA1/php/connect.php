<?php
 
    $conn = new mysqli('localhost','root','', 'pet_care_system');
    if(!$conn){
        die(mysqli_error($conn));
    }
?>