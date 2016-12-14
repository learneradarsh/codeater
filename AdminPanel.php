<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <title>Code@ter || Events</title>
    <?php include_once 'logo.php'; ?>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" herf="css/font.css">
    <link rel="stylesheet" href="ma<!DOCTYPE html">
    <html lang="en">
      <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>
        <title>Code@ter || Events</title>
        <?php include_once 'logo.php'; ?>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" herf="css/font.css">
        <link rel="stylesheet" href="main.css">
        <link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
        <link rel="stylesheet" href="css/bootstrap-social/bootstrap-social.css">

        <style>
        .center {

            margin-left:20%;
            margin-top:5%;
            margin-bottom: 10%;
            border: 1px solid white;
        }
        input { width: 50%;}
        </style>

      </head>
      <body>
      <?php include_once 'dash_header.php'; ?>
<div class="container-fluid">
<div class="row"><!--**********************************************************************************Side Bar  -->
<div class="col-md-3">
  <ul class="nav nav-pills nav-stacked" id="myTabs">
  <li class="active"><a href="#Search" data-toggle="pill">Search Participants</a></li>
    <li class="active"><a href="#Qstack" data-toggle="pill">Question Stack</a></li>
  </ul>
</div>

<!--**********************************************************************************Tab Content  -->
<div class="col-md-8">
  <div class="tab-content">
  <div id="Search" class="tab-pane fade in active"><!--*******************************************Search Tab Content  -->
<input type="text" name="ByName" placeholder="Search By Name" style="margin-left:5px;">
<button type="button" style="margin-left:5px;">Search</button>
</div>

<div id="QStack" class="tab-pane fade"><!--*******************************************Question Stack Tab Content  -->
  <table>
    <tr><th>Problem Name</th><th>Submitted By</th><th>Allow</th></tr>

  </table>

</div>
</div>


</div>
</div>


</div>
<?php include_once 'footer.php'; ?>
</body>
</html>
