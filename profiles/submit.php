
<?php
// define variables and set to empty values

$flag =0;
  if (empty($_POST["fname"])) {
    $response= "Name is required";
    $flag = 1;
  } 
  if (empty($_POST["school"])&&($flag==0)) {
    $response= "School is required";
    $flag = 1;
  } 
if (empty($_POST["city"])&&($flag==0)) {
    $response= "City is required";
    $flag = 1;
  } 
  if (empty($_POST["class"])&&($flag==0)) {
    $response= "Class is required";
    $flag = 1;
  } 
  if (empty($_POST["contact"])&&($flag==0)) {
    $response= "Contact Number is required";
    $flag = 1;
  } 
  if (empty($_POST["email"])&&($flag==0)) {
    $response= "Email is required";
    $flag = 1;
  } 

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $emailErr = "Invalid email format"; 
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
  

$servername = "localhost";
$username = "root";
$password = "sAhArAnTech1Kriti16";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "CREATE DATABASE IF NOT EXISTS TOSC_16";
if ($conn->query($sql) === TRUE) {
    // echo "Database created successfully";
} else {
    // echo "Error creating database: " . $conn->error;
}
$sql = "USE TOSC_16";
if ($conn->query($sql) === TRUE) {
    // echo "Database selected successfully";
} else {
    // echo "Error selecting database: " . $conn->error;
}
$sql = "CREATE TABLE IF NOT EXISTS regist ( id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, fullName VARCHAR(60) NOT NULL, class VARCHAR(60) NOT NULL, school text NOT NULL, city text NOT NULL, contact varchar(11) NOT NULL, email varchar(40) NOT NULL,reg_time TIMESTAMP,roll_num varchar(20) NOT_NULL )";
if ($conn->query($sql) === TRUE) {
    // echo "Table of TOSC_16 created successfully";
} else {
    // echo "Error creating table: " . $conn->error;
}

$name = $_POST["fname"];

$class= mysqli_real_escape_string($conn, $_POST["class"]);
$school = mysqli_real_escape_string($conn, $_POST["school"]);
$city  = mysqli_real_escape_string($conn, $_POST["city"]);
if($class=='9')
{
 $spe='A1';
$field='total_reg';}
elseif($class=='10')
 {$spe='A2';
$field='total_reg1';}
elseif($class=='11')
 {$spe='B1';
  $field='total_reg2';}
elseif($class=='12')
{ $spe='B2';
 $field='total_reg3';}
else
 {$spe='';
 $field='total_reg';}
$rolly  = mysqli_real_escape_string($conn, $_POST["rollno"]);

$contact = mysqli_real_escape_string($conn, $_POST["contact"]);
$email = mysqli_real_escape_string($conn, $_POST["email"]);
$sql="SELECT * FROM `regist` WHERE  fullName='$name' AND city='$city' AND contact='$contact' AND class='$class' AND school='$school'";
$result=$conn->query($sql);
if(!filter_var($email, FILTER_VALIDATE_EMAIL))
{$response="Invalid Email";}
elseif(!preg_match("/^[789][0-9]{9}$/", $contact))
{$response="Invalid Phone";}
elseif (mysqli_num_rows($result) > 0) {
$response="true";
  }

