<html>
<head>
	<title>Apply for Ambassadors | Techkriti'16</title>
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" type="text/css" href="../css/main.css">
	<link rel="icon" type="image/png" href="images/kachkach1blue.png">
                <meta http-equiv="refresh" content="1; url=http://2016.techkriti.org/picke/full_table.html" />
</head>
<body style="color:rgb(28, 122, 155);background-color:#fff">
	<div class="ambnav" style="color: rgb(101,101,101);font-size: 18px;padding: 10px;text-align:center">
		<div><a href="../../"><img style="height:30px;" src="../images/kachkach1blue.png"></a></div>
		<a href="../">Registering...</a>
		<br><br><br>
<?php
// define variables and set to empty values

$flag =0;
  if (empty($_POST["fname"])) {
    echo "Name is required";
    $flag = 1;
  } 
  if (empty($_POST["school"])) {
    echo "College name is required";
    $flag = 1;
  } 
if (empty($_POST["city"])) {
    echo "College Location is required";
    $flag = 1;
  } 
  if (empty($_POST["class"])) {
    echo "Address is required";
    $flag = 1;
  } 
  if (empty($_POST["contact"])) {
    echo "Contact Number is required";
    $flag = 1;
  } 
  if (empty($_POST["email"])) {
    echo "Email is required";
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
  	echo ("Thanks for your response. You will be contacted soon with the results.<br><br>");
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
$sql = "CREATE TABLE IF NOT EXISTS tempi ( id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, fullName VARCHAR(60), class VARCHAR(60), school text, city text, contact varchar(11), email varchar(40),reg_time TIMESTAMP,roll_num varchar(20) )";

if ($conn->query($sql) === TRUE) {
    // echo "Table of TOSC_16 created successfully";
} else {
    // echo "Error creating table: " . $conn->error;
}
$name = $_POST["fname"];

$class= mysqli_real_escape_string($conn, $_POST["class"]);
$school = mysqli_real_escape_string($conn, $_POST["school"]);
$city  = mysqli_real_escape_string($conn, $_POST["city"]);
if($class='9')
{
 $spe='A1';}
elseif($class='10')
 {$spe='A2';}
elseif($class='11')
 {$spe='B1';}
elseif($class='12')
{ $spe='B2';}
else
 {$spe='';}


$contact = mysqli_real_escape_string($conn, $_POST["contact"]);
$email = mysqli_real_escape_string($conn, $_POST["email"]);
$sql = "SELECT * FROM $city WHERE name='$school'";
$result=$conn->query($sql);
  if (mysqli_num_rows($result) > 0)
   {

     $result = mysqli_fetch_array($result);
     $sch_id = $result["id"];
     $reg_num = $result["total_reg"];
     $reg_num=$reg_num+1;
     $sql="UPDATE $city SET total_reg = $reg_num WHERE name = '$school'";
     $result=$conn->query($sql);
     $sch_id=(string)$sch_id;
     $reg_num=(string)$reg_num;
     if (strlen($sch_id)<2)
     {$sch_id="0".$sch_id;
       }
     if (strlen($reg_num)===1)
       { $reg_num="00".$reg_num;
          }
      if (strlen($reg_num)===2)
       { $reg_num="0".$reg_num;
          }
     $roll=substr($city,0,2).$sch_id.$spe.$reg_num;
     //echo $roll;
     $sql = "INSERT INTO regist (id, fullName, class, school,contact, email,roll_num, city)
	     VALUES (NULL, '$name','$class','$school','$contact','$email','$roll','$city')";
     $result=$conn->query($sql);
     $sql = "INSERT INTO tempi (id, fullName, class, school,contact, email,roll_num, city)
	     VALUES (NULL, '$name','$class','$school','$contact','$email','$roll','$city')";
     $result=$conn->query($sql);
       setcookie("phoneno", $contact, time()+36000, "/");  
       setcookie("rollno", $roll, time()+36000, "/"); 
              setcookie("name", $name, time()+36000, "/"); 
  setcookie("school", $school, time()+36000, "/");  
       setcookie("city", $city, time()+36000, "/"); 
              setcookie("class", $class, time()+36000, "/"); 
               setcookie("next", "on", time()+36000, "/"); 
    setcookie("mock", 0, time()+36000, "/");   
             setcookie("score", 0, time()+36000, "/"); 
      }
 
else
 { 
 $sql = "INSERT INTO $city (id, name, total_reg)
	     VALUES (NULL, '$school',0)";
     $result=$conn->query($sql);
$sql = "SELECT * FROM $city WHERE name='$school'";
$result=$conn->query($sql);

  if (mysqli_num_rows($result) > 0)
   {

     $result = mysqli_fetch_array($result);
     $sch_id = $result["id"];
     $reg_num = $result["total_reg"];
     $reg_num=$reg_num+1;
     $sql="UPDATE $city SET total_reg = $reg_num WHERE name = '$school'";
     $result=$conn->query($sql);
     $sch_id=(string)$sch_id;
     $reg_num=(string)$reg_num;
     if (strlen($sch_id)<2)
     {$sch_id="0".$sch_id;
       }
     if (strlen($reg_num)===1)
       { $reg_num="00".$reg_num;
          }
      if (strlen($reg_num)===2)
       { $reg_num="0".$reg_num;
          }
     $roll=substr($city,0,2).$sch_id.$spe.$reg_num;
    // echo $roll;
     $sql = "INSERT INTO regist (id, fullName, class, school,contact, email,roll_num, city)
	     VALUES (NULL, '$name','$class','$school','$contact','$email','$roll','$city')";
     $result=$conn->query($sql);
       setcookie("phoneno", $contact, time()+36000, "/");  
       setcookie("rollno", $roll, time()+36000, "/"); 
              setcookie("name", $name, time()+36000, "/"); 
              setcookie("class", $class, time()+36000, "/"); 
  setcookie("school", $school, time()+36000, "/");  
       setcookie("city", $city, time()+36000, "/");   
             setcookie("next", "on", time()+36000, "/"); 
     setcookie("mock", 0, time()+36000, "/");   
             setcookie("score", 0, time()+36000, "/"); 

    
      }
 


 }



$conn->close();

?>
<style type="text/css">
	*,*:after,*:before{
		box-sizing:border-box;
		/*font-family:roboto,sans-serif;*/
		/*color: #777;*/
	}
	body{
		/*background-image: url(../images/white-bg.jpg);*/
		background-size: 100% auto;
	}
	form{
		padding: 30px 50px;
		border:solid 1px rgb(216,216,216);
		box-shadow: 0 5px 10px rgba(0,0,0,0.2);
		border-radius: 3px;
		margin: 0 10px 20px 10px;
		background: #fff;
	}
	small{
		color: #777;
		font-size: 12px;
	}
	a{
		text-decoration:none;
	}
	.tile-y{
		position: relative;
		text-align: center;
	}
	.tile-w{
		display: inline-block;
		max-width:700px;
		min-width:600px;
		text-align: left;
	}
	label{
		display: block;
		margin-bottom: 10px;
		/*font-weight: bold;*/
		margin-top: 5px;
	}
	label.radio{
		color: #777;
		font-size: 14px;
		margin:0;
	}
	label textarea{
		min-width: 80%;
		resize: vertical;
	}
	input,textarea{
		padding:5px 10px;
		/*border-radius: 3px;*/
		border:solid 1px rgb(187, 187, 187);
	}
	textarea{
		min-height: 100px;
	}
	[type=submit]{
		background: rgb(75, 141, 249);
		color: #fff;
		border:solid 1px;
		padding: 8px 15px;
		border-radius: 3px;
		font-weight: bold;
	}
	[type=reset]{
		padding: 8px 15px;
		border:solid 1px #aaa;
		border-radius: 3px;
		font-weight: bold;
	}
	legend span{
		font-weight: normal;
		color: rgb(196,59,29);
	}
	</style>

</body>
</html>
