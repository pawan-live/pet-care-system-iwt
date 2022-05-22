<?php
  require_once("config.php");


  $name = $_GET["name"];

  $sql = "delete from petstore where name like '%$name%'";

 if($conn->query($sql))
{
    echo "you deleted  data succesfully";
}
else{
    echo "error".$conn->error;
}
header("Location:update.php");




?>