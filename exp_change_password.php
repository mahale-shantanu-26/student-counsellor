<?php
include_once 'dbh.php';
session_start();
if(!isset($_SESSION['exp_email']))
	header("Location: experts.php?Can't go back");
?>
<!doctype html>
<html>
<head>
<title>Welcome Expert!</title>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/home_style.css">
<link rel="stylesheet" href="css/body1.css">
</head>
<body><br>
<a href="expert_login.php"><img src='images/logos.jpg' height=79 width=697.5></a>
<a href="exp_logout.php" class="button1 button5" style="position:relative;right: -450px;top: -35px;">LOGOUT</a>
<a href="exp_change_password.php" class="button1 button5" style="position:relative;right: -75px;top: -35px;">CHANGE PASSWORD</a>
<a href="exp_profile.php" class="button1 button5" style="position:relative;right: 300px;top: -35px;">PROFILE</a>

<hr><br>
<div class="row">

<div class="leftcolumn">
  <div class="card">
<a href="modify.php">MODIFY SCHEDULE</a><br><br>
<a href="view.php">VIEW SCHEDULE</a><br><br>
<a href="exp_public_chat.php">PUBLIC CHAT</a><br><br>
<a href="exp_private_chat.php">PRIVATE CHAT</a><br><br>
<a href="exp_public_share.php">PUBLIC SHARE</a><br><br>
<a href="exp_private_share.php">PRIVATE SHARE</a><br><br>

  </div>
  
</div>


<div class="rightcolumn">
  <div class="card">
  <center>
  <form method="post" action="exp_update_password.php">
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