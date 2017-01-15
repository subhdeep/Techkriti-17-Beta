
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
$roll_arr=$result['answerList'];
$result2 = json_decode($roll_arr,true);
var_dump($result2);
$roll_arr1=$roll_arr[0]["answer"];





$sql="SELECT * FROM `regist` WHERE  roll_num='$roll_arr1'";
$result=$conn->query($sql);
if (mysqli_num_rows($result) > 0)
   {
     $result = mysqli_fetch_array($result);
     $pay = $result["pay"];
     $pay=1;
     $sql="UPDATE `regist` SET pay = $pay WHERE  fullName='$name' AND roll_num='$roll_arr1'";
    
     $result=$conn->query($sql);
}
              setcookie("pay", 1, time()+36000, "/"); 
$conn->close();

?>


