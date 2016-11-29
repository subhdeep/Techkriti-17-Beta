<?php
// define variables and set to empty values

$flag =0;
  if (empty($_POST["name"])) {
    $response="Name is required";
    $flag = 1;
  } 
  if (empty($_POST["CCity"])&&($flag==0)) {
    $response= "College city is required";
    $flag = 1;
  } 
if (empty($_POST["CName"])&&($flag==0)) {
    $response= "College Name is required";
    $flag = 1;
  } 
  if (empty($_POST["CLocation"])&&($flag==0)) {
    $response= "College Strength is required";
    $flag = 1;
  } 
  if (empty($_POST["CAddress"])&&($flag==0)) {
    $response= "College Address is required";
    $flag = 1;
  } 
  if (empty($_POST["Pincode"])&&($flag==0)) {
    $response= "Pincode is required";
    $flag = 1;
  } 
    if (empty($_POST["CuAddress"])&&($flag==0)) {
    $response= "Current Address is required";
    $flag = 1;
  } 
     if (empty($_POST["CuPincode"])&&($flag==0)) {
    $response= "Pincode is required";
    $flag = 1;
  } 
 if (empty($_POST["mobile"])&&($flag==0)) {
    $response= "MObile is required";
    $flag = 1;
  } 
 if (empty($_POST["email"])&&($flag==0)) {
    $response= "Email is required";
    $flag = 1;
  } 
   if (empty($_POST["president"])&&($flag==0)) {
    $response= "President details is required";
    $flag = 1;
  }  if (empty($_POST["motive"])&&($flag==0)) {
    $response= "Motive is required";
    $flag = 1;
  }  if (empty($_POST["relevent"])&&($flag==0)) {
    $response= "Past Exp is required is required";
    $flag = 1;
  } 
 if (empty($_POST["appro"])&&($flag==0)) {
    $response= "State your approach";
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

  

$servername = "localhost";
$username = "root";
$password = "sAhArAnTech1Kriti16";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "CREATE DATABASE IF NOT EXISTS TOSC_16";
if ($conn->query($sql) === TRUE) {
    // echo "Database created successfully";
} else {
    // echo "Error creating database: " . $conn->error;
}
$sql = "USE TOSC_16";
if ($conn->query($sql) === TRUE) {
    // echo "Database selected successfully";
} else {
    // echo "Error selecting database: " . $conn->error;
}

$sql = "CREATE TABLE IF NOT EXISTS ca ( id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, fullName VARCHAR(60), class VARCHAR(60), school text, city text, contact varchar(11), email varchar(40),reg_time TIMESTAMP,roll_num varchar(20) )";

if ($conn->query($sql) === TRUE) {
    // echo "Table of TOSC_16 created successfully";
} else {
    // echo "Error creating table: " . $conn->error;
}
$name = $_POST["name"];

$cname= mysqli_real_escape_string($conn, $_POST["CName"]);
$ccity = mysqli_real_escape_string($conn, $_POST["CCity"]);
$caddress  = mysqli_real_escape_string($conn, $_POST["CAddress"]);
$cocation  = mysqli_real_escape_string($conn, $_POST["CLocation"]);
$pincode  = mysqli_real_escape_string($conn, $_POST["Pincode"]);
$cuaddress  = mysqli_real_escape_string($conn, $_POST["CuAddress"]);
$cupincode  = mysqli_real_escape_string($conn, $_POST["CuPincode"]);
$mobile  = mysqli_real_escape_string($conn, $_POST["mobile"]);
$whatsapp  = mysqli_real_escape_string($conn, $_POST["whatsapp"]);
$motive  = mysqli_real_escape_string($conn, $_POST["motive"]);
$email  = mysqli_real_escape_string($conn, $_POST["email"]);
$director  = mysqli_real_escape_string($conn, $_POST["director"]);
$president  = mysqli_real_escape_string($conn, $_POST["president"]);
$relevent  = mysqli_real_escape_string($conn, $_POST["relevent"]);
$appro  = mysqli_real_escape_string($conn, $_POST["appro"]);
$skills  = mysqli_real_escape_string($conn, $_POST["skills"]);
$resi  = mysqli_real_escape_string($conn, $_POST["ans"]);
$terms  = mysqli_real_escape_string($conn, $_POST["terms"]);
 
$sql="SELECT * FROM `ca` WHERE  name='$name' AND cname='$cname' AND mobile='$mobile'";
$result=$conn->query($sql);
if(!filter_var($email, FILTER_VALIDATE_EMAIL))
{$response="Invalid Email";}
elseif(!preg_match("/^[789][0-9]{9}$/", $mobile))
{$response="Invalid Phone";}
elseif($skills=="")
 {
$response="Add Skills";
}
elseif($resi=="")
{
$response="Add either yes or no";
}
elseif($terms=="")
{
$response="agree the terms";
}












else
{
     $sql = "INSERT INTO ca (id, name, cname, ccity,caddress, clocation,pincode,cuaddress,cupincode,mobile,whatsapp,president,email,director,motive,relevent,appro,skills,result)
	     VALUES (NULL, '$name', '$cname', '$ccity','$caddress', '$clocation','$pincode','$cuaddress','$cupincode','$mobile','$whatsapp','$president','$email','$directtor','$motive','$relevent','$appro','$skills','$resi')";
     $result=$conn->query($sql);
    $response="true";
      }
 



$conn->close();}
 echo json_encode($response);

?>

