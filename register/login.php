<?php

    session_start();

ini_set('display_errors', 1); 
error_reporting(E_ALL);
define('FACEBOOK_SDK_V4_SRC_DIR', __DIR__ . '/facebook-sdk-v5/');

require_once __DIR__ . '/facebook-sdk-v5/autoload.php';


$fb = new Facebook\Facebook([
'app_id' => '1023878031002316',
  'app_secret' => 'd35f8bd44aca5efea157bd40896a6d9d',
  'default_graph_version' => 'v2.7',
]);
unset($_SESSION['facebook_access_token']);

$helper = $fb->getRedirectLoginHelper();
$permissions = ['email','publish_actions']; // optional
$loginUrl = $helper->getLoginUrl('https://www.techkriti.org/register/login-callback1.php', $permissions);

header('Location: '.$loginUrl);
?>
