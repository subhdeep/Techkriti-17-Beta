<?php
session_start();

ini_set('display_errors', 1); 
error_reporting(E_ALL);

$flag=0;


$access_token=$_SESSION['facebook_access_token'];

if(isset($_SESSION['facebook_access_token']))
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
$workshop= mysqli_real_escape_string($conn, $_POST["workshop"]);
$centre= mysqli_real_escape_string($conn, $_POST["centre"]);
$sql = "SELECT * FROM `users` WHERE access_token='$access_token'";
$result=$conn->query($sql);

  if (mysqli_num_rows($result) > 0)
   {
     $result = mysqli_fetch_array($result);
     $work = $result["workshop"];
$cent=$result['centre'];
$pay=$result['pay'];
if($work=='')
{$work=$workshop;

}
else
{
$work=$work.",".$workshop;
}
if($cent=='')
{$cent=$centre;

}
else
{
$cent=$cent.",".$centre;
}
if($pay=='')
{$pay='0';

}
else
{
$pay=$pay.",".'0';
}
     $sql="UPDATE `users` SET workshop ='$work' WHERE access_token='$access_token'";
    
     $result=$conn->query($sql);
$sql="UPDATE `users` SET centre ='$cent' WHERE access_token='$access_token'";
    
     $result=$conn->query($sql);
$sql="UPDATE `users` SET pay ='$pay' WHERE access_token='$access_token'";
    
     $result=$conn->query($sql);
echo json_encode("true");
}




else
{       echo json_encode("false");
}


$conn->close();
}






else
{
      echo json_encode("false");


}


?>
