<?php
include_once "dbh.php";
session_start();
$id = $_SESSION['id'];
$cid=$_SESSION['exp_id'];
$message=$_POST['message'];
$df='exp_to_stud';

        if($message=='')
			{
				header("Location: exp_private_chat_with.php?id=".$id);
			}
			else
			{
				$sql="INSERT INTO private_chat (exp_id,stud_id,df,message) values('$cid','$id','$df','$message');";
				mysqli_query($conn,$sql);
				header("Location: exp_private_chat_with.php?id=".$id);
			}
?>