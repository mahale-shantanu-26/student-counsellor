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
<link rel="stylesheet" href="css/body1.css">
</head>
<body><br>
<a href="logined.php"><img src='images/logos.jpg' height=79 width=697.5></a>
<a href="logout.php" class="button1 button5" style="position:relative;right: -450px;top: -35px;">LOGOUT</a>
<a href="change_password.php" class="button1 button5" style="position:relative;right: -75px;top: -35px;">CHANGE PASSWORD</a>
<a href="profile.php" class="button1 button5" style="position:relative;right: 300px;top: -35px;">PROFILE</a>
<hr>

<div class="row">


<div class="rightcolumn">
  <div class="card">
  <h3 style='font-family:cambria;'>Update Profile </h3><font face = 'Cambria' size=4>
<?php
if(isset($_POST['ch_name'])){
    echo"<h4 style='font-family:cambria;'>Name </h4>
    <form action='ch/stud_cha_pro1.php' method='post'>
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
    <form action='ch/stud_cha_pro2.php' method='post'>
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
if(isset($_POST['ch_dob'])){
    echo"<h4 style='font-family:cambria;'>Date of Birth </h4>
    <form action='ch/stud_cha_pro3.php' method='post'>
    <input type='date' name='c3' style='width: 500px;
    padding: 10px;
    margin-top: 4px;
    margin-left: 15px;
    font-size: 17px;
    border: 4px 2px;
    border-radius: 4px;
    font-family:cambria;'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type='submit'class='button1 button5' style='font-family:Cambria;'  value='CHANGE DATE OF BIRTH'>
    </form>";
}
if(isset($_POST['ch_gender'])){
    echo"<h4 style='font-family:cambria;'>Gender </h4>
    <form action='ch/stud_cha_pro4.php' method='post'>
    <input type='radio' name='gender' value='male'>Male<br>
    <input type='radio' name='gender' value='female'>Female<br>
    <input type='radio' name='gender' value='others'>Others<br><br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type='submit'class='button1 button5' style='font-family:Cambria;'  value='CHANGE GENDER'>
    </form>";
}
?>

  </div>
</div>
</div>

