<?php
session_start();
 header('Access-Control-Allow-Origin: *'); 
header('Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept');
 header('Access-Control-Allow-Methods: POST, GET, OPTIONS, PUT');

ini_set('display_errors', 1); 
error_reporting(E_ALL);
$servername = "localhost";
$username = "root";
$password = "sAhArAnTech1Kriti16";

$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "USE events";
if ($conn->query($sql) === TRUE) {
    //echo ("Database selected successfully");
} else {
   // echo ("Error selecting database: " );
}
$roll="";

$access= mysqli_real_escape_string($conn, $_GET	["access_token"]);






     $sql="UPDATE `users17` SET forgot = 1 WHERE  confirm_token='$access'";

     $result=$conn->query($sql);
$_SESSION["token"] = $access;
header('Location: random.html');

$conn->close();

?>


