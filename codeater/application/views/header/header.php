<?php
echo doctype('html4-trans');
echo '<html lang="en">'.
  '<head>';
$meta = array(
        array(
                'name' => 'og:description',
                'content' => 'Code@ter is a Competitive Programming  Website having some new features like Questions in hindi also,and Clash Of Geeks.'
        ),
        array(
                'name' => 'og:image',
                'content' => 'assests/images/logo.png'
        ),
        array(
                'name' => 'og:url',
                'content' => 'http://www.codeater.com'
        ),
        array(
                'property' => 'og:title',
                'content' => 'Join Code@ter to enjoy Programming.'
        ),
	array(
                'property' => 'og:site_name',
                'content' => 'Code@ter.com'
        ),
        array(
                'name' => 'Content-type',
                'content' => 'text/html; charset=iso-8859-1', 'type' => 'equiv'
        )
);

echo meta($meta);
echo    '<title>'. $page_title.'</title>';
echo link_tag('assests/images/e_logo.png', 'shortcut icon', 'image/x-icon');
echo link_tag('assests/css/bootstrap.min.css', 'stylesheet');
echo link_tag('assests/css/font.css', 'stylesheet');
echo link_tag('assests/main.css', 'stylesheet');
echo link_tag('assests/css/bootstrap-social/bootstrap-social.css', 'stylesheet');
echo link_tag('assests/css/bootstrap-social/assets/css/font-awesome.css', 'stylesheet');
?>
    <link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- on page load modal-->
    
    <!-- on page modal closed -->
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
        <a class="navbar-brand" href="<?=base_url();?>"><b><img src="<?=base_url('assests/images/codeaterwhite.png');?>" style="width:200px; heigth:60px;"/></b></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <form class="navbar-form navbar-right">

            <div class="form-group">
              <input type="text" placeholder="Email" class="form-control"/>
            </div>
            <div class="form-group">
              <input type="password" placeholder="Password" class="form-control"/>
            </div>
            <button type="submit" class="btn btn-success">Login</button>
            <a href="<?=base_url('signup');?>" type="button" class="btn btn-primary">
  SignUp
</a>
<a type="button" href="<?=base_url('general/help');?>" class="btn btn-default">May I Help You?</a>


          </form>
        </div><!--/.navbar-collapse -->
    
    </nav>