else
 {


      $sql="UPDATE regist SET fullName = '$name' WHERE roll_num = '$rolly'";
     $result=$conn->query($sql);
$sql="UPDATE regist SET class = '$class' WHERE roll_num = '$rolly'";
     $result=$conn->query($sql);
$sql="UPDATE regist SET email = '$email' WHERE roll_num = '$rolly'";
     $result=$conn->query($sql);
$sql="UPDATE regist SET contact = '$contact' WHERE roll_num = '$rolly'";
     $result=$conn->query($sql);
$sql="UPDATE regist SET city = '$city' WHERE roll_num = '$rolly'";
     $result=$conn->query($sql);
$sql="UPDATE regist SET school = '$school' WHERE roll_num = '$rolly'";
     $result=$conn->query($sql);
$sql="UPDATE `regist` SET `change` = 1 WHERE roll_num = '$rolly'";
     $result=$conn->query($sql);

$sql = "SELECT * FROM $city WHERE name='$school'";
$result=$conn->query($sql);
  if (mysqli_num_rows($result) > 0)
   {
     $result = mysqli_fetch_array($result);
     $sch_id = $result["id"];
     $reg_num = $result[$field];
     $reg_num=$reg_num+1;
     $sql="UPDATE $city SET $field = $reg_num WHERE name= '$school'";
     $result=$conn->query($sql);
     $sch_id=(string)$sch_id;
     $reg_num=(string)$reg_num;
     if (strlen($sch_id)==2)
     {$sch_id="0".$sch_id;
       }
     if (strlen($sch_id)===1)
     {$sch_id="00".$sch_id;
       }
     if (strlen($reg_num)===1)
       { $reg_num="00".$reg_num;
          }
      if (strlen($reg_num)===2)
       { $reg_num="0".$reg_num;
          }
if($city=='KOLKATA')
{
 $roll='CA'.$sch_id.$spe.$reg_num;
}
else
{
     $roll=substr($city,0,2).$sch_id.$spe.$reg_num;}

$sql="UPDATE regist SET roll_num = '$roll' WHERE roll_num = '$rolly'";
     $result=$conn->query($sql);
       setcookie("phoneno", $contact, time()+36000, "/");  
       setcookie("rollno", $roll, time()+36000, "/"); 
              setcookie("name", $name, time()+36000, "/"); 
       setcookie("email", $email, time()+36000, "/"); 
              setcookie("city", $city, time()+36000, "/"); 
              setcookie("school", $school, time()+36000, "/"); 
 setcookie("pay", 0, time()+36000, "/"); 
 setcookie("img", 0, time()+36000, "/"); 
 setcookie("mock", 0, time()+36000, "/"); 
 setcookie("score", 0, time()+36000, "/"); 
       setcookie("class", $class, time()+36000, "/"); 
$response="true";
    

      }
 
else
 {
 $sql = "INSERT INTO $city (id, name, total_reg,total_reg1,total_reg2,total_reg3)
	     VALUES (NULL, '$school',0,0,0,0)";
     $result=$conn->query($sql);
 $sql="UPDATE regist SET fullName = '$name' WHERE roll_num = '$rolly'";
     $result=$conn->query($sql);
$sql="UPDATE regist SET class = '$class' WHERE roll_num = '$rolly'";
     $result=$conn->query($sql);
$sql="UPDATE regist SET email = '$email' WHERE roll_num = '$rolly'";
     $result=$conn->query($sql);
$sql="UPDATE regist SET contact = '$contact' WHERE roll_num = '$rolly'";
     $result=$conn->query($sql);
$sql="UPDATE regist SET city = '$city' WHERE roll_num = '$rolly'";
     $result=$conn->query($sql);
$sql="UPDATE regist SET school = '$school' WHERE roll_num = '$school'";
     $result=$conn->query($sql);


$sql = "SELECT * FROM $city WHERE name='$school'";
$result=$conn->query($sql);
  if (mysqli_num_rows($result) > 0)
   {
     $result = mysqli_fetch_array($result);
     $sch_id = $result["id"];
     $reg_num = $result[$field];
     $reg_num=$reg_num+1;
     $sql="UPDATE $city SET $field = $reg_num WHERE name = '$school'";
     $result=$conn->query($sql);
     $sch_id=(string)$sch_id;
     $reg_num=(string)$reg_num;
     if (strlen($sch_id)==2)
     {$sch_id="0".$sch_id;
       }
     if (strlen($sch_id)===1)
     {$sch_id="00".$sch_id;
       }
     if (strlen($reg_num)===1)
       { $reg_num="00".$reg_num;
          }
      if (strlen($reg_num)===2)
       { $reg_num="0".$reg_num;
          }
if($city=='KOLKATA')
{
 $roll='CA'.$sch_id.$spe.$reg_num;
}
else
{
     $roll=substr($city,0,2).$sch_id.$spe.$reg_num;}

$sql="UPDATE regist SET roll_num = '$roll' WHERE roll_num = '$rolly'";
     $result=$conn->query($sql);
       setcookie("phoneno", $contact, time()+36000, "/");  
       setcookie("rollno", $roll, time()+36000, "/"); 
              setcookie("name", $name, time()+36000, "/"); 
       setcookie("email", $email, time()+36000, "/"); 
              setcookie("city", $city, time()+36000, "/"); 
              setcookie("school", $school, time()+36000, "/"); 
 setcookie("pay", 0, time()+36000, "/"); 
 setcookie("img", 0, time()+36000, "/"); 
 setcookie("mock", 0, time()+36000, "/"); 
 setcookie("score", 0, time()+36000, "/"); 
       setcookie("class", $class, time()+36000, "/"); 
$response="true";
    

    
      }
 


 }
}



$conn->close();}
 echo json_encode($response);

?>

