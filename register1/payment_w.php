<?php
error_reporting(E_ALL);
ini_set('display_errors', true);
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
$data= '{
  "userEmailId":"ankitsgh07@outlook.com",
  "userName":"Ankit Singh2",
  "ticketName":"Ticket Name",
  "eventName":"Townscript: Best Event Ticketing Platform",
  "eventCode":"townscript-best",
  "ticketPrice":600,
  "discountAmount":100,
  "customQuestion1":"customValue1",       // deprecated, use answerList key
  "customQuestion20":"customValue20",     // deprecated, use answerList key
  "answerList":[
    {
      "uniqueQuestionId": 111,
      "question": "Country",
      "answer": "TECH56"
    },
    {
      "uniqueQuestionId": 222,
      "question": "Have you been at Taj Mahal?",
      "answer": "ethical"
    }
{
      "uniqueQuestionId": 222,
      "question": "Have you been at Taj Mahal?",
      "answer": "ALLAHABAD"
    }
  ],
  "uniqueOrderId":"9347234294742974",
  "registrationTimestamp":"2014-08-22 06:41:27"
}';
//$data= $_POST["data"];
$data1= mysqli_real_escape_string($conn, $data);
$result = json_decode($data,true);
var_dump($result);
$name=$result['userName'];
$email=$result['userEmailId'];
$roll_arr=$result['answerList'];
$result2 = json_decode($roll_arr,true);
var_dump($result2);
$techid=$roll_arr[0]["answer"];
$workshop=$roll_arr[1]["answer"];


$centre=$roll_arr[2]["answer"];

echo($centre);

?>


