<?php
if(isset($_POST['usernamesignup']) && isset($_POST['emailsignup']) )
{
session_start();
include 'dbConnection.php';
include_once('dbfunction.php');
$funObj = new dbfunction();
$usernamesignup=mysqli_real_escape_string($con,$_POST['usernamesignup']);
$emailsignup=mysqli_real_escape_string($con,$_POST['emailsignup']); 
$passwordsignup=mysqli_real_escape_string($con,$_POST['passwordsignup']);
$passwordsignup=md5($passwordsignup);
$result= mysqli_query($con,"SELECT email,ce_username FROM signup WHERE email = '$emailsignup' and ce_username='$usernamesignup'");
$count=mysqli_num_rows($result);
if($count==0)
{	
	$activation_code=$funObj->sendmail($emailsignup);
	$res_register=$funObj->register($usernamesignup,$emailsignup,$passwordsignup,$activation_code);
	$temp="Please Check your  mail for activation link";
	//header('Location:index.php?q1=$temp');
}
else
{	
	$temp="Already registered";
	header('Location:index.php?q=$temp');
}
mysqli_close($con);
}

?>