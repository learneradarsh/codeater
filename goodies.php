<!DOCTYPE html>
<html lang="en">
  <head>
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
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

    <style>
    .city {display:none;}
    </style>
  </head>
<body>
<?php include_once 'header_goodies.php'; ?>
<!--W3 tab-->
<div class="w3-container">
  <h2>Welcome Codeater Goodies</h2>
  <div class="w3-row">
    <a href="javascript:void(0)" onclick="openCity(event, 'mypoint');">
      <div class="w3-third tablink w3-bottombar w3-hover-light-grey w3-padding">My point & My Acounts</div>
    </a>
    <a href="javascript:void(0)" onclick="openCity(event, 'goodies');">
      <div class="w3-third tablink w3-bottombar w3-hover-light-grey w3-padding">goodies</div>
    </a>
    <a href="javascript:void(0)" onclick="openCity(event, 'cart');">
      <div class="w3-third tablink w3-bottombar w3-hover-light-grey w3-padding">Cart</div>
    </a>
  </div>
<!--***************************************************************trat My account***************************************-->
  <div id="mypoint" class="w3-container city">

  </div>
<!--End My account-->

<!--***********************************************************************Strat Goodies*************************************************-->
<div id="goodies" class="w3-container city">
<div class="w3-container">
 <div class="row" style="margin-top:50px;">
    <div class="col-md-3">
      <div class="w3-card-8 w3-dark-grey w3-margin-bottom">
         <div class="w3-container w3-center">
          <h3>Price</h3>
          <img src="images/goodies1.svg" alt="Avatar" style="width:80% ">
           <h3></h3>
            <button class="w3-btn w3-green w3-margin-bottom">Add to cart</button>
            <button class="w3-btn w3-red w3-margin-bottom">Buy Now</button>
          </div>
      </div></div>
    </div>
   </div>
</div><!--End Goodies-->

 <!--*******************************************************************Strat cart*************************************************-->

<!--Strat Cart-->
  <div id="cart" class="w3-container city">
<div class="panel container-fluid">
<h1>ksuauauuscyuscyudhisucusdi</h1>





</div>
</div>

<!--End Cart-->

</div>

<!--End w3 tab-->





<div align="center">
<?php include_once 'footer.php';  ?>
</div>
<!--End Footer-->
<!--Script for goodies Header-->
<script>
function openCity(evt, cityName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("city");
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
     tablinks[i].className = tablinks[i].className.replace(" w3-border-red", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.firstElementChild.className += " w3-border-red";
}
</script>
<!--End Script for goodies Header-->





</body>
</html>
