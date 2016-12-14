<?php
include_once 'dbConnection.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$name=$_POST['name'];
$name = stripslashes($name);
$name = addslashes($name);
$gender=$_POST['gender'];
$gender = stripslashes($gender);
$gender = addslashes($gender);
$email=$_POST['email'];
$email=stripslashes($email);
$email=addslashes($email);
$contact=$_POST['contact'];
$contact=stripcslashes($contact);
$contact=addslashes($contact);
$college=$_POST['college'];
$college=stripslashes($college);
$college=addslashes($college);
$yop=$_POST['yop'];
$yop=stripslashes($yop);
$yop=addslashes($yop);
$dob=$_POST['dob'];
$dob=stripslashes($dob);
$dob=addslashes($dob);
$query="INSERT INTO user_detail (name,gender,email,contact,college,yop,dob) 
VALUES ('$name','$gender','$email','$contact','$college','$yop','$dob')";
mysqli_query($con,$query) or die('Error in querying');
$to =$email;
$email1="learner.aadrsh@gmail.com";
  $subject = "Code@ter CIM";
  $message = "
<html>
<head>
<title>THANKS FOR YOUR PARTICIPATION</title>
</head>
<body>
<p>Dear Participant,</p>
<p>Thanks for your precious Contribution.</p>
<p align='left'>Thanks & Regards<br/>COde@ter Team</p>
</body>
</html>
";
mail($email, "$subject", "From:" . $email1,$message);
header('Location:./CIM_2.php');	
mysql_close($con);
}

?>