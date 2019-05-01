<?php
include_once 'dbh.php';
session_start();
if(!isset($_SESSION['user_email']))
	header("Location: home.php?Can't go back");
?>
<!doctype html>
<html>
<head>
<title>Welcome Student!</title>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/home_style.css">
<link rel="stylesheet" href="css/body1.css">
</head>
<body><br>
<a href="logined.php"><img src='images/logos.jpg' height=79 width=697.5></a>
<a href="logout.php" class="button1 button5" style="position:relative;right: -450px;top: -35px;">LOGOUT</a>
<a href="change_password.php" class="button1 button5" style="position:relative;right: -75px;top: -35px;">CHANGE PASSWORD</a>
<a href="profile.php" class="button1 button5" style="position:relative;right: 300px;top: -35px;">PROFILE</a>

<hr><br>
<div class="row">

<div class="leftcolumn">
  <div class="card">
<a href="public_chat.php">PUBLIC CHAT</a><br><br>
<a href="private_chat.php">PRIVATE CHAT</a><br><br>
<a href="public_share.php">PUBLIC SHARE</a><br><br>
<a href="private_share.php">PRIVATE SHARE</a><br><br>

  </div>
  
</div>


<div class="rightcolumn">
  <div class="card">
  <center>
  <form method="post" action="update_password.php">
  <input type="password" name="current" placeholder="Current Password*">
  <input type="password" name="new" placeholder="New Password*">
  <input type="password" name="renew" placeholder="Re-type Password*"><br><br>
  <input type="submit" class="button1 button5" name="submit" value="CHANGE PASSWORD">
</form>
</center>
</div>
</div>
</div>
</body>
</html>