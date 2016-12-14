<?php
include_once 'dbConnection.php';
$emailsignup = $_GET['email'];
$key = $_GET['key'];
$query = "UPDATE signup SET activation_code='active' WHERE (email ='$emailsignup' AND activation_code='$key')";
$result = mysqli_query($con, $query) or die(mysqli_error($con)) ;
if(mysqli_affected_rows($con) == 1)
{
	$print="Welcome, your accout has been activated succefully";
	echo $print;
}
	
else
{
	$print="Some Error occured";
	echo $print;
}

?>