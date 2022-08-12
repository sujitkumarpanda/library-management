<?php
include('dbconn.php');
$userEmail = $_REQUEST['userEmail'];
$userPwd = md5($_REQUEST['userPwd']);
$sql = "SELECT * FROM users WHERE email='$userEmail' AND pwd='$userPwd';";
$result = mysqli_query($dbConn,$sql) or die(mysqli_error($dbConn));
$rws = mysqli_fetch_array($result);
if($userEmail==$rws[3]&&$userPwd==$rws[4]){
	$_SESSION['userId'] = $rws[0];
	header("Location:user-profile.php");
}
else
	header('Location:header.php?error=1');