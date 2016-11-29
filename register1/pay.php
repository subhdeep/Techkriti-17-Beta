<?php
session_start();

ini_set('display_errors', 1); 
error_reporting(E_ALL);

$flag=0;



$access_token=$_SESSION['facebook_access_token'];

if(isset($_SESSION['facebook_access_token']))
{




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

$sql = "SELECT * FROM `users` WHERE access_token='$access_token'";
$result=$conn->query($sql);

  if (mysqli_num_rows($result) > 0)
   {
              $response["products"] = array();
 
    while ($row = mysqli_fetch_array($result)) {
     
        $product = array();

    $product["techid"] = $row["techid"];
        array_push($response["products"], $product);

}
      echo json_encode($response["products"]);
}




else
{       echo json_encode("false");
}


$conn->close();
}






else
{
      echo json_encode("false");


}


?>
