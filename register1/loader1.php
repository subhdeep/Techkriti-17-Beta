<?php
session_start();

ini_set('display_errors', 1); 
error_reporting(E_ALL);








if(isset($_SESSION['facebook_access_token']))
{
$access_token=$_SESSION['facebook_access_token'];

$servername = "localhost";
$username = "root";
$password = "sAhArAnTech1Kriti16";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  //  die("Connection failed: " . $conn->connect_error);
} 
$sql = "USE TOSC_16";
if ($conn->query($sql) === TRUE) {

} else {

}


$sql="SELECT * FROM `users` WHERE access_token='$access_token'";
$result=$conn->query($sql);

  if (mysqli_num_rows($result) > 0)
{
         $response["products"] = array();
 
    while ($row = mysqli_fetch_array($result)) {
     
        $product = array();

    $product["name"] = $row["name"];

        $product["url"] = $row["url"];
        $product["id"] = $row["id"];
        $product["email"] = $row["email"];
              
        $product["college"] = $row["college"];
   
               $product["contact"] = $row["contact"];
        $product["city"] = $row["city"];
        $product["workshop"] = $row["workshop"];
        $product["centre"] = $row["centre"];
        $product["pay"] = $row["pay"];
        $product["techid"] = $row["techid"];
        array_push($response["products"], $product);
        
    }

      echo json_encode($response["products"]);

 }
else
 {
      echo json_encode("false1");
 }
$conn->close();

}




else
{

      echo json_encode("false");
}


?>
