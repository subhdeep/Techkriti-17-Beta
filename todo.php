<?php
header('Access-Control-Allow-Origin: *'); 
$servername = "localhost";
$username = "root";
$password = "sAhArAnTech1Kriti16";
$conn = new mysqli($servername, $username, $password);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
mysqli_set_charset($conn, 'utf8');
$sql = "USE events";
if ($conn->query($sql) === TRUE) {
} else {
}

$final="";

$sql="SELECT * FROM `users`";
$result=$conn->query($sql);
while ($row = mysqli_fetch_array($result)) {
 $id = $row["id"];
echo($id);
$final="";
$sql="SELECT * FROM `group_users` WHERE user='$id'";
$result1=$conn->query($sql);

while ($row1 = mysqli_fetch_array($result1)) {
 $group_id = $row1["group_id"];
$sql="SELECT * FROM `groups` WHERE id='$group_id'";
$result2=$conn->query($sql);
while ($row2 = mysqli_fetch_array($result2)) {
$event=$row2['event'];
$final=$final.",".$event;

}
}

$sql="UPDATE `users` SET event='$final' WHERE id='$id'";
$result3=$conn->query($sql); 

}










?>

