<?php
include_once "dbh.php";
session_start();
$id = $_SESSION['id'];
$sid=$_SESSION['user_sid'];
$message=$_POST['message'];
$df='stud_to_exp';

        if($message=='')
			{
				header("Location: private_chat_with.php?id=".$id);
			}
			else
			{
				$sql="INSERT INTO private_chat (exp_id,stud_id,df,message) values('$id','$sid','$df','$message');";
				mysqli_query($conn,$sql);
				header("Location: private_chat_with.php?id=".$id);
			}
?>