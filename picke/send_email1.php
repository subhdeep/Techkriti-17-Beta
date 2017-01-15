<?php


require_once('PHPMailer_5.2.4/class.phpmailer.php');
  $mail = new PHPMailer();
  $mail->IsSMTP(); 
  $mail->SMTPDebug  = 2;                     
  $mail->SMTPAuth   = true;                  
  $mail->SMTPSecure = "ssl";                 
  $mail->Host       = "smtp.gmail.com";      
  $mail->Port       = 465;      
       


$servername = "localhost";
$username = "root";
$password = "sAhArAnTech1Kriti16";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  //  die("Connection failed: " . $conn->connect_error);
} 
$sql = "USE events";
if ($conn->query($sql) === TRUE) {
  //echo ("Database selected successfully");
} else {
  // echo ("Error selecting database: " );
}

$k=1;
        $mail->AddAddress("ankitsgh07@gmail.com");
$sql="SELECT email FROM `users`";
$result=$conn->query($sql);
if (!empty($result)) {
//echo("abc");
  if (mysqli_num_rows($result) > 0)
{
         $response["products"] = array();
 
    while ($row = mysqli_fetch_array($result) and $k<=99) {
     
        $product = array();

    $product["email"] = $row["email"];
//echo($product["email"]);
        $mail->AddAddress($product["email"]);
        $k=$k+1;
    }


$result=$conn->query($sql);
 }}
else
 {
 }



$conn->close();





























  $mail->Username="rakeshashok1995@gmail.com";  
  $mail->Password="8952925004";            
  $mail->Subject    = "Nomination for Campus Ambassador Techkriti'17 IIT Kanpur";
   $mail->SetFrom('rakeshashok1995@gmail.com','Techkriti17');
  $mail->AddReplyTo("rakeshashok1995@gmail.com","Techkriti17");
  $mail->MsgHTML("Hello,<br><br>

Techkriti  is the annual technical and entrepreneurial festival of IIT Kanpur, one of the largest of its kind. Techkriti has grown into one of the biggest and the most zestful student festivals in Asia. Witnessing nearly 20,000 participants from almost all the prestigious colleges within country like IITs, IIMs, NITs etc.<br><br>

As you know every year Techkriti provides a golden opportunity to be it's part and work as campus ambassador to represent Techkriti in their college as well as in their city. Nominations are open for campus ambassador post.<br><br>


Eligibility:-   There are no specific constraints on year in which you study, we need only enthusiasm and sincerity towards the post. At the same time if you are a resourceful person it will surely add up to your chances but is not the criteria for short listing.<br><br>

To apply, for Campus Ambassador visit : -<br><br>

www.techkriti.org/ambassador/<br><br>


For more updates follow us on<br>
Facebook page :-  www.facebook.com/techkriti.iitk?fref=ts<br>
Website :- www.techkriti.org<br><br>


Regards,<br>
Team Techkriti'17<br><br>


Contacts:-<br>
Naveen-7755047937<br>
Owais-775557758<br>
PhaniKumar-7755047789<br>
");
  if($mail->Send())
{ echo("send mail");
}
else
{
echo($mail->ErrorInfo);
}
?>
