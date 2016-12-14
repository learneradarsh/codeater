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
  <div class="container-fluid">
  <div class="row">

  <!--Start Left Nav Bar -->
  <div class="col-md-2">
      <ul class="nav nav-pills nav-stacked" id="myTabs">
        <li class="active"><a href="#Inbox" data-toggle="pill">Inbox</a></li>
        <li><a href="#Send" data-toggle="pill">Send</a></li>
      </ul>
    </div>

    <!-- Tab Content -->
    <div class="col-md-7">
      <div class="tab-content">
        <div class="tab-pane active" id="Inbox">
          <div class="panel-group" id="accordion"><!--Start Collap Open-->
           <div class="panel panel-default">
             <div class="panel-heading">
               <h4 class="panel-title">
                 <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
                 Collapsible Group 1</a>
               </h4>
             </div>
             <div id="collapse1" class="panel-collapse collapse in">
               <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
               sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
               minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
               commodo consequat.</div>
             </div>
           </div>
           <div class="panel panel-default">
             <div class="panel-heading">
               <h4 class="panel-title">
                 <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
                 Collapsible Group 2</a>
               </h4>
             </div>
             <div id="collapse2" class="panel-collapse collapse">
               <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
               sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
               minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
               commodo consequat.</div>
             </div>
           </div>
           <div class="panel panel-default">
             <div class="panel-heading">
               <h4 class="panel-title">
                 <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
                 Collapsible Group 3</a>
               </h4>
             </div>
             <div id="collapse3" class="panel-collapse collapse">
               <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
               sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
               minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
               commodo consequat.</div>
             </div>
           </div>
         </div><!--End Collap Open-->

    </div>
      <div class="tab-pane" id="Send">
        <div class="col-md-8">
         <div class="row">
           <div class="form-group">
            <textarea cols="100" rows="20" placeholder="Type your message....."></textarea>
          <p align="Right">  <button type="button" class="btn btn-success" >Send</button></p>
           </div>
       </div>
      </div>
    </div>

      </div>
    </div>

    </div><!--End Row-->
  </div><!--End Container-->

  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <div align="center">
    <?php include_once 'footer.php'; ?>
    </div>
  </body></html>
