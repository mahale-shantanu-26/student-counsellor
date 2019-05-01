<?php
include_once 'dbh.php';
session_start();
    $announcement=$_POST['announcement'];
    $name=$_SESSION['user_name'];
		
		{
			if($announcement=='')
			{
				header("Location: logined.php");
			}
			else
			{
				$sql="INSERT INTO ann (sender,announcement) values('$name','$announcement');";
				mysqli_query($conn,$sql);
				header("Location: logined.php");
			}
		}
?>