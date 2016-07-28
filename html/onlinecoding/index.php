<?php
  session_start();

  // If the session vars aren't set, try to set them with a cookie
  if (!isset($_SESSION['email'])) {
    if (isset($_COOKIE['email']) && isset($_COOKIE['id'])&& isset($_COOKIE['name'])) {
      $_SESSION['email'] = $_COOKIE['email'];
      $_SESSION['id'] = $_COOKIE['id'];
      $user_id=$_COOKIE['id'];
      $_SESSION['name'] = $_COOKIE['name'];
    }
  }
  if (!isset($_SESSION['email'])) {
    header("Location:../index.php");
  }
?>
<?php require_once('Connections/database.php'); ?>
<?php

$user_id=$_SESSION['id'];
mysql_select_db($database_database, $database);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Round 1 &middot; Online Coding &middot; Interrupt'15</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" type="text/css" href="animate.css">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"><link rel="stylesheet" type="text/css" href="bootstrap.css"> 
    <script type="text/javascript">
        document.oncontextmenu = document.body.oncontextmenu = function() {return false;}
    </script>
</head>
<body>
<div class="container">
<div>
    <br><br><br><br>
</div>
        <div align="center"  >
            <br><br>
            <form method="post" action="next.php" class="col-md-6 col-md-offset-3">
                <form>
                    <div class="form-group">
                        <div class="radio">
                          <label>
                            <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                            Option one is this and that&mdash;be sure to include why it's great
                          </label>
                        </div>
                        <div class="radio">
                          <label>
                            <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                            Option two can be something else and selecting it will deselect option one
                          </label>
                        </div>
                    </div>
                    <button type="submit" name="submit" value="<" class="btn btn-default">Submit</button>
                </form>
            </form>
        </div>

        </div>

</div>

</body>
</html>