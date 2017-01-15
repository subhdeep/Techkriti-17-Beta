<?php

    session_start();

ini_set('display_errors', 1); 
error_reporting(E_ALL);
define('FACEBOOK_SDK_V4_SRC_DIR', __DIR__ . '/facebook-sdk-v5/');

require_once __DIR__ . '/facebook-sdk-v5/autoload.php';

$fb = new Facebook\Facebook(['app_id' => '288372228215772',
  'app_secret' => '5d15212758aa311fd1317001837d455a',
  'default_graph_version' => 'v2.7',]);

$helper = $fb->getRedirectLoginHelper();

$permissions = ['email']; // optionnal
try {
	if (isset($_SESSION['facebook_access_token'])) {
	$accessToken = $_SESSION['facebook_access_token'];
	} else {
  		$accessToken = $helper->getAccessToken();
	}
} catch(Facebook\Exceptions\FacebookResponseException $e) {
 	// When Graph returns an error
 	echo 'Graph returned an error: ' . $e->getMessage();
  	exit;
} catch(Facebook\Exceptions\FacebookSDKException $e) {
 	// When validation fails or other local issues
	echo 'Facebook SDK returned an error: ' . $e->getMessage();
  	exit;
 }
if (isset($accessToken)) {
	if (isset($_SESSION['facebook_access_token'])) {
		$fb->setDefaultAccessToken($_SESSION['facebook_access_token']);
	} else {
		$_SESSION['facebook_access_token'] = (string) $accessToken;
	  	// OAuth 2.0 client handler
		$oAuth2Client = $fb->getOAuth2Client();
		// Exchanges a short-lived access token for a long-lived one
		$longLivedAccessToken = $oAuth2Client->getLongLivedAccessToken($_SESSION['facebook_access_token']);
		$_SESSION['facebook_access_token'] = (string) $longLivedAccessToken;
echo($_SESSION['facebook_access_token']);
		$fb->setDefaultAccessToken($_SESSION['facebook_access_token']);
	}
	// validating the access token
	try {
		$request = $fb->get('/me');
	} catch(Facebook\Exceptions\FacebookResponseException $e) {
		// When Graph returns an error
		if ($e->getCode() == 190) {
			unset($_SESSION['facebook_access_token']);
			$helper = $fb->getRedirectLoginHelper();
			$loginUrl = $helper->getLoginUrl('', $permissions);
			echo "<script>window.top.location.href='".$loginUrl."'</script>";
			exit;
		}
	} catch(Facebook\Exceptions\FacebookSDKException $e) {
		// When validation fails or other local issues
		echo 'Facebook SDK returned an error: ' . $e->getMessage();
		exit;
	}
	// getting profile picture of the user
	try {
		$requestPicture = $fb->get('/me/picture?redirect=false&height=250'); //getting user picture
		$requestProfile = $fb->get('/me?fields=id,name,email'); // getting basic info

		$picture = $requestPicture->getGraphUser();
		$profile = $requestProfile->getGraphUser();

	} catch(Facebook\Exceptions\FacebookResponseException $e) {
		// When Graph returns an error
		echo 'Graph returned an error: ' . $e->getMessage();
		exit;
	} catch(Facebook\Exceptions\FacebookSDKException $e) {
		// When validation fails or other local issues
		echo 'Facebook SDK returned an error: ' . $e->getMessage();
		exit;
	}
	$name=$profile['name'];
$email=$profile['email'];
$accessToken=$_SESSION['facebook_access_token'];
$id=$profile['id'];
$url=$picture['url'];
$servername = "localhost";
$username = "root";
$password = "sAhArAnTech1Kriti16";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "CREATE DATABASE IF NOT EXISTS TOSC_16";
if ($conn->query($sql) === TRUE) {
    // echo "Database created successfully";
} else {
    // echo "Error creating database: " . $conn->error;
}
$sql = "USE TOSC_16";
if ($conn->query($sql) === TRUE) {
    // echo "Database selected successfully";
} else {
    // echo "Error selecting database: " . $conn->error;
}

$sql="SELECT * FROM users WHERE id='$id'";
echo($accessToken);
$result=$conn->query($sql);
  if (mysqli_num_rows($result) > 0)
   {echo("fuck1");
$result = mysqli_fetch_array($result);
     $completed = $result["completed"];
$sql="UPDATE users SET access_token='$accessToken' WHERE id='$id'";
$result=$conn->query($sql);
 
}

else
{
echo("fuck");
 $sql = "INSERT INTO users (id,name,email,access_token,url)
	     VALUES ('$id', '$name','$email','$accessToken','$url')";
$result=$conn->query($sql);
}


$conn->close();



	// showing picture on the screen
	//echo "<img src='".$picture['url']."'/>";
	// saving picture
if($completed==1)
{
 header('Location: '."https://www.techkriti.org/register1/profile.php");}
else
{
header('Location: '."https://www.techkriti.org/register1/member.php");
}







  	// Now you can redirect to another page and use the access token from $_SESSION['facebook_access_token']
} else {
	$helper = $fb->getRedirectLoginHelper();
	$loginUrl = $helper->getLoginUrl('https://www.techkriti.org/register1/login-callback1.php');
	echo "<script>window.top.location.href='".$loginUrl."'</script>";
}
