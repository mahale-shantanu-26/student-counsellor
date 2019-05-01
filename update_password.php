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
  <?php
include 'dbh.php';
    $cid=$_SESSION['user_sid'];
	$current=$_POST['current'];
    $new=$_POST['new'];
    $renew=$_POST['renew'];

    if($new=='' || $current=='' || $renew==''){
        echo '<center><h1>Empty fields not allowed!</h1></center>';
    }
    else{
        if($new!=$renew){
        echo '<center><h1>Retype your new password correctly!</h1></center>';
        }
        else{
            $sql="UPDATE `student` SET pswd ='$new' WHERE sid = '$cid'";
            $result=$conn->query($sql);
            echo '<center><h1>Your password has been changed successfully!</h1></center>';
        }
    }
    

?>
</div>
</div>
</div>
</body>
</html>