<?php
$servername = "localhost";
$username = "root";
$password = "sAhArAnTech1Kriti16";
$conn = new mysqli($servername, $username, $password);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "USE events";
if ($conn->query($sql) === TRUE) {
} else {
}

$competition= mysqli_real_escape_string($conn, $_POST["competition"]);
$sql="SELECT * FROM `events` WHERE title='$competition'";
$result=$conn->query($sql);
$response["products"] = array();
while ($row = mysqli_fetch_array($result)) {
 $product = array();
 $product["images"] = $row["images"];
 $product["ep"] = $row["ep"];
 $product["max_t_size"] = $row["max_t_size"];
 $product["prize"] = $row["prize"];
 $product["pdf"] = $row["pdf"];
 $product["sponsors"] = $row["sponsors"];
 $product["start"] = $row["start"];
 array_push($response["products"], $product);
        
}
echo json_encode($response["products"]);
?>
