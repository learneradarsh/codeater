<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <title>Code@ter || Events</title>
    <?php include_once 'logo.php'; ?>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" herf="css/font.css">
    <link rel="stylesheet" href="main.css">
    <link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap-social/bootstrap-social.css">
  </head>
  <body>
  <?php include_once 'dash_header.php'; ?>
<div class="container-fluid"><div class="col-md-2"></div>
<div class="col-md-5">
<form>
<div class="form-group" ><input type="text" class="form-control" id="userName" placeholder="Username"></div>

<div class="form-group"><input type="text" class="form-control" id="Name" placeholder="your Name"></div>

<div class="form-group"><label>Gender</label></br>
<input type="radio" name="gender" value="male" checked> Male<br>
 <input type="radio" name="gender" value="female"> Female</br>
 <input type="radio" name="gender" value="other"> Other</div>

<div class="form-group"><label>Are you Student or Professional</label></br>
<input type="radio" name="student" value="male" checked> Student<br>
 <input type="radio" name="student" value="female"> Professional</div>

<div class="form-group"><input type="text" class="form-control" id="city" placeholder="Your City Name"></div>

<div class="form-group"><input type="text" class="form-control" id="address" placeholder="address"></div>

<div class="form-group"><input type="text" class="form-control" id="Pin" placeholder="Your Pin"></div>

<div class="form-group"><input type="text" class="form-control" id="contact" placeholder="Contact Number"></div>

<div class="form-group"><input type="text" class="form-control" id="degree" placeholder="Your Highest Degree"></div>
<div class="form-group"><input type="text" class="form-control" id="college" placeholder="Your College Name"></div>
<div class="form-group"><input type="text" class="form-control" id="gradYear" placeholder="Expected Graduation Year"></div>
<div class="form-group"><input type="text" class="form-control" id="Lang" placeholder="Prefer Language ex: C ,Java"></div>

<div class="form-group"><label><input type="checkbox"> Accept</label></div>
<div class="form-group"><button type="submit" class="btn btn-default">Submit</button></div>
</form>
</div></div>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
  <div align="center">
  <?php include_once 'footer.php'; ?>
  </div>
</body>
</html>
