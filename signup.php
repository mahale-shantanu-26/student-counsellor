<?php
include_once 'dbh.php';

if (isset($_POST['do_signup']))
{
    $name=$_POST['name'];
    $dob=$_POST['dob'];
    $gender=$_POST['gender'];
    $email=$_POST['email'];
	$password=$_POST['password'];
	$check=$_POST['terms']; 
	
	//Error handlers
	//Check for empty fields
		if(!preg_match("/^[a-zA-Z]*$/",$name))
		{
			echo 'name';
		}
		else
		{
			if(!filter_var($email,FILTER_VALIDATE_EMAIL))
			{
				echo 'email';
			}
			else
			{
				$sql="SELECT * FROM student WHERE email='$email'";
				$result=mysqli_query($conn,$sql);
				$resultcheck=mysqli_num_rows($result);
				if($resultcheck>0)
				{
					echo 'emailexists';
				}
				else
				{
					$sql="INSERT INTO student (name,email,pswd,dob,gender) values('$name','$email','$password','$dob','$gender');";
				    mysqli_query($conn,$sql);
						echo 'success';
				}
			}
		}
}
?>