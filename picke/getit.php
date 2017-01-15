<?php
// define variables and set to empty values

$flag =0;
  
  if (empty($_POST["city"])) {
    echo "Phone No is required";
    $flag = 1;
  } 
//   if (empty($_POST["website"])) {
//     $website = "";
//   } else {
//     $website = test_input($_POST["website"]);
//   }

//   if (empty($_POST["comment"])) {
//     $comment = "";
//   } else {
//     $comment = test_input($_POST["comment"]);
//   }

//   if (empty($_POST["gender"])) {
//     $genderErr = "Gender is required";
//   } else {
//     $gender = test_input($_POST["gender"]);
//   }

  if ($flag!=1){
  }

$servername = "localhost";
$username = "root";
$password = "sAhArAnTech1Kriti16";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "USE TOSC_16";
if ($conn->query($sql) === TRUE) {
   //echo ("Database selected successfully");
} else {
   // echo ("Error selecting database: " );
}


$city= mysqli_real_escape_string($conn, $_POST["city"]);
$sql="SELECT * FROM $city";
$result=$conn->query($sql);
if (!empty($result)) {

  if (mysqli_num_rows($result) > 0)
{
         $response["products"] = array();
 
    while ($row = mysqli_fetch_array($result)) {
     
        $product = array();

    $product["name"] = $row["name"];
		

   
       
        array_push($response["products"], $product);
        
    }

      echo json_encode($response["products"]);

    
 }}
else
 {
 }



$conn->close();

?>
