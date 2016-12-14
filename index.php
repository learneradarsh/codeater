<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <title>Code@ter || HOME</title>
    <?php include_once 'logo.php'; ?>
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
<?php 
$chk1 =$_GET['q'];
$chk2=$_GET['q1']; 
if($chk1 != null)
{
echo "<div class='alert alert-danger alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button><center><strong>User Already Registered</strong></center></div>";
}
else if($chk2 != null)
{
echo "<div class='alert alert-success alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button><center><strong>User successfully registered.&nbsp;Please Check your email for activation link.</strong></center></div>";
}
?>
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="images/brthdy.png" alt="Celebration of Codeater Birthday" height="351px" width="1348px">
      <div class="carousel-caption">
        <p align="center" style="margin-bottom:3px">  <a type="button" href="CIM.php" class="btn btn-primary btn-lg">
  Apply For Internship
</a>

       </p>
      </div>
    </div>
    <div class="item">
      <img src="images/intern.png" alt="Codeater Internship Mania" height="351px" width="1350px">
      <div class="carousel-caption">
        <p align="center">  <a type="button" href="CIM.php" class="btn btn-primary btn-lg">
  Apply For Internship
</a>

</p>
      </div>
    </div>
          <div class="item">
      <img src="images/features.png" alt="features Of Codeater" height="351px" width="1348px">
      <div class="carousel-caption">
        <p align="center">  <a type="button" href="CIM.php" class="btn btn-primary btn-lg">
  Apply For Internship
</a>

</p>
      </div>
    </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>



<!--Start Main Pannel-->
<div class="container-fluid">
<div class="row">
<div class="col-md-8" style="background-color:;">
  <div class="row" style="margin-top:7px">
      <a href="contest.php"> <div class="col-md-4" style="background-color:">
          <div class="panel panel-default">
           <div class="panel-heading" style="background-color:#EFF7FF;font-family: 'Dosis', sans-serif;font-size:1.2em;"><i class="material-icons">thumbs_up_down</i>&nbsp;<b>Contest</b></div>
           <div class="panel-body" >
              <ul class="list-group" style="margin-left: 7px">
                <li class="list-item">Contest enhance your coding skills.</li>
                <li class="list-item">You can win goodies here.</li>
                <li class="list-item">It gives  you better way to get success.</li>
                <li class="list-tem">It's only for Beginners.So , let's Begin.</li>
              </ul>
           </div>
          </div>
      </div></a>
     <a href="practice.php"> <div class="col-md-4" style="background-color:">
         <div class="panel panel-default">
          <div class="panel-heading" style="background-color:#EFF7FF;font-family: 'Dosis', sans-serif;font-size:1.2em;"><i class="material-icons">fitness_center</i>&nbsp;<b>Practices</b></div>
          <div class="panel-body">
            <ul class="list-group" style="margin-left: 7px">
              <li class="list-item">You can practice here for free.</li>
              <li class="list-item">Here we provide you best contents for practice.</li>
              <li class="list-item">We've many questions on which you can practice.</li>
              <li class="list-item">So,don't worry and let's start practice.</li>
            </ul>
          </div>
         </div>
     </div></a>

     <a href="tutorials.php"><div class="col-md-4" style="background-color:">
        <div class="panel panel-default">
         <div class="panel-heading" style="background-color:#EFF7FF;font-family: 'Dosis', sans-serif;font-size:1.2em;"><i class="material-icons">touch_app</i>&nbsp;<b>Tutorials</b></div>
         <div class="panel-body">
           <ul class="list-group" style="margin-left: 7px">
              <li class="list-item">We're occupying you better tutorial contents here.</li>
              <li class="list-item">Best Videos for Elaboration.</li>
              <li class="list-item">Best contents which helps you to analyze things.</li>
              <li class="list-item">Free ebooks which is valuable for you.</li>
            </ul>
         </div>
        </div>
    </div></a>
   </div>
   <div class="row">
        <a href="#" onclick="alert('You can not try this now.Sorry for Inconvience.')"><div class="col-md-4" style="background-color:">
           <div class="panel panel-default">
            <div class="panel-heading" style="background-color:#EFF7FF;font-family: 'Dosis', sans-serif;font-size:1.2em;"><i class="material-icons">assessment</i><b>&nbsp;Rank List </b></div>
            <div class="panel-body">
              <ul class="list-group" style="margin-left: 7px">
                <li class="list-item">Here you can view rank list of all the contestants.</li>
                <li class="list-item">You can know your global rank.</li>
                <li class="list-item">So , your place in this Ranklist.</li>
              </ul>
            </div>
           </div>
       </div></a>
       <a href="#" onclick="alert('Comming Soon....')"><div class="col-md-4">
          <div class="panel panel-default">
           <div class="panel-heading" style="background-color:#EFF7FF;font-family: 'Dosis', sans-serif;font-size:1.2em;"><i class="material-icons">pets</i>&nbsp;<b>Clash Of Geeks</b></div>
           <div class="panel-body">Coming Soon</div>
          </div>
      </div></a>
    </div>
</div><!--End Main Pannel-->
<!--Left Pannel-->
  <div class ="col-md-4" style="">

   <a href="hot_topic.php" style="text-decoration:none"> <div class="panel panel-default" style="margin-top:7px">
      <div class="panel-heading" style="background-color:#55ACEE;font-family: 'Dosis', sans-serif;font-size:1.2em;color:white"><i class="material-icons">whatshot</i>&nbsp;<b>Hot Topic</b></div>
      <div class="panel-body">
        <ul class="list-group" style="margin-left: 12px">
          <li class="list-item">Modular Mathematics.</li>
          <li class="list-item">String Manipulation.</li>
          <li class="list-item">Array of Pointer.</li>
          <li class="list-item">Bitwise Operators.</li>
          <li class="list-item">Complexity Finding.</li>
            <li class="list-item">Big-O Complexity Chart</li>
        </ul>
      </div>
    </div></a>


 <div class="panel panel-default">
     <div class="panel-heading" style="background-color:#55ACEE;font-family: 'Dosis', sans-serif;font-size:1.2em;color:white"><i class="material-icons">local_library</i>&nbsp;<b>Suggest Problems</b></div>
     <div class="panel-body">
       <ul class="list-group" style="margin-left: 12px">
        <li class="list-item"><a href="https://www.hackerearth.com/practice/basic-programming/implementation/basics-of-implementation/practice-problems/algorithm/the-great-kian/">The great Kian having some routes.</a></li>
        <li class="list-item"><a href="https://www.hackerearth.com/practice/basic-programming/implementation/basics-of-implementation/practice-problems/algorithm/print-hackerearth/">Print HackerEarth with funny strings.</a></li>
        <li class="list-item"><a href="https://www.hackerearth.com/practice/algorithms/searching/binary-search/practice-problems/algorithm/the-old-monk/">Old Monk with his stick.</a></li>
       </ul>
     </div>
 </div>


  <a href="#" style="text-decoration:none"><div class="panel panel-default">
    <div class="panel-heading" style="background-color:#55ACEE;font-family: 'Dosis', sans-serif;font-size:1.2em;color:white"><i class="material-icons">timeline</i>&nbsp;<b>Top to Gainers of COG</b></div>
    <div class="panel-body">Coming Soon</div>
  </div>
 </a>
 </div>
 </div>
 </div>

<!--End Left Pannel-->
<!--End Main-->
<!-- script files ---->
s<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>

<!--- script files closed -->
<div align="center">
<?php include_once 'footer.php';  ?>
</div>
<!--End Footer-->

</body>
</html>
