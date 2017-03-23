<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Franziskus Nakajima">
    <meta name="mobile-web-app-capable" content="yes">
    <meta id="theme-color" name="theme-color" content="#000">
    <title>simple weather tracker</title>
    <!-- <link rel="stylesheet" href="css/zocial.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css"> -->

  </head>

  <body>
    <?php include 'controller.php' ?>
    <form action="?enterdata" method="POST">
      <input type="text" name="temp" />
      <label for="temp">Enter temperature here</label>
      <br>
      <br>
      <input type="submit" name="submit" value="enter" />
    </form>

    <ul>
      <?php
      foreach ($view->templist as $temp) {
        echo '<li>' . $temp . '˚C </li>';
      }
      ?>
    </ul>



<!-- Javascript at the end of the body -->
    <!-- <script
      src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js">
    </script> -->
    <!-- <script src="js/script.js"></script> -->
<!-- end of javascript -->

  </body>
</html>
