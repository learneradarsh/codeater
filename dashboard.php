<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <title>Code@ter || Events</title>
    <?php include_once 'logo.php'; ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" herf="css/font.css">
    <link rel="stylesheet" href="main.css">
    <link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap-social/bootstrap-social.css">
  </head>
  <body>
  <?php include_once 'dash_header.php'; ?>
<div class="container-fluid">
<div class="row">

<!--Start Left Nav Bar -->
  <div class="col-md-2">
      <ul class="nav nav-pills nav-stacked" id="myTabs">
        <li class="active"><a href="#Live" data-toggle="pill">Live<span class="badge" style="background:#ffeb3b">5</span></a></li>
        <li><a href="#Upcomming" data-toggle="pill">Upcomming<span class="badge" style="background:#64dd17">5</span></a></li>
        <li><a href="#Recent" data-toggle="pill">recent</a></li>
      </ul>
    </div>

    <!-- Tab Content -->
    <div class="col-md-7">
      <div class="tab-content">
        <div class="tab-pane active" id="Live">
          <div class="col-md-4">
             <div class="row">
              <div class="thumbnail"style="margin-right:10px">
                <img src="images/banner1.jpg" alt="img.jpg">
                <div class="caption">
                  <h3>Code Mela</h3>
                  <p>First comp</p>
                  <p><a href="#" class="btn btn-primary" role="button">Register Now</a></p>
                </div>
              </div>
           </div>
          </div>
      </div>
      <div class="tab-pane" id="Upcomming">
        <div class="col-md-4">
         <div class="row">
          <div class="thumbnail"style="margin-right:10px">
            <img src="images/banner1.jpg" alt="img.jpg">
            <div class="caption">
              <h3>Code Mela</h3>
              <p>Second comp</p>
              <p><a href="#" class="btn btn-primary" role="button">Register Now</a></p>
            </div>
          </div>
       </div>
      </div>
    </div>
    <div class="tab-pane" id="Recent">
      <div class="col-md-4">
           <div class="row">
            <div class="thumbnail"style="margin-right:10px">
              <img src="images/banner1.jpg" alt="img.jpg">
              <div class="caption">
                <h3>Code Mela</h3>
                <p>Third comp</p>
                <p><a href="#" class="btn btn-primary" role="button">Register Now</a></p>
              </div>
            </div>
         </div>
        </div>
      </div>
      </div>
    </div>
<!--End Left Nav Bar -->


<div class="col-md-3"><!--Start Right Pannel-->
    <div class="panel panel-default" style="margin-top:7px">
      <div class="panel-heading" style="background-color:#55ACEE;font-family: 'Dosis', sans-serif;font-size:1.2em;"><b>Registered Challenge</b></div>
      <div class="panel-body">Panel Content </div>
    </div>
   <div class="panel panel-default">
     <div class="panel-heading" style="background-color:#55ACEE;font-family: 'Dosis', sans-serif;font-size:1.2em;"><b>Participate Challenge</b></div>
     <div class="panel-body">Panel Content</div>
   </div>
  <div class="panel panel-default">
    <div class="panel-heading" style="background-color:#55ACEE;font-family: 'Dosis', sans-serif;font-size:1.2em;"><b>Committed COG</b></div>
    <div class="panel-body">Panel Content</div>
  </div>
</div>
</div>
</div>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
  <div align="center">
  <?php include_once 'footer.php'; ?>
  </div>
  </body>
  </html>
