<?php

require 'config.php';
$itemname = $_POST["shopsearch"];
$sql = "select * from petstore where name like '%$itemname%'";

if($result = $conn->query($sql))
{
    if($result->num_rows > 0)
    {
        echo ("<table border ='1px'>");
        while($row=$result->fetch_assoc()){
         echo "<tr>";
            echo ("<td>".$row["photo"]."</td>");
            echo ("<td>".$row["name"]."</td>");
            echo ("<td>".$row["price"]."</td>");
            echo ("<td>".$row["description"]."</td>");
         echo "</tr>";

        }
        echo ("</table>");
    }
}

else{
    echo "no results";
}

$conn->close();



?>