<?php
include 'dbConnection.php';
class dbfunction
{
	public function register($usernamesignup,$emailsignup,$passwordsignup,$activation_code)
	{	include 'dbConnection.php';
		$q=mysqli_query($con,"INSERT INTO signup (ce_username,email,password,activation_code) VALUES ('$usernamesignup','$emailsignup','$passwordsignup','$activation_code')") or die('Error in signup'.mysqli_error($con));
		$q=mysqli_query($con,"INSERT INTO user_detail (email) VALUES ('$emailsignup')") or die(mysqli_error($con));
		return $q;
	}
	public function sendmail($emailsignup) {
		include 'dbConnection.php';
		$code = md5(uniqid(rand(), true));
		$to=$emailsignup;
		$sub="Code@ter Activation Mail";
		$msg="Please click on link to activate your account.\n";
			 $msg.="//activate.php?email=". urlencode($emailsignup)."&key=$code";
		$headers="From: Code@ter.\n";
		echo $msg;
		//mail($to,$sub,$msg,$headers);
		return $code;
	}
}
?>
