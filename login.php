<?php
session_start();
include 'dbh.php';
if(isset($_POST['do_login'])){
	$email=$_POST['email'];
	$pass=$_POST['password'];

	$sql="SELECT * FROM student WHERE email='$email' AND pswd='$pass'";
    $result1=$conn->query($sql);
	if(!$row=mysqli_fetch_assoc($result1)){
		echo 'fail';
	       
		}
	else{
		$_SESSION['user_sid']=$row['sid'];
		$_SESSION['user_name']=$row['name'];
		$_SESSION['user_email']=$row['email'];
		$_SESSION['user_dob']=$row['dob'];
		$_SESSION['user_gender']=$row['gender'];
		$_SESSION['user_pswd']=$row['pswd'];
		$id=$_SESSION['user_sid'];
		$sql="UPDATE `student` SET status ='online' WHERE sid = '$id'";
		$result=$conn->query($sql); 
		echo 'success';
		}

	exit();
    
}

?>

