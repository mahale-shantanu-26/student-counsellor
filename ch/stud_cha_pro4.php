<?php
include_once '../dbh.php';
session_start();
if(!isset($_SESSION['user_email']))
	header("Location: ../home.php?Can't go back");
?>
<!doctype html>
<html>
<head>
<title>Profile</title>
<link rel="stylesheet" href="../css/home_style.css">
<link rel="stylesheet" href="../css/body1.css">
</head>
<body><br>
<a href="../logined.php"><img src='../images/logos.jpg' height=79 width=697.5></a>
<a href="../logout.php" class="button1 button5" style="position:relative;right: -450px;top: -35px;">LOGOUT</a>
<a href="../change_password.php" class="button1 button5" style="position:relative;right: -75px;top: -35px;">CHANGE PASSWORD</a>
<a href="../profile.php" class="button1 button5" style="position:relative;right: 300px;top: -35px;">PROFILE</a>
<hr>

<div class="row">


<div class="rightcolumn">
  <div class="card">
  <h3 style='font-family:cambria;'>Update Profile </h3><font face = 'Cambria' size=4>
<?php
$id=$_SESSION['user_sid'];
$gender=$_POST['gender'];
if($gender){
    $sql = "UPDATE student SET gender='$gender' WHERE sid ='$id' ";
    mysqli_query($conn,$sql);
    $_SESSION['user_gender']=$gender;
    echo "<h4 style='font-family:cambria;'>Your gender has been changed! </h4>";
}
else {
    echo "<h4 style='font-family:cambria;'>Your gender could not be changed! </h4>";
}
?>

  </div>
</div>
</div>

