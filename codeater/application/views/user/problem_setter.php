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

            margin-left:20%;
            margin-top:5%;
            margin-bottom: 10%;
            border: 1px solid white;
        }
        input {
    width: 50%;
}
        </style>

      </head>
      <body>
      <?php include_once 'dash_header.php'; ?>
    <div class="container-fluid center">
    <form>
<fieldset>
        <p><b>Problem Name:</b></p><input type="text" name="problemName"><br/>
        <p><b>Problem Discription:</p></b><textarea rows="5" cols="80"  name="problemDiscription"></textarea><br/>
        <p><b>Explanation:</p></b><textarea rows="5" cols="80" name="Explanation"></textarea>
      <p><b>Difficulty Level:</p></b>  <select>
  <option value="very_Easy">very-Easy{O(1)}</option>
  <option value="Easy">Easy{O(n)}</option>
  <option value="Medium">Medium{O(n^2)}</option>
  <option value="Hard">Hard{O(n!)}</option>
</select>
        <p><b>Soluton:</p></b><textarea rows="5" cols="80" name="solution"></textarea><br>
        <p><b>Input:</b></p><input type="file" name="input" size="40">
        <p><b>Output:</b></p><input type="file" name="output" size="40">
         <button type="button">Submit!</button>
</fieldset>
</form>
</div>
      <?php include_once 'footer.php'; ?>
  </body>
</html>
