<?php
session_start();
// define variables and set to empty values

$flag =0;
  if (empty($_POST["centre"])) {
    $response="Name is required";
    $flag = 1;
  } 
  if (empty($_POST["workshop"])&&($flag==0)) {
    $response= "College city is required";
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
$sql = "USE zonals17";
if ($conn->query($sql) === TRUE) {

} else {

}
$id=$_SESSION['id'];


$centre= mysqli_real_escape_string($conn, $_POST["centre"]);
$workshop = mysqli_real_escape_string($conn, $_POST["workshop"]);

    $sql = "INSERT INTO `work_reg` (id, tech_id, centre, workshop)
	     VALUES (NULL, '$id', '$centre', '$workshop')";
     $result=$conn->query($sql);


$response='true';










 



$conn->close();}
 echo json_encode($response);

?>

