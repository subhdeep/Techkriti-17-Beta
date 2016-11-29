<?php
session_start();

ini_set('display_errors', 1); 
error_reporting(E_ALL);

$flag=0;



$access_token=$_SESSION['facebook_access_token'];

if(isset($_SESSION['facebook_access_token']))
{


 if (empty($_POST["college"])) {
    $response="College is required";
    $flag = 1;
  } 
if (empty($_POST["name"])&&($flag==0)) {
    $response= "Name is required";
    $flag = 1;
  } 

if (empty($_POST["email"])&&($flag==0)) {
    $response= "Email is required";
    $flag = 1;
  } 

 if (empty($_POST["contact"])&&($flag==0)) {
    $response= "Contact is required";
    $flag = 1;
  } 

 if (empty($_POST["city"])&&($flag==0)) {
    $response= "City is required";
    $flag = 1;
  } 
if($flag!=1)
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

$college= mysqli_real_escape_string($conn, $_POST["college"]);
$contact= mysqli_real_escape_string($conn, $_POST["contact"]);
$name= mysqli_real_escape_string($conn, $_POST["name"]);
$email= mysqli_real_escape_string($conn, $_POST["email"]);
$city= mysqli_real_escape_string($conn, $_POST["city"]);
if(!preg_match("/^[789][0-9]{9}$/", $contact))
{$response="Invalid Phone";}
else if(!filter_var($email, FILTER_VALIDATE_EMAIL))
{$response="Invalid Email";}
else
{
$sql="UPDATE `users` SET name='$name' WHERE access_token='$access_token'";
$result=$conn->query($sql);
$sql="UPDATE `users` SET email='$email' WHERE access_token='$access_token'";
$result=$conn->query($sql);
$sql="UPDATE `users` SET college='$college' WHERE access_token='$access_token'";
$result=$conn->query($sql);
$sql="UPDATE `users` SET contact='$contact' WHERE access_token='$access_token'";
$result=$conn->query($sql);
$sql="UPDATE `users` SET city='$city' WHERE access_token='$access_token'";
$result=$conn->query($sql);
$sql="UPDATE `users` SET completed=1 WHERE access_token='$access_token'";
$result=$conn->query($sql);
$sql = "SELECT * FROM `users` WHERE access_token='$access_token'";
$result=$conn->query($sql);

  if (mysqli_num_rows($result) > 0)
   {
     $result = mysqli_fetch_array($result);
     $index = $result["index"];
$index=(string)$index;
$techid='TECH'.$index;

$sql="UPDATE `users` SET techid='$techid' WHERE access_token='$access_token'";
$result=$conn->query($sql);
}
$response="true";
}

$conn->close();
}



}




else
{
$response="false";


}

      echo json_encode($response);
?>
