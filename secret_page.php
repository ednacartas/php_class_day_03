<?php
//begin or resume the session
session_start();
//if the cookie is still valid, re-create the session
if( $_COOKIE['loggedin'] ){
  $_SESSION['logged_in'] = true;
}
//security! if the user is logged in
if( ! $_SESSION['logged_in'] ){
  //send them back to the login
  header('location:login.php');
}
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Secret!</title>
  </head>
  <body>
    <h1>It's just a piece of string</h1>
    <img src="https://66.media.tumblr.com/c362ee93bd0b7e32e0fcf98cd1bfad3d/tumblr_o8mfhkfktz1u75st9o1_500.png">
    <br />
    <a href="login.php?action=logout">Log Out</a>
  </body>
</html>
