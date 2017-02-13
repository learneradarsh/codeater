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

    <style>
    .center {

        text-align: center;
        margin-top:10%;
        margin-bottom: 10%;
        border: 1px solid white;
    }
    </style>

  </head>
  <body>
  <?php include_once 'dash_header.php'; ?>


<div class="container-fluid center">
<form>
    <fieldset>
        <input type="email" placeholder="Email"><br/><br/>
        <input type="password" placeholder="Password"><br/><br/>
        <label for="remember">
            <input id="remember" type="checkbox"> Remember me
        </label><br/>
        <button type="submit" class="pure-button pure-button-primary">Login</button>
    </fieldset>
</form>
</div>

  <?php include_once 'footer.php'; ?>
  </div>
  </body>
  </html>
