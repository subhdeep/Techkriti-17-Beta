<?php

    session_start();

ini_set('display_errors', 1); 
error_reporting(E_ALL);
define('FACEBOOK_SDK_V4_SRC_DIR', __DIR__ . '/facebook-sdk-v5/');

require_once __DIR__ . '/facebook-sdk-v5/autoload.php';


$fb = new Facebook\Facebook([
'app_id' => '288372228215772',
  'app_secret' => '5d15212758aa311fd1317001837d455a',
  'default_graph_version' => 'v2.7',
]);

$helper = $fb->getRedirectLoginHelper();
$permissions = ['email']; // optional
$loginUrl = $helper->getLoginUrl('https://www.techkriti.org/register1/login-callback1.php', $permissions);

header('Location: '.$loginUrl);
?>
