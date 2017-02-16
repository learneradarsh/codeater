<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
   <?=    '<title>'. $page_title.'</title>'?>
<?= link_tag('assests/images/e_logo.png', 'shortcut icon', 'image/x-icon');?>
<?= link_tag('assests/css/bootstrap.min.css', 'stylesheet');?>
<?= link_tag('assests/css/font.css', 'stylesheet');?>
<?= link_tag('assests/main.css', 'stylesheet');?>
<?= link_tag('assests/css/bootstrap-social/bootstrap-social.css', 'stylesheet');?>
<?= link_tag('assests/css/bootstrap-social/assets/css/font-awesome.css', 'stylesheet');?>
    <link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
<style>

</style>
  </head>
  <body>
<nav class="navbar navbar-inverse navbar-fixed">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?=base_url();?>"><b><img src="<?=base_url();?>assests/images/codeaterWhite.png" style="width:200px; heigth:60px;"></img></b></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
  <form class="navbar-form navbar-right">
     <ul class="nav navbar-nav">
       <li><a href="<?=base_url('practice');?>">Practice</a></li>
      <li><a href="<?=base_url('contest');?>">Contest</a></li>
      <li><a href="<?=base_url('tutorials');?>">Tutorial</a></li>
      <li><a href="<?=base_url('rank_list');?>">Rank List</a></li>
      <li><a href="<?=base_url('COC');?>">Clash of Geeks</a></li>
      <li><a href="<?=base_url('inbox');?>" style="padding: 15px 1px 10px 15px;">Inbox</a></li><li><span class="badge"  style="margin:15px 5px;" >42</span></li>
      <li>  <input type="text" class="form-control" placeholder="Search for..." style="margin-top:5px; margin-right:10px"></li>
    <li>
       <li><a href="<?=base_url('dashboard');?>" style="padding: 0px;"> <p><img src="<?=base_url('assests/');?>images/e_logo.png" class="profile-image img-circle" width="45px" height="35px"style="margin-top:5px"/></p></a></li>

      </li>
     <li style="margin-left:5px">  <div class="dropdown">
      <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"style="margin-top:5px">
      <span class="caret"></span></button>
       <ul class="dropdown-menu">
         <li><a href="#">Profile</a></li>
         <li><a href="#">Invite Friend</a></li>
         <li><a href="#">Change Password</a></li>
         <li><a href="<?=base_url('logout');?>">Log Out</a></li>
       </ul>
     </div></li>


</ul>
</form>
</nav>
