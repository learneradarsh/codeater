<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <title>Code@ter || SIGNUP</title>
    <?php include_once 'logo.php'; ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:title" content="Join Code@ter to enjoy Programming." />
    <meta property="og:url" content="http://www.codeater.com" />
    <meta property="og:image" content="images/logo.png"/>
    <meta property="og:description" content="Code@ter is a Competitive Programming  Website having some new features like Questions in hindi also,and Clash Of Geeks." />
    <meta property="og:site_name" content="Code@ter.com" />
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" herf="css/font.css">
    <link rel="stylesheet" href="main.css">
    <link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap-social/bootstrap-social.css">
    <link rel="stylesheet" href="css/bootstrap-social/assets/css/font-awesome.css">
    <!-- on page loaad modal-->
    
    <!-- on page modal closed -->
  </head>
<body>
<?php include_once 'header.php'; ?>
<div class="container" style="margin-top: 98px;">
  <form method="POST" name="signup-form" id="signup-form" action="login_script.php" enctype="multipart/form-data">
  <div class="panel" align="center" style="margin-left:30%;margin-right:30%;">
    <h1>SIGNUP HERE</h1>
    <div class="form-group">
      <input type="text" class="form-control" name="name" placeholder="Name" required="required">
    </div>
    <div class="form-group">
      <input type="email" class="form-control" name="email" placeholder="Email" required="required">
    </div>
    <div class="form-group">
      <input type="password" class="form-control" name="password" placeholder="Password" required="required">
    </div>
    <div>
      <button type="submit" class="btn btn-success">SIGNUP</button>
    </div>
  </div>
  </form>
</div>



<!--script files -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>

<!--- script files closed -->
<div align="center">
<?php include_once 'footer.php';  ?>
</div>
<!--End Footer-->

</body>
</html>
