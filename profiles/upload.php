<?php
if(isset($_COOKIE["rollno"])) {
    $file_name=$_COOKIE["rollno"];
    $rollno=$_COOKIE["rollno"];
} 
if(isset($_COOKIE["name"])) {

    $name=$_COOKIE["name"];
} 


   if(isset($_FILES['upl'])){
      $errors= array();
   //   $file_name = $_FILES['upl']['name'];
      $file_size =$_FILES['upl']['size'];
      $file_tmp =$_FILES['upl']['tmp_name'];
      $file_type=$_FILES['upl']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['upl']['name'])));
      
      $expensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 2097152){
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"uploads/".$file_name.".jpg");
         echo "Success";
      }else{
         print_r($errors);
      }
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



$sql="UPDATE `regist` SET img = 1 WHERE roll_num='$rollno'  AND fullName='$name'";
$result=$conn->query($sql);
               setcookie("img", 1, time()+3600, "/"); 

$conn->close();

?>
