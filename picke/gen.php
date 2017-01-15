<?php
// define variables and set to empty values

$school=$_COOKIE['school'];
$city=$_COOKIE['city'];
$group=$_COOKIE['group'];

$flag =0;
//unset($_COOKIE['school']);
//unset($_COOKIE['class']);
//unset($_COOKIE['city']);
//unset($_COOKIE['next']);

 setcookie("school", "", time()-3600, "/");  
  setcookie("city", "", time()-3600, "/"); 
             setcookie("class", "", time()-3600, "/"); 
              setcookie("next", "", time()-3600, "/");
              setcookie("name", "", time()-3600, "/");
              setcookie("phoneno", "", time()-3600, "/");
              setcookie("rollno", "", time()-3600, "/");
              setcookie("email", "", time()-3600, "/");
           setcookie("group", "", time()-3600, "/");
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
  //  die("Connection failed: " . $conn->connect_error);
} 
$sql = "USE TOSC_16";
if ($conn->query($sql) === TRUE) {
  //echo ("Database selected successfully");
} else {
  // echo ("Error selecting database: " );
}


$sql="SELECT * FROM `regist` WHERE grouped='$group'";
$result=$conn->query($sql);
if (!empty($result)) {
//echo("abc");
  if (mysqli_num_rows($result) > 0)
{
         $response["products"] = array();
 
    while ($row = mysqli_fetch_array($result)) {
     
        $product = array();

    $product["name"] = $row["fullName"];
        $product["classy"] = $row["class"];
        $product["roll_num"] = $row["roll_num"];
               $product["id"] = $row["id"];
                              $product["school"] = $row["school"];
                              $product["email"] = $row["email"];
                              $product["group"] = $row["grouped"];
		

   
       
        array_push($response["products"], $product);
        
    }

      echo json_encode($response["products"]);
$result=$conn->query($sql);
 }}
else
 {
 }



$conn->close();

?>
