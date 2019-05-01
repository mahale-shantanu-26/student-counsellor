<?php
include 'dbh.php';

$id = $_GET['id'];
$r="SELECT * FROM expert where cid='$id'";
$rr=mysqli_query($conn,$r);
$row = mysqli_fetch_assoc($rr);
$nn=$row["name"];
echo '
<!DOCTYPE HTML>
<html>
<head>
<title>Administrator</title>
<link rel="stylesheet" href="css/home_style.css">
</head>
<body>
<img src="images/logos.jpg" height=79 width=697.5>
<hr>
<center><h1>Are you sure you want to remove '.$nn.' ?</h1>
<a href="admin_deleted.php?id='.$id.'" class="button1 button5">YES</a>
<a href="admin_work.php" class="button1 button5">NO</a>
</center>
</body>
</html>
';

?>
