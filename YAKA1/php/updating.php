<?php

session_start();

include("config.php");
include("functions.php");

?>

<?php
include_once "config.php";

if (isset($_POST['btnSubmit'])) {

    $photo = $_POST["image1"];
    $itemname = $_POST["name"];
    $price = $_POST["PR1"];
    $description = $_POST["des1"];
    $type = $_POST["type1"];

    $sql = "update petstore set photo='$photo',name='$itemname',price='$price',description='$description',type='$type'where name like'%$itemname%'";
    if ($conn->query($sql)) {
        echo "You updated the data succesfully";
    } else {
        echo "error" . $conn->error;
    }
}




?>
<?php
include_once "config.php";
$itemname = $_GET["name"];
$sql = "select * from petstore where name like '%$itemname%'";

if ($result = $conn->query($sql)) {
    if ($result->num_rows > 0) {


        while ($row = $result->fetch_assoc()) {
            $photo = $row['photo'];
            $price = $row['price'];
            $description = $row['description'];
            $type = $row['type'];
        }
    }
} else {
    echo "no results";
}

$conn->close();




?>

<html>

<head>
<link rel="stylesheet" type="text/css" href="../styles/style.css" />   
<link rel="stylesheet" type="text/css" href="../styles/updating.css" />
</head>

<body>
<div class="load-wrapper">
    <div class="box" class="update">
        <center>
            <h3 class="h3-large">update data</h3>
         <center>
                <div class="formsdesign">
                    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

                        enter the product name : <input type="text" name="name" class="name" value=<?php echo $itemname; ?>> <br>
                        input the directory of the image <input type="type" name="image1" class="imagedirec" value=<?php echo $photo; ?>> <br>
                        enter the price of the product : <input type="text" name="PR1" class="price" value=<?php echo $price; ?>><br>
                        enter the description of thee product : <textarea name="des1" id="" cols="30" rows="10" class="description" value=<?php echo $description; ?>></textarea><br>
                        enter the type of the product : <input type="text" name='type1' value=<?php echo $type; ?>><br>
                        <input type="submit" name="btnSubmit">
                    </form>
                </div>
    </div>
    </div>
</body>

</html>