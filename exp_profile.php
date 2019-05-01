<?php
include_once 'dbh.php';
session_start();
if(!isset($_SESSION['exp_email']))
	header("Location: experts.php?Can't go back");
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

</style>
</head>
<body><br>
<a href="expert_login.php"><img src='images/logos.jpg' height=79 width=697.5></a>
<a href="exp_logout.php" class="button1 button5" style="position:relative;right: -450px;top: -35px;">LOGOUT</a>
<a href="exp_change_password.php" class="button1 button5" style="position:relative;right: -75px;top: -35px;">CHANGE PASSWORD</a>
<a href="exp_profile.php" class="button1 button5" style="position:relative;right: 300px;top: -35px;">PROFILE</a>
<hr>
<div class="para">
<h2 style='font-family:cambria;'>Profile </h2><font face = 'Cambria' size=5>

<?php
echo '
<table cellspacing=0 cellpadding=0 border="1" width="50%" bordercolor="#fff" style="float:left;position: relative;">
	<tr align=center>
	<td width="120" height="50">User ID</td>
	<td width="120" height="50">'.$_SESSION["exp_id"].'</td>
</tr>
<tr align=center>
	<td width="120" height="50">Name</td>
	<td width="120" height="50">'.$_SESSION['exp_name'].'</td>
</tr>
<tr align=center>
	<td width="120" height="50">Email ID</td>
	<td width="120" height="50">'.$_SESSION["exp_email"].'</td>
</tr>
<tr align=center>
	<td width="120" height="50">Language</td>
	<td width="120" height="50">'.$_SESSION["exp_lang"].'</td>
</tr>
<tr align=center>
	<td width="120" height="50">Expertise</td>
	<td width="120" height="50">'.$_SESSION["exp_expertise"].'</td>
</tr>
<tr align=center>
	<td width="120" height="50">Designation</td>
	<td width="120" height="50">'.$_SESSION["exp_desig"].'</td>
</tr>
</table>';
echo '<img src="'.$_SESSION["exp_dp"].'" width="440px" height="240px" style="position: relative;float:left;top:20px;left: 130px;">';

?>
<form action="exp_update_profile.php" method="post" enctype="multipart/form-data" style="position:relative;top:40px;left:140px;font-size:18px;">
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form>
<center><br>
<a href="exp_change_profile.php" class="button1 button5" style="position:relative;top:0px;right: 0px;">CHANGE PROFILE</a></center>
</body>
</html>