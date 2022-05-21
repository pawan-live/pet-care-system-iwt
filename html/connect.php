<?php
// $servername = "localhost";
// $username = "user";
// $password = "123456";

// // Create connection
// $con = new mysqli($servername, $username, $password);

// // Check connection
// if ($con->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }
// echo "Connected successfully";
$con = new mysqli('localhost', 'root', '', 'pet_care_system');
if (!$con) {
  die(mysqli_error($con));
}
