<?php	
session_start();

ini_set('display_errors', 1); 
error_reporting(E_ALL);


$email=$_POST["email"];
echo($email);

$access_token=$_SESSION['facebook_access_token'];

$url="www.techkriti.org/register/confirm.php?verify=".$access_token;
	$GLOBALS['from']="tosc";
	$GLOBALS['subject']="TOSC'17";
		$GLOBALS['body']="Dear ".$url;
	
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





