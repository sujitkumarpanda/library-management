<?php
include('dbconn.php');

$userFname = $_REQUEST['fname'];
$userLname = $_REQUEST['lname'];
$userEmail = $_REQUEST['email'];
$userPassword = md5($_REQUEST['pwd']); // MD5 encryption is used for password
$userGender = $_REQUEST['gender'];
$userDOB = $_REQUEST['dob'];
$userAddress = $_REQUEST['address'];
$sql = "INSERT INTO users VALUES('','$userFname','$userLname','$userEmail','$userPassword','$userGender','$userDOB','$userAddress')";
mysqli_query($dbConn,$sql);
header('Location:index.php');