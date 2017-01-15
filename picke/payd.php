
<?php
// define variables and set to empty values


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
$response="false";

$name=$_COOKIE["name"];
$rollno=$_COOKIE["rollno"];
$sql="SELECT * FROM `regist` WHERE roll_num='$rollno'  AND fullName='$name' ";
$result=$conn->query($sql);
  if (mysqli_num_rows($result) > 0)
   {

     $result = mysqli_fetch_array($result);
     $pay = $result["pay"];
     if($pay==1)
{
$response="true";}

    
 }
else
 {$response="false";
 }

 echo json_encode($response);

$conn->close();

?>


