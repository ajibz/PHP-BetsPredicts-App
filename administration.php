<?php
session_start();
if (isset($_POST['send']) and htmlspecialchars(stripslashes(strip_tags(trim($_POST['username'])))) == "alexanderprofesssor@gmail.com" and htmlspecialchars(stripslashes(strip_tags(trim($_POST['password'])))) == "ajibose419") {
  
  $_SESSION['user'] = $_POST['username'];
  header("location:dashboard.php");
}

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   

   <meta name="description" content="Bet Predicts is a professional sport predictions site which provides Free  Away Over 0.5 football betting tips from professional sport tipsters.">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
   

    <title>Bet Predicts- Free Away Over 0.5 Football Betting Tips</title>
  </head>
  <body>
<center>
 <div id="phrasecontainer" style="width: 400px;margin-top: 50px">
  <form class="form-group" id="form" method="POST" action="">
    <br/>
      <h3 style="color: red"> Administrative Login </h3>
      <!-- <label for="user">12 word phrase</label> -->
      <br/>
    
    <input type="text" id="user" name="username"  class="form-control" placeholder="Enter Username" required>
    <br/>
       <!-- <label for="pass"> Temporary Password</label> -->
    <input type="password" id="pass" name="password" class="form-control" placeholder="Enter Password" required>
    <br/>
    <input type="submit"  name="send" value="Submit" style="color: white;width: 70%" class="btn btn-danger">
  </form>
</div>

</center>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

   



  </body>
</html>