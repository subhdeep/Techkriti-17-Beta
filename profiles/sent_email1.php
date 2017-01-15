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



		$GLOBALS['from']="tosc";
	$GLOBALS['subject']="TOSC'17";
		$GLOBALS['body']="Dear ".$name.",<br>
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
Utkarsh Shukla      +91 - 7839099087<br>";
	
	$GLOBALS['header']="MIME-Version: 1.0" . "\r\n";
	$GLOBALS['header'].="Content-type: text/html; charset=utf-8" . "\r\n";
	$GLOBALS['header'].='From: '.$from."\r\n";
	$GLOBALS['header'].='Reply-To: '.$from."\r\n";
		$GLOBALS['header'].='Return-Path: '.$from."\r\n";
	$GLOBALS['header'].='X-Mailer: PHP/'.phpversion();
	







 mymail($email);

function mymail($to){
		mail($to,$GLOBALS['subject'],$GLOBALS['body'],$GLOBALS['header']);
		echo $to.', ';
	}





























?>
