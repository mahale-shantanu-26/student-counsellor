<?php
session_start();
include 'dbh.php';
if(isset($_POST['do_elogin'])){
	$email=$_POST['email'];
	$pass=$_POST['password'];

	$sql="SELECT * FROM expert WHERE email='$email' AND pswd='$pass'";
    $result1=$conn->query($sql);
	if(!$row=mysqli_fetch_assoc($result1)){
		echo 'fail';
	       
		}
	else{
		$_SESSION['exp_id']=$row['cid'];
		$id=$_SESSION['exp_id'];
		$_SESSION['exp_name']=$row['name'];
		$_SESSION['exp_email']=$row['email'];
		$_SESSION['exp_pswd']=$row['pswd'];
		$_SESSION['exp_lang']=$row['lang'];
		$_SESSION['exp_expertise']=$row['expertise'];
		$_SESSION['exp_dp']=$row['profile_pic'];
		$_SESSION['exp_desig']=$row['designation'];
		$sql="UPDATE `expert` SET status ='online' WHERE cid = '$id'";
		$result=$conn->query($sql); 
		echo 'success';
		}

	exit();
    
}

?>




