
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





  $sql = "INSERT INTO payments (id, data)
	     VALUES (NULL, 'fuck')";
     $result=$conn->query($sql);

$conn->close();

?>


