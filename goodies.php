<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
     <title>Code@ter || Contest</title>
    <?php include_once 'logo.php'; ?>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" herf="css/font.css">
    <link rel="stylesheet" href="main.css">
    <link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap-social/bootstrap-social.css">
</head>
<body>
<?php include_once 'header_goodies.php'; ?>
<div class="container-fluid">
    <div class="row">
                <div>
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    
                    <li role="presentation"><a href="#Goodies" aria-controls="Goodies" role="tab" data-toggle="tab">Goodies</a></li>
                    <li role="presentation"><a href="#Cart" aria-controls="Cart" role="tab" data-toggle="tab">Cart</a></li>
                    <li role="presentation"><a href="#Account" aria-controls="Account" role="tab" data-toggle="tab">My Account</a></li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="Goodies">
                               <div class="row container-fluid" style="margin-top:5px">
                                   <div class="col-md-1" ></div>
                                   <div class="col-md-3" style="margin-top:50px">
                                       <div class="row">
                                           <div class="thumbnail">
                                           <div class="panel-heading" style="text-align: center">Hello</div>
                                              <div class="panel-body"> <img src="images/bag.jpg" alt="img.jpg" width="300" height="300"/></div>
                                                   <div class="panel-footer" style="text-align: center"><p><a href="#" class="btn btn-primary" role="button" >Show Detail</a></p></div>
                                           </div>
                                       </div>
                                   </div>
                                   <div class="col-md-3" style="margin-top:50px;margin-left:10px">
                                       <div class="row">
                                           <div class="thumbnail">
                                               <div class="panel-heading" style="text-align: center">Hello</div>
                                               <div class="panel-body"> <img src="images/bag.jpg" alt="img.jpg" width="300" height="300"/></div>
                                               <div class="panel-footer"  style="text-align: center"><p><a href="#" class="btn btn-primary" role="button">Show Detail</a></p></div>
                                           </div>
                                       </div>
                                   </div>
                                   <div class="col-md-3" style="margin-top:50px;margin-left: 10px;">
                                       <div class="row">
                                           <div class="thumbnail">
                                               <div class="panel-heading" style="text-align: center">Hello</div>
                                               <div class="panel-body"> <img src="images/bag.jpg" alt="img.jpg" width="300" height="300"/></div>
                                               <div class="panel-footer"  style="text-align: center"><p><a href="#" class="btn btn-primary" role="button">Show Detail</a></p></div>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                    </div>

                    <div role="tabpanel" class="tab-pane" id="Cart">Cart</div>

                    <div role="tabpanel" class="tab-pane" id="Account">
                    <div class="row container-fluid" style="margin-top:5px">
                                   <div class="col-md-1" ></div>
                                   <div class="col-md-9" style="margin-top:50px">
                                       <div class="row">
                                           <H2>My Account</H2>
                                           <div class="col-md-9" style="margin-top:30px;margin-left:20px;">
                                           <div class="container-fluid" style="margin-top:50px;">
                                                 <div class="col-md-5"><ul class="nav nav-pills nav-stacked" id="myTabs">
                                                   <li class="active"><a href="#cdp" data-toggle="pill">My CodePoint</a></li>
                                                   <li><a href="#RcOrder" data-toggle="pill">Recent Order</a></li>
                                                   <li><a href="#Address" data-toggle="pill">Address</a></li>
                                                </ul>
                                           </div>
            <div class="col-md-5">
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="cdp">
                        <div class="row container-fluid" style="margin-top:5px">
                            
                        </div>
                    </div>
                       
                       
                    <div role="tabpanel" class="tab-pane" id="RcOrder">
                        <div class="row container-fluid" style="margin-top:5px">
                            
                        </div>
                    </div>
                    
                       
                    <div role="tabpanel" class="tab-pane " id="Address">
                        <div class="row container-fluid" style="margin-top:5px">
                            
<form>
  <div class="form-group">
    <label for="email">Name</label>
    <input type="text" class="form-control" id="email">
  </div>
  <div class="form-group">
    <label for="pwd">Phone Number</label>
    <input type="text" class="form-control" id="pwd">
  </div>
  <div class="form-group">
    <label for="pwd">Address</label>
    <input type="textarea" class="form-control" id="pwd">
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>
                            
                            
                            
                            
                        </div>
                    </div>
                </div>                                               
                </div>                        
                                               
                                               
                                               </div></div>
                                       </div>
                               </div>
                        </div>
                    </div>
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
