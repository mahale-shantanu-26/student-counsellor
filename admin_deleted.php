<!DOCTYPE HTML>
<html>
<head>
<title>Administrator</title>
<link rel="stylesheet" href="css/home_style.css">
</head>
<body>
<img src="images/logos.jpg" height=79 width=697.5>
<hr>
<?php
include 'dbh.php';
$id = $_GET['id'];
	$sql1="DROP TABLE `$id`";
	mysqli_query($conn, $sql1);
	$sql="DELETE FROM expert WHERE cid='$id'";
	if(mysqli_query($conn, $sql)){
		echo '<center><h1>The expert has been removed from the site.</h1>
		<a href="admin_work.php" class="button1 button5">BACK</a>
		</center>';
		}
	else{
		echo 'fail';
		}
	exit();
?>

</body>
</html>
