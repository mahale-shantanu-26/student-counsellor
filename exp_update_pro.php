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
<link rel="stylesheet" href="css/home_style.css">
<link rel="stylesheet" href="css/body1.css">
</head>
<body><br>
<a href="expert_login.php"><img src='images/logos.jpg' height=79 width=697.5></a>
<a href="exp_logout.php" class="button1 button5" style="position:relative;right: -450px;top: -35px;">LOGOUT</a>
<a href="exp_change_password.php" class="button1 button5" style="position:relative;right: -75px;top: -35px;">CHANGE PASSWORD</a>
<a href="exp_profile.php" class="button1 button5" style="position:relative;right: 300px;top: -35px;">PROFILE</a>
<hr>

<div class="row">


<div class="rightcolumn">
  <div class="card">
  <h3 style='font-family:cambria;'>Update Profile </h3><font face = 'Cambria' size=4>
<?php
if(isset($_POST['ch_name'])){
    echo"<h4 style='font-family:cambria;'>Name </h4>
    <form action='ch/cha_pro1.php' method='post'>
    <input type='text' name='c1' style='width: 500px;
    padding: 10px;
    margin-top: 4px;
    margin-left: 15px;
    font-size: 17px;
    border: 4px 2px;
    border-radius: 4px;
    font-family:cambria;' placeholder='Name...'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type='submit'class='button1 button5' style='font-family:Cambria;'  value='CHANGE NAME'>
    </form>";
}
if(isset($_POST['ch_email'])){
    echo"<h4 style='font-family:cambria;'>Email </h4>
    <form action='ch/cha_pro2.php' method='post'>
    <input type='text' name='c2' style='width: 500px;
    padding: 10px;
    margin-top: 4px;
    margin-left: 15px;
    font-size: 17px;
    border: 4px 2px;
    border-radius: 4px;
    font-family:cambria;' placeholder='Email...'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type='submit'class='button1 button5' style='font-family:Cambria;'  value='CHANGE EMAIL'>
    </form>";
}
if(isset($_POST['ch_lang'])){
    echo"<h4 style='font-family:cambria;'>Language </h4>
    <form action='ch/cha_pro3.php' method='post'>
    <input type='text' name='c3' style='width: 500px;
    padding: 10px;
    margin-top: 4px;
    margin-left: 15px;
    font-size: 17px;
    border: 4px 2px;
    border-radius: 4px;
    font-family:cambria;' placeholder='Ex. Hindi, English etc...'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type='submit'class='button1 button5' style='font-family:Cambria;'  value='CHANGE LANGUAGE'>
    </form>";
}
if(isset($_POST['ch_exp'])){
    echo"<h4 style='font-family:cambria;'>Expertise </h4>
    <form action='ch/cha_pro4.php' method='post'>
    <input type='text' name='c4' style='width: 500px;
    padding: 10px;
    margin-top: 4px;
    margin-left: 15px;
    font-size: 17px;
    border: 4px 2px;
    border-radius: 4px;
    font-family:cambria;' placeholder='Expertise...'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type='submit'class='button1 button5' style='font-family:Cambria;'  value='CHANGE EXPERTISE'>
    </form>";
}
?>

  </div>
</div>
</div>

