<?php
  Header('Cache-Control: no-cache');
  Header('Pragma: no-cache');
  date_default_timezone_set('UTC');
?>
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" />
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Une page PHP</title>
  </head>
  <body class="container">
    <h1>Une page PHP</h1>
        <p><a class="btn btn-primary btn-large" href="Default.aspx">Back.</a></p>
    <p class="lead">Il est <?php $now = date('H:i:s'); echo $now; ?></p>
    </body</html>
