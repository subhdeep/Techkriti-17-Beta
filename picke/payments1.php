
<?php
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
$data= $_POST["data"];
$data1= mysqli_real_escape_string($conn, $_POST["data"]);
$result = json_decode($data,true);
var_dump($result);
$name=$result['userName'];
$email=$result['userEmailId'];



$sql="UPDATE `regist` SET pay = 1 WHERE grouped='$name'";


  $result=$conn->query($sql);

              setcookie("pay", 1, time()+3600, "/"); 

$conn->close();

?>


