<?php

$servername = "localhost";
$username = "root";
$password = "sAhArAnTech1Kriti16";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "USE zonals17";
if ($conn->query($sql) === TRUE) {

} else {

}


$centre= mysqli_real_escape_string($conn, $_POST["centre"]);
$types= mysqli_real_escape_string($conn, $_POST["types"]);

$sql="SELECT * FROM $centre WHERE types='$types'";

$result=$conn->query($sql);


  if (mysqli_num_rows($result) > 0)
{

         $response["products"] = array();
 
    while ($row = mysqli_fetch_array($result)) {
     
        $product = array();

    $product["name"] = $row["name"];

   
       
        array_push($response["products"], $product);
        
    }

      echo json_encode($response["products"]);

    
 }
else
 {
 }



$conn->close();

?>
