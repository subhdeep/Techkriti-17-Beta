
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
$name="arcius";



$sql="SELECT * FROM `regist` WHERE grouped='$name'";
$result=$conn->query($sql);
if (!empty($result)) {
//echo("abc");
  if (mysqli_num_rows($result) > 0)
{
         $response["products"] = array();
 
    while ($row = mysqli_fetch_array($result)) {
     
        $product = array();

    $product["name"] = $row["fullName"];
$fullname=$product["name"];
        $product["classy"] = $row["class"];
        $product["roll_num"] = $row["roll_num"];
$roll=$product["roll_num"];
               $product["id"] = $row["id"];
$pay=1;
echo($fullname);
     $sql="UPDATE `regist` SET pay = $pay WHERE  fullName='$fullname' AND roll_num='$roll'";
     $result=$conn->query($sql);


                            
                              $product["school"] = $row["school"];
                              $product["email"] = $row["email"];
                              $product["group"] = $row["grouped"];
        
    }
}}




$conn->close();

?>


