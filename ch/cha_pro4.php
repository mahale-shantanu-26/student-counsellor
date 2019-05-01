<?php
include_once '../dbh.php';
session_start();
if(!isset($_SESSION['exp_email']))
	header("Location: ../experts.php?Can't go back");
?>
<!doctype html>
<html>
<head>
<title>Profile</title>
<link rel="stylesheet" href="../css/home_style.css">
<link rel="stylesheet" href="../css/body1.css">
</head>
<body><br>
<a href="../expert_login.php"><img src='../images/logos.jpg' height=79 width=697.5></a>
<a href="../exp_logout.php" class="button1 button5" style="position:relative;right: -450px;top: -35px;">LOGOUT</a>
<a href="../exp_change_password.php" class="button1 button5" style="position:relative;right: -75px;top: -35px;">CHANGE PASSWORD</a>
<a href="../exp_profile.php" class="button1 button5" style="position:relative;right: 300px;top: -35px;">PROFILE</a>
<hr>

<div class="row">


<div class="rightcolumn">
  <div class="card">
  <h3 style='font-family:cambria;'>Update Profile </h3><font face = 'Cambria' size=4>
<?php
$id=$_SESSION['exp_id'];
$exp=$_POST['c4'];
if($exp){
    $sql = "UPDATE expert SET expertise='$exp' WHERE cid ='$id' ";
    mysqli_query($conn,$sql);
    $_SESSION['exp_expertise']=$exp;
    echo "<h4 style='font-family:cambria;'>Your expertise has been changed! </h4>";
}
else {
    echo "<h4 style='font-family:cambria;'>Your expertise could not be changed! </h4>";
}
?>

  </div>
</div>
</div>

