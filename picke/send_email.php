<?php
$name="";
$email="";
$roll="";
if(isset($_COOKIE["name"])) {
$name=$_COOKIE["name"];

}
if(isset($_COOKIE["email"])) {
$email=$_COOKIE["email"];

}
if(isset($_COOKIE["rollno"])) {
$roll=$_COOKIE["rollno"];

}

require_once('PHPMailer_5.2.4/class.phpmailer.php');
  $mail = new PHPMailer();
  $mail->IsSMTP(); 
  $mail->SMTPDebug  = 2;                     
  $mail->SMTPAuth   = true;                  
  $mail->SMTPSecure = "ssl";                 
  $mail->Host       = "smtp.gmail.com";      
  $mail->Port       = 465;             
  $mail->AddAddress($email);
  $mail->Username="tosc@techkriti.org";  
  $mail->Password="TOSChogaya";            
  $mail->Subject    = "TOSC'16";
   $mail->SetFrom('tosc@techkriti.org','TOSC16');
  $mail->AddReplyTo("tosc@techkriti.org","TOSC'16");
  $mail->MsgHTML("Dear ".$name.",<br>
Thank you for registering for TOSC. The first round of TOSC will be held on 16th October, 2016. Here are the relevant details for the examination.<br>
Roll No:".$roll.
"<br>We wish you best of luck and hope you enjoy your experience.<br>
Regards,<br>
Team TOSC,<br>
Techkriti17,<br>
IIT Kanpur.<br><br>
Contact:<br>
Pujari Sudheer      +91 - 7753058433<br>
Akshay Vaidya       +91 - 7275799065<br>
Aditya Srivastava   +91 - 9450691510<br>
Utkarsh Shukla      +91 - 7839099087<br>");
  if($mail->Send())
{ echo("send mail");
}
else
{
echo($mail->ErrorInfo);
}
?>
