<?php
session_start();





$flag =0;
  if (empty($_POST["idea"])) {
    $response="Write Something!!";
    $flag = 1;
  } 
  
  if ($flag!=1){



if(isset($_SESSION['facebook_access_token']))
{

$access_token=$_SESSION['facebook_access_token'];
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

$idea  = mysqli_real_escape_string($conn, $_POST["idea"]);
$sql="SELECT * FROM `ca_user` WHERE access_token='$access_token'";
$result=$conn->query($sql);

  if (mysqli_num_rows($result) > 0)
{
        
 
    while ($row = mysqli_fetch_array($result)) {
     


    $newidea= $row["idea"];
$idea=$newidea.'NEW------'.$idea;
$sql="UPDATE `ca_user` SET idea='$idea' WHERE access_token='$access_token'";
$result=$conn->query($sql);
     
    }

      echo json_encode('true');

 }
else
 {
      echo json_encode("false1");
 }
$conn->close();

}




else
{

      echo json_encode("false");
}
}

?>
