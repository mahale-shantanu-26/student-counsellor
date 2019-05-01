<?php
include_once 'dbh.php';
session_start();
if(!isset($_SESSION['user_email']))
	header("Location: home.php?Can't go back");
?>
<!doctype html>
<html>
<head>
<title>Welcome Student!</title>
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
.container2 {
  position:fixed;
  bottom:0;
  padding: 53px;
  background-color: #fff;
  text-align:center;
  border: 1px solid #aaa;
  width:100%;
  left:0;
}
.colop{
  max-height: 600px;
  height: 100%;
  overflow: auto;
}

</style>
</head>
<body><br>
<a href="logined.php"><img src='images/logos.jpg' height=79 width=697.5></a>
<a href="logout.php" class="button1 button5" style="position:relative;right: -450px;top: -35px;">LOGOUT</a>
<a href="change_password.php" class="button1 button5" style="position:relative;right: -75px;top: -35px;">CHANGE PASSWORD</a>
<a href="profile.php" class="button1 button5" style="position:relative;right: 300px;top: -35px;">PROFILE</a>

<hr><br>
<div class="row">

<div class="leftcolumn">
  <div class="card">
<a href="public_chat.php">PUBLIC CHAT</a><br><br>
<a href="private_chat.php"><b>PRIVATE CHAT</b></a><br><br>
<a href="public_share.php">PUBLIC SHARE</a><br><br>
  </div>
<br><br>

  <form method="post" action="private_chat_with_expert.php">
<textarea name="message" height="30px"></textarea>
<input type="submit" class="button1 button5" style="position: fixed;left: 70px;bottom: 25px;" value="SEND">
</form>

</div>


<div class="rightcolumn">
 
  <?php
include_once "dbh.php";

$id = $_GET['id'];
$_SESSION['id'] = $id;
$r="SELECT * FROM expert where cid='$id'";
$rr=mysqli_query($conn,$r);
$rows = mysqli_fetch_assoc($rr);
$nn=$rows["name"];
echo '<center><h3>'.$nn.'</h3></center>
<hr><br>';

$sid=$_SESSION['user_sid'];

$r="SELECT * FROM private_chat where exp_id='$id' and stud_id='$sid' ORDER BY message_time DESC";
$rr=mysqli_query($conn,$r);
while($row = mysqli_fetch_assoc($rr)){
    $s=$row["df"];
    $t=$row["message_time"];
    $m=$row["message"];
    if($s=='stud_to_exp'){
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

