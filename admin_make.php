<!DOCTYPE HTML>
<html>
<head>
<title>Administrator</title>
<link rel="stylesheet" href="css/home_style.css">
</head>
<body>
<img src="images/logos.jpg" height=79 width=697.5>
<hr><center>
<?php
include 'dbh.php';
    $name=$_POST['name'];
    $email=$_POST['email'];
    $pass=$_POST['password'];
    $lang=$_POST['language'];
    $exp=$_POST['expertise'];
	$desig=$_POST['designation'];
	$status='offline';
	$dp='images/dpx.png';
	
	if(empty($name)||empty($email)||empty($pass)||empty($lang)||empty($exp)||empty($desig)){
		echo '<h1>Empty fields are not allowed!</h1>';
	}
	else{
		if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
			echo '<h1>Invalid Email!</h1>';
		}
		else{
			$sql="SELECT * FROM expert WHERE email='$email'";
				$result=mysqli_query($conn,$sql);
				$resultcheck=mysqli_num_rows($result);
				if($resultcheck>0)
				{
					echo '<h1>An expert already exists by the given email address!</h1>
			<a href="admin_work.php" class="button1 button5">BACK</a>';
				}
				else
				{
					$sql="INSERT INTO expert (name,email,pswd,lang,expertise,designation,status,profile_pic) values('$name','$email','$pass','$lang','$exp','$desig','$status','$dp');";
			mysqli_query($conn, $sql);
			echo '<h1>Expert added to the database!</h1>
			<a href="admin_work.php" class="button1 button5">BACK</a>';
			$sql1="SELECT * from expert where name='$name' and email='$email'";
			$rr=mysqli_query($conn, $sql1);
			$row = mysqli_fetch_assoc($rr);
			$cid=$row['cid'];
			$sql3="CREATE TABLE `".$cid."` (
				`day` INT(1) not null primary key,
				`t8:00AM_10:00AM` INT(1) not null, 
				`t10:00AM_12:00PM` INT(1) not null,
				`t12:00PM_2:00PM` INT(1) not null,
				`t3:00PM_5:00PM` INT(1) not null,
				`t5:00PM_7:00PM` INT(1) not null,
				`t7:00PM_9:00PM` INT(1) not null,
				`t10:00PM_12:00AM` INT(1) not null,
				`t12:00AM_2:00AM` INT(1) not null,
				`t2:00AM_4:00AM` INT(1) not null,
				`t4:00AM_6:00AM` INT(1) not null,
				`t6:00AM_8:00AM` INT(1) not null)
			";
			if ($conn->query($sql3) === TRUE) 
			{
				echo "<br><h1>Schedule created successfully</h1>";
			} else 
			{
				echo "Error creating table: " . $conn->error;
			}
			
                        $subject = 'Welcome Expert!';
            
                        require 'PHPMailerAutoload.php';
            
                        $mail = new PHPMailer;
            
                        $mail->isSMTP();                            // Set mailer to use SMTP
                        $mail->Host = 'smtp.gmail.com';             // Specify main and backup SMTP servers
                        $mail->SMTPAuth = true;                     // Enable SMTP authentication
                        $mail->Username = 'mahaleshantanu4@gmail.com';          // SMTP username
                        $mail->Password = 'axiom3157'; // SMTP password
                        $mail->SMTPSecure = 'tls';                  // Enable TLS encryption, `ssl` also accepted
                        $mail->Port = 587;                          // TCP port to connect to
            
                        $mail->setFrom('mahaleshantanu4@gmail.com');
                        $mail->addReplyTo('mahaleshantanu4@gmail.com');
                        $mail->addAddress($email);   // Add a recipient
            
                        $mail->isHTML(true);  // Set email format to HTML
            
						$bodyContent = 'Welcome at UrCompanion, you are now an authorised expert. Your details:'
						.'<br> Name: '.$name
						."<br> Email: ".$email
						."<br> Password: ".$pass
						."<br> Language: ".$lang
						."<br> Expertise: ".$exp
						."<br> Designation: ".$desig
						."<br><br>Regards
						<br>Team UrCompanion";
            
                        $mail->Subject = $subject;
                        $mail->Body    = $bodyContent;
            
                        if(!$mail->send()) {
                            echo 'not_sent';
                        } 
                        else {
                            echo '<h2>A website has sent the email.</h2>
							<br><br>';
						}
				}

			

		}

	}
?></center>
</body>
</html>