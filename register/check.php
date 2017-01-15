<?php
if (empty($_POST["id"])) {
    $response="College is required";
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
$sql = "USE ambass17";
if ($conn->query($sql) === TRUE) {

} else {

}

$id= mysqli_real_escape_string($conn, $_POST["id"]);
$sql="SELECT * FROM ca_ids WHERE id='$id'";
$result=$conn->query($sql);

  if (mysqli_num_rows($result) > 0)
   {
$response="true";
}
else
{
$response="false";
}



$conn->close();
}







      echo json_encode($response);
?>
