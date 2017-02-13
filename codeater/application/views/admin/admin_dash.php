<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <title>Code@ter || Admin Panel</title>
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
    </head>
<body>
<div class="container-fluid" style="margin-left: 100px;margin-top:100px;">
   <div class="row">
       <div class="col-md-3">
       <ul class="nav nav-pills nav-stacked" id="myTabs">
           <li class="active"><a href="#tutorial" data-toggle="pill">Totorial</a></li>
           <li><a href="#TAB1" data-toggle="pill">TAB1</a></li>
           <li><a href="#TAB2" data-toggle="pill">TAB2</a></li>
           <li><a href="#TAB3" data-toggle="pill">TAB3</a></li>
       </ul>
       </div>
       <div class="col-md-6">
        <div class="tab-content">
             <div role="tabpanel" class="tab-pane active" id="tutorial">
                     <div class="container-fluid" style="margin-left: 200px;margin-top:50px;">
                         <select>
                             <option value="c">C</option>
                             <option value="cpp">Cpp</option>
                             <option value="java">java</option>
                             <option value="python">python</option>
                         </select>
                           <div style="margin-top: 20px;"><input type="file" id="files" name="files[]" multiple /></div>
                         <button type="button" style="margin-top: 20px">upload</button>
                     </div>
            </div>
            <div  class="tab-pane" id="TAB1">
                  <p>kjhghjkl;</p>tab1
            </div>
            <div class="tab-pane" id="TAB2">
                tab2
            </div>
            <div class="tab-pane" id="TAB3">
                tab2
            </div>
        </div>
      </div>
 </div>
</div>
</body>
</html>
