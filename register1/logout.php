<?php

    session_start();

ini_set('display_errors', 1); 
error_reporting(E_ALL);
define('FACEBOOK_SDK_V4_SRC_DIR', __DIR__ . '/facebook-sdk-v5/');

require_once __DIR__ . '/facebook-sdk-v5/autoload.php';

$fb = new Facebook\Facebook(['app_id' => '288372228215772',
  'app_secret' => '5d15212758aa311fd1317001837d455a',
  'default_graph_version' => 'v2.7',]);
$token=$_SESSION['facebook_access_token'];
$url = 'https://www.facebook.com/logout.php?next=' . 'https://www.techkriti.org/zonals' .
  '&access_token='.$token;
session_destroy();
	session_start();
	unset($_SESSION['facebook_access_token']);
	session_destroy();
	header("Location:".$url);
?>
