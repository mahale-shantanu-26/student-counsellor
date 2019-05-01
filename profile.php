<?php
include_once 'dbh.php';
session_start();
if(!isset($_SESSION['user_email']))
	header("Location: home.php?Can't go back");
?>
<!doctype html>
<html>
<head>
<title>Profile</title>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/home_style.css">
<style>
    .container {
    position: absolute;
    top: 25;
    right: 50%;
    margin: 20px;
    max-width: 300px;
    padding: 16px;
    background-color: white;
    border-radius: 5px;
  }
  .para{
    font-size:22px;
    padding-left: 10%;
    padding-right: 10%;
    font-family: Segoe UI;
    line-height: 35px;
    text-align: justify;
}
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  padding: 8px;
  text-align: center;
  border-bottom: 1px solid #ddd;
}

</style>
</head>
<body><br>
<a href="logined.php"><img src='images/logos.jpg' height=79 width=697.5></a>
<a href="logout.php" class="button1 button5" style="position:relative;right: -450px;top: -35px;">LOGOUT</a>
<a href="change_password.php" class="button1 button5" style="position:relative;right: -75px;top: -35px;">CHANGE PASSWORD</a>
<a href="profile.php" class="button1 button5" style="position:relative;right: 300px;top: -35px;">PROFILE</a>
<hr>
<div class="para">
<h2 style='font-family:cambria;'>Profile </h2><font face = 'Cambria' size=5>

<?php
echo '
<table>
	<tr>
	<td>User ID</td>
	<td>'.$_SESSION["user_sid"].'</td>
</tr>
<tr>
	<td>Name</td>
	<td>'.$_SESSION['user_name'].'</td>
</tr>
<tr>
	<td>Email ID</td>
	<td>'.$_SESSION["user_email"].'</td>
</tr>
<tr>
	<td>Date of Birth</td>
	<td>'.$_SESSION["user_dob"].'</td>
</tr>
<tr>
	<td>Gender</td>
	<td>'.$_SESSION["user_gender"].'</td>
</tr>
</table>';
?>
<center><br>
<a href="change_profile.php" class="button1 button5" style="position:relative;top:0px;right: 0px;">CHANGE PROFILE</a></center>
</body>
</html>