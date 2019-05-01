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
input[type=text], input[type=password] {
    width: 100%;
    padding: 10px;
    margin: 5px 0 22px 0;
    border: 2px solid #ddd;
    border-color: #ddd;
    background: #fff;
    border-radius: 2px;
    font-size: 16px;
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
<h3 style='font-family:cambria;'>Profile </h3><font face = 'Cambria' size=4>

<?php
echo '
<table>
	<tr>
	<td>User ID</td>
    <td>'.$_SESSION["user_sid"].'</td>
    <td></td>
</tr>
<tr>
	<td>Name</td>
    <td>'.$_SESSION['user_name'].'</td>
    <td>
    <form action="update_pro.php" method="post">
<input type="submit" class="button1 button5" name="ch_name"  value="CHANGE">
    </form></td>
</tr>
<tr>
	<td>Email</td>
    <td>'.$_SESSION['user_email'].'</td>
    <td>
    <form action="update_pro.php" method="post">
<input type="submit" class="button1 button5" name="ch_email"  value="CHANGE">
    </form></td>
</tr>
<tr>
	<td>Date of Birth</td>
    <td>'.$_SESSION["user_dob"].'</td>
    <td>
    <form action="update_pro.php" method="post">
<input type="submit" class="button1 button5" name="ch_dob"  value="CHANGE">
    </form></td>
</tr>
<tr>
	<td>Gender</td>
    <td>'.$_SESSION["user_gender"].'</td>
    <td>
    <form action="update_pro.php" method="post">
<input type="submit" class="button1 button5" name="ch_gender"  value="CHANGE">
    </form></td>
</tr>
</table>';
?>

<center><br></body>
</html>