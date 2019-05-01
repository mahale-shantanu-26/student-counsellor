<?php
include_once 'dbh.php';
session_start();
    $announcement=$_POST['announcement'];
    $name=$_SESSION['exp_name'];
		
		{
			if($announcement=='')
			{
				header("Location: expert_login.php");
			}
			else
			{
				$sql="INSERT INTO ann (sender,announcement) values('$name','$announcement');";
				mysqli_query($conn,$sql);
				header("Location: expert_login.php");
			}
		}
?>