<?php
include_once 'dbh.php';
session_start();
    $message=$_POST['message'];
    $name=$_SESSION['user_name'];
		
		{
			if($message=='')
			{
				header("Location: public_chat.php");
			}
			else
			{
				$sql="INSERT INTO public_chat (sender,message) values('$name','$message');";
				mysqli_query($conn,$sql);
				header("Location: public_chat.php");
			}
		}
?>