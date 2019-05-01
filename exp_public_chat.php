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
<style>
textarea {
  position: fixed;
   resize: none;
   width: 200px;
   padding: 10px;
   font-size: 20px;
   left: 30px;
   bottom: 90px;
   height: 200px;  
}

</style>
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
<a href="exp_public_chat.php"><b>PUBLIC CHAT</b></a><br><br>
<a href="exp_private_chat.php">PRIVATE CHAT</a><br><br>
<a href="exp_public_share.php">PUBLIC SHARE</a><br><br>
  </div>
<br><br>

  <form method="post" action="exp_send_public_share.php">
<textarea name="message" height="30px"></textarea>
<input type="submit" class="button1 button5" style="position: fixed;left: 70px;bottom: 25px;" value="SEND">
</form>

</div>


<div class="rightcolumn">
 
  <?php
include_once "dbh.php";
$r="SELECT * FROM public_chat ORDER BY mtime DESC";
$rr=mysqli_query($conn,$r);
while($row = mysqli_fetch_assoc($rr)){
    $s=$row["sender"];
    $t=$row["mtime"];
    $m=$row["message"];
    if($s==$_SESSION['exp_name']){
      echo '<div class="card" style="background:#2CC24A;padding: 10px;text-align:right;width: 70%;float:right;">
      <b>'.$s.'</b><br><br>
      '.$m.'<br>
      <p align="left">'.$t.'</p>
      </div>';
    }
    else{
      echo '<div class="card" style="background:#ddd;padding: 10px;width: 70%;float:left;">
      <b>'.$s.'</b><br><br>
      '.$m.'<br>
      <p align="right">'.$t.'</p>
      </div>';
    }
  
  }
?>

</div>



</div>
</body>
</html>

