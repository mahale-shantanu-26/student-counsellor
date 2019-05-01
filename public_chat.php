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
<a href="public_chat.php"><b>PUBLIC CHAT</b></a><br><br>
<a href="private_chat.php">PRIVATE CHAT</a><br><br>
<a href="public_share.php">PUBLIC SHARE</a><br><br>
  </div>
<br><br>

  <form method="post" action="send_public_share.php">
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
    if($s==$_SESSION['user_name']){
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

