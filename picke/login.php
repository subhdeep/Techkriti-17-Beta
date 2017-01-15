
<?php
// define variables and set to empty values

$flag =0;
  if (empty($_POST["rollno"])) {
    echo "Roll No is required";
    $flag = 1;
  } 
  if (empty($_POST["name"])) {
    echo "Phone No is required";
    $flag = 1;
  } 
//   if (empty($_POST["website"])) {
//     $website = "";
//   } else {
//     $website = test_input($_POST["website"]);
//   }

//   if (empty($_POST["comment"])) {
//     $comment = "";
//   } else {
//     $comment = test_input($_POST["comment"]);
//   }

//   if (empty($_POST["gender"])) {
//     $genderErr = "Gender is required";
//   } else {
//     $gender = test_input($_POST["gender"]);
//   }

  if ($flag!=1){
  }

$servername = "localhost";
$username = "root";
$password = "sAhArAnTech1Kriti16";

// Create connection
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


$rollno= mysqli_real_escape_string($conn, $_POST["rollno"]);
if(substr($rollno,0,2)=='KA')
{
if(strlen($rollno)==10)
{

$name = mysqli_real_escape_string($conn, $_POST["name"]);
$sql="SELECT * FROM `regist` WHERE roll_num='$rollno'  AND fullName='$name' ";
$result=$conn->query($sql);
if (mysqli_num_rows($result) > 0)
   {}
else
{
$temp=substr($rollno,2,8);
$rollno='KA'.'0'.$temp;}
}
}

$name = mysqli_real_escape_string($conn, $_POST["name"]);
$sql="SELECT * FROM `regist` WHERE roll_num='$rollno'  AND fullName='$name' ";
$result=$conn->query($sql);
  if (mysqli_num_rows($result) > 0)
   {

     $result = mysqli_fetch_array($result);
     $name = $result["fullName"];
     $rollno = $result["roll_num"];
     $class = $result["class"];
     $contact = $result["contact"];
     $email = $result["email"];
     $city = $result["city"];
     $school = $result["school"];
$pay=$result["pay"];
$img=$result["img"];
$mock=$result["mock"];
$score=$result["score"];
$centre=$result["centre"];
$timing=$result["timing"];
    // echo $name;
     //echo $rollno;
     setcookie("name", $name, time()+36000, "/");  
     setcookie("rollno", $rollno, time()+36000, "/"); 
setcookie("phoneno", $contact, time()+36000, "/");  
       setcookie("email", $email, time()+36000, "/");  
 setcookie("city", $city, time()+36000, "/"); 
              setcookie("school", $school, time()+36000, "/"); 
              setcookie("pay", $pay, time()+36000, "/"); 
              setcookie("img", $img, time()+36000, "/"); 
              setcookie("mock", $mock, time()+36000, "/"); 
              setcookie("score", $score, time()+36000, "/"); 
       setcookie("class", $class, time()+36000, "/"); 
       setcookie("centre", $centre, time()+36000, "/"); 
       setcookie("timing", $timing, time()+36000, "/"); 
$response="true";
    
 }
else
 {$response="false";
 }

 echo json_encode($response);

$conn->close();

?>


