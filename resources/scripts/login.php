<?php
$_SESSION['bscLoginUser'] = "";

session_start();

include("../../includes/config.php");

$link = mysqli_connect($sqlhost, $sqluser, $sqlpass, $sqldata);

$loginName = $_POST['username'];
$loginPass = $_POST['password'];
$nextUrl = $_POST['directTo'];

$loginName = stripslashes($loginName);
$loginPass = stripslashes($loginPass);
$nextUrl = stripslashes($nextUrl);
$loginName = mysqli_real_escape_string($link, $loginName);
$loginPass = mysqli_real_escape_string($link, $loginPass);
$nextUrl = mysqli_real_escape_string($link, $nextUrl);

$encryptedPass = hash('sha256', $loginPass);

$sql="SELECT * FROM users WHERE username='" . $loginName . "' and password='" . $encryptedPass . "'";
$result=mysqli_query($link, $sql);

$count=mysqli_num_rows($result);

if($count==1){
	$_SESSION['bscLoginUser'] = $loginName;
	header("location: //" . $sitehost . "/" .  $redirectTo);
}
else 
{
	session_start();
	session_destroy();
	header("location: //" . $sitehost . "/support/error/?id=1");
}
?>