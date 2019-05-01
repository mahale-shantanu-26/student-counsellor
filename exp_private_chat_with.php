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
<a href="exp_public_chat.php">PUBLIC CHAT</a><br><br>
<a href="exp_private_chat.php"><b>PRIVATE CHAT</b></a><br><br>
<a href="exp_public_share.php">PUBLIC SHARE</a><br><br>
  </div>
<br><br>

  <form method="post" action="exp_private_chat_with_student.php">
<textarea name="message" height="30px"></textarea>
<input type="submit" class="button1 button5" style="position: fixed;left: 70px;bottom: 25px;" value="SEND">
</form>

</div>


<div class="rightcolumn">
 
  <?php
include_once "dbh.php";

$id = $_GET['id'];
$_SESSION['id'] = $id;
$r="SELECT * FROM student where sid='$id'";
$rr=mysqli_query($conn,$r);
$rows = mysqli_fetch_assoc($rr);
echo $rows;
$nn=$rows["name"];
echo '<center><h3>'.$nn.'</h3></center>
<hr><br>';

$cid=$_SESSION['exp_id'];

$r="SELECT * FROM private_chat where stud_id='$id' and exp_id='$cid' ORDER BY message_time DESC";
$rr=mysqli_query($conn,$r);
while($row = mysqli_fetch_assoc($rr)){
    $s=$row["df"];
    $t=$row["message_time"];
    $m=$row["message"];
    if($s=='exp_to_stud'){
      echo '<div class="card" style="background:#2CC24A;padding: 10px;text-align:right;width: 70%;float:right;">
      '.$m.'<br>
      <p align="left">'.$t.'</p>
      </div>';
    }
    else{
      echo '<div class="card" style="background:#ddd;padding: 10px;width: 70%;float:left;">
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

