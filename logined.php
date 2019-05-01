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
<a href="private_chat.php">PRIVATE CHAT</a><br><br>
<a href="public_share.php">PUBLIC SHARE</a><br><br>

  </div>
  
</div>


<div class="rightcolumn">
  <div class="card">
<h1>Welcome <?php echo $_SESSION['user_name'];?>!</h1><br>
<?php
include_once "dbh.php";
$r="SELECT * FROM ann ORDER BY atime DESC";
$rr=mysqli_query($conn,$r);
while($row = mysqli_fetch_assoc($rr)){
    $s=$row["sender"];
    $t=$row["atime"];
    $m=$row["announcement"];
    if($s==$_SESSION['user_name']){
      echo '<div class="card" style="background:#2CC24A;padding: 10px;width: 70%;float:left;">
      <b>'.$s.'</b><br><br>
      '.$m.'<br>
      <p align="right">'.$t.'</p>
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
</div>
<div style="position:fixed; bottom: 465px; font-size:18px; right: 115px;">Make Announcements here:</div>
<form method="post" action="announcement.php">
<textarea name="announcement" height="30px" placeholder="Type here..." style="
  position: fixed;
   resize: none;
   width: 300px;
   padding: 10px;
   font-size: 20px;
   right: 20px;
   bottom: 100px;
   height: 350px;  
"></textarea>
<input type="submit" class="button1 button5" style="position: fixed;right: 110px;bottom: 25px;" value="SEND">
</form>
</body>
</html>