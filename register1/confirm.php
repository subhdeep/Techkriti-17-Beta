<?php header('Access-Control-Allow-Origin: *'); ?>
<?php header('Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept');?>
<?php header('Access-Control-Allow-Methods: POST, GET, OPTIONS, PUT'); ?>
<?php
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
$sql = "USE TOSC_16";
if ($conn->query($sql) === TRUE) {
    //echo ("Database selected successfully");
} else {
   // echo ("Error selecting database: " );
}
$roll="";

$access= mysqli_real_escape_string($conn, $_GET	["verify"]);

$access1= $_GET["verify"];





     $sql="UPDATE `users` SET verify = 1 WHERE  access_token='$access'";
    
     $result=$conn->query($sql);

$conn->close();

?>


