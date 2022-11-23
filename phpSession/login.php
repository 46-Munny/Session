<?php
session_start();
if(!isset($_SESSION['uname']))
{
  if(isset($_REQUEST['name']))
  {
    $uname=$_REQUEST['name'];
    $passward=$_REQUEST['pass'];

    $_SESSION['uname']=$uname;
    $_SESSION['passward']=$passward;
  }
}

else{
  echo"<script>location.href='welcome.php'</script>";
}
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="login.php" method="post">
      <label for="">username:</label>
      <input type="text" name="name" value=""><br><br>
      <label for="">passward:</label>
      <input type="text" name="pass" value=""><br><br>
      <input type="button" name="submit" value="submit">
    </form>
  </body>
</html>
