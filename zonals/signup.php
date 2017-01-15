<?php
session_start(); 
// define variables and set to empty values
header('Access-Control-Allow-Origin: *');  
$flag =0;
  if (empty($_POST["name"])) {
    $response="Name is required";
    $flag = 1;
  } 
  if (empty($_POST["username"])&&($flag==0)) {
    $response= "College city is required";
    $flag = 1;
  } 
if (empty($_POST["pass"])&&($flag==0)) {
    $response= "College Name is required";
    $flag = 1;
  } 
  if (empty($_POST["facebook"])&&($flag==0)) {
    $response= "College Strength is required";
    $flag = 1;
  } 
  if (empty($_POST["phone"])&&($flag==0)) {
    $response= "College Address is required";
    $flag = 1;
  } 
  if (empty($_POST["email"])&&($flag==0)) {
    $response= "Pincode is required";
    $flag = 1;
  } 
    if (empty($_POST["college"])&&($flag==0)) {
    $response= "Current Address is required";
    $flag = 1;
  } 
     if (empty($_POST["gender"])&&($flag==0)) {
    $response= "Pincode is required";
    $flag = 1;
  } 
  if ($flag!=1){

  

$servername = "localhost";
$username = "root";
$password = "sAhArAnTech1Kriti16";


$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "USE events";
if ($conn->query($sql) === TRUE) {

} else {

}

$name = $_POST["name"];

$username= mysqli_real_escape_string($conn, $_POST["username"]);
$email = mysqli_real_escape_string($conn, $_POST["email"]);
$gender  = mysqli_real_escape_string($conn, $_POST["gender"]);
$phone  = mysqli_real_escape_string($conn, $_POST["phone"]);
$pass  = mysqli_real_escape_string($conn, $_POST["pass"]);
$college  = mysqli_real_escape_string($conn, $_POST["college"]);
 $fb  = mysqli_real_escape_string($conn, $_POST["facebook"]);
$sql="SELECT * FROM `users17` WHERE  username='$username'";
$result=$conn->query($sql);
$sql="SELECT * FROM `users17` WHERE  email='$email'";
$result1=$conn->query($sql);
$token = bin2hex(openssl_random_pseudo_bytes(16));
if (mysqli_num_rows($result) > 0)
{
$response="Username already registered";
}
elseif (mysqli_num_rows($result1) > 0)
{
$response="Email already registered";
}
elseif(!filter_var($email, FILTER_VALIDATE_EMAIL))
{$response="Invalid Email";}
elseif(!preg_match("/^[789][0-9]{9}$/", $phone))
{$response="Invalid Phone";}













else
{
     $sql = "INSERT INTO users17 (id, name, username, college,phone, email,gender,facebook,password,confirm_token)
	     VALUES (NULL, '$name', '$username', '$college','$phone', '$email','$gender','$fb','$pass','$token')";
     $result=$conn->query($sql);
    $response="true";


$GLOBALS['from']='Techkriti,IIT Kanpur'.'<'.'techkriti.org'.'>';
	$GLOBALS['subject']="Techkriti,IIT Kanpur";
$from='Techkriti,IIT Kanpur'.'<'.'techkriti.org'.'>';
		$GLOBALS['body']="https://2017.techkriti.org/portal/confirm.php?access_token=".$token;
	
	$GLOBALS['header']="MIME-Version: 1.0" . "\r\n";
	$GLOBALS['header'].="Content-type: text/html; charset=utf-8" . "\r\n";
	$GLOBALS['header'].='From: '.$from."\r\n";
	$GLOBALS['header'].='Reply-To: '.$from."\r\n";
		$GLOBALS['header'].='Return-Path: '.$from."\r\n";
	$GLOBALS['header'].='X-Mailer: PHP/'.phpversion();
	




		mail($email,$GLOBALS['subject'],$GLOBALS['body'],$GLOBALS['header']);







      }
 



$conn->close();}
 echo json_encode($response);

?>

