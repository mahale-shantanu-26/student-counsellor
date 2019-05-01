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
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  padding: 10px;
  text-align: center;
  border-bottom: 1px solid #ddd;
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
<a href="modify.php">MODIFY SCHEDULE</a><br><br>
<a href="view.php">VIEW SCHEDULE</a><br><br>
<a href="exp_public_chat.php">PUBLIC CHAT</a><br><br>
<a href="exp_private_chat.php"><b>PRIVATE CHAT</b></a><br><br>
<a href="exp_public_share.php">PUBLIC SHARE</a><br><br>

  </div>
  
</div>


<div class="rightcolumn">
  <div class="card">
  <center><h3>All Students</h3></center>
<hr><br>
<table>
    <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Status</th>
    <th></th>
    </tr>
<?php
include 'dbh.php';
$r="SELECT * FROM student";
$rr=mysqli_query($conn,$r);
while($row = mysqli_fetch_assoc($rr)){
    $ii=$row["sid"];
    $nn=$row["name"];
    $ss=$row["status"];
    echo '
    <tr>
    <td>'.$ii.'</td>
    <td>'.$nn.'</td>
    <td>';
    if($ss=='online'){
      echo '&#9989 ';
    }
    echo $ss.'</td>
    <td><button class="buttonx button5" id="'.$ii.'" onClick="reply_delete(this.id)">START CHAT</button></td>
    </tr>
    ';
  }
?>
</table>
  </div>
</div>
</div>
</body>
<script>
function reply_delete(val)
{
    var javascriptVariable = val;
  window.location.href = "exp_private_chat_with.php?id=" + javascriptVariable; 
}
</script>
</html>