<!doctype html>
<html>
<head>
<title>Forgot password</title>

<link href='https://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://s3-us-west-2.amazonaws.com/s.cdpn.io/148866/reset.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/home_style.css">

<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="js/index.js"></script>
<script src="js/signup.js"></script>
<script src="js/login.js"></script>

<style>
.bg-img {
  background-image: url("images/back.jpg");
    width: 100%;
  min-height: 200px;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}
.centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  font-size:48px;
}
.para{
    font-size:22px;
    padding-left: 18%;
    padding-right: 18%;
    font-family: Segoe UI;
    line-height: 35px;
    text-align: justify;
}
</style>
</head>
<body>
<a href="home.php"><img src='images/logos.jpg' height=79 width=697.5></a>&nbsp;&nbsp;&nbsp;&nbsp;
<a class="button1 button5" href="about.php" style="position:fixed; margin-top:-10px; top:3.5%;">ABOUT</a>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;
<a class="button1 button5" href="experts.php" style="position:fixed; margin-top:-10px; top:3.5%;">EXPERTS</a>
<nav class="main-nav">
			<ul>
                <!-- inser more links here -->
                <li></li>
				<li><a class="cd-signin button5" href="#0">SIGN IN</a></li>
        		<li><a class="cd-signup button5" href="#0">SIGN UP</a></li>
        		<br>
			</ul>
</nav>

<div class="cd-user-modal"> <!-- this is the entire modal form, including the background -->
    <div class="cd-user-modal-container"> <!-- this is the container wrapper -->
        <ul class="cd-switcher">
            <li><a href="#0">SIGN IN</a></li>
            <li><a href="#0">NEW ACCOUNT</a></li>
        </ul>

        <div id="cd-login"> <!-- log in form -->
            <form class="cd-form" action = "login.php" method="POST" onsubmit="return do_login();">
                <p class="fieldset">
                    <label class="image-replace cd-email">E-mail</label>
                    <input class="full-width has-padding has-border" id="email" type="email" placeholder="E-mail">

                </p>

                <p class="fieldset">
                    <label class="image-replace cd-password" for="signin-password">Password</label>
                    <input class="full-width has-padding has-border" id="pswd" type="password"  placeholder="Password">
                    <a href="#0" class="hide-password">Show</a>
                </p>
                <!--<p class="fieldset">
                    <input type="checkbox" id="remember-me">
                    <label for="remember-me">Remember me</label>
                </p>-->

                <p class="fieldset">
                    <input class="full-width" type="submit" name="submitsu" value="LOGIN">
                </p>
            </form>
            
            <p class="cd-form-bottom-message"><a href="#0">Forgot your password?</a></p>
            <!-- <a href="#0" class="cd-close-form">Close</a> -->
        </div> <!-- cd-login -->

        <div id="cd-signup"> <!-- sign up form -->
            <form class="cd-form" action="signup.php" method="POST" onsubmit="return do_signup();">
                <p class="fieldset">
                    <label class="image-replace cd-username" >Name</label>
                    <input class="full-width has-padding has-border" id="name" type="text" placeholder="Name">
                    
                </p>

                <p class="fieldset">
                    <label class="image-replace cd-username" >Date of Birth</label>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Date of Birth<br><br>
                    <input class="full-width has-padding has-border" id="dob" type="date" placeholder="Date of Birth">
                    
                </p>

                <p class="fieldset">
                    <label class="image-replace cd-username">Gender</label>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input id="gender" type="radio" value="male">&nbsp;&nbsp;Male&nbsp;&nbsp;&nbsp;&nbsp;<br><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input id="gender" type="radio" value="female">&nbsp;&nbsp;Female&nbsp;&nbsp;&nbsp;&nbsp;<br><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input id="gender" type="radio" value="others">&nbsp;&nbsp;Others

                    
                </p>

                <p class="fieldset">
                    <input class="full-width has-padding has-border" id="email1" type="email" placeholder="E-mail">

                </p>

                <p class="fieldset">
                    <label class="image-replace cd-password">Password</label>
                    <input class="full-width has-padding has-border" id="pswd1" type="password"  placeholder="Password">
                    <a href="#0" class="hide-password">Show</a>
                
                </p>

                <!--<p class="fieldset">
                    <input type="checkbox" id="terms">
                    <label for="accept-terms">I agree to the <a href="#0">Terms and Conditions</a></label>
                </p>-->

                <p class="fieldset">
                    <input class="full-width has-padding" id="submitsuke" type="submit" value="CREATE ACCOUNT">
                </p>
            </form>

            <!-- <a href="#0" class="cd-close-form">Close</a> -->
        </div> <!-- cd-signup -->

        <div id="cd-reset-password"> <!-- reset password form -->
            <p class="cd-form-message">Lost your password? Please enter your email address. You will receive your password on your registered email.</p>

            <form class="cd-form" action="forgot.php" method="POST">
                <p class="fieldset">

                    <input class="full-width has-padding has-border" name="reset_email" type="email" placeholder="E-mail">
                    
                </p>

                <p class="fieldset">
                <button class="full-width has-padding" id="submitohama">Get password</button>
                </p>
            </form>

            <p class="cd-form-bottom-message"><a href="#0">Back to log-in</a></p>
        </div> <!-- cd-reset-password -->
        <a href="#0" class="cd-close-form">Close</a>
    </div> <!-- cd-user-modal-container -->
</div> <!-- cd-user-modal -->

<div class="bg-img">
<div class="centered">FORGOT PASSWORD</div>
</div><br><br>
<div class="para">
<?php
include_once 'dbh.php';

    $remail=$_POST['reset_email'];
	//Error handlers
    //Check for empty fields
    if($remail=='')
    {
        echo 'Khali hai be';
    }
			if(!filter_var($remail,FILTER_VALIDATE_EMAIL))
			{
				echo 'email';
			}
			else
			{
                $sql="SELECT * FROM student WHERE email='$remail'";
                $result=$conn->query($sql);
                if(!$row=mysqli_fetch_assoc($result)){
                echo 'does_not_exists';
                }
                else{
                        $missionary=mysqli_query($conn,"SELECT pswd FROM student WHERE email='$remail'");
                        $row = mysqli_fetch_row($missionary);
                        $brazzers=$row[0];
                        $subject = 'Your password for UC';
            
                        require 'PHPMailerAutoload.php';
            
                        $mail = new PHPMailer;
            
                        $mail->isSMTP();                            // Set mailer to use SMTP
                        $mail->Host = 'smtp.gmail.com';             // Specify main and backup SMTP servers
                        $mail->SMTPAuth = true;                     // Enable SMTP authentication
                        $mail->Username = 'Your Email';          // SMTP username
                        $mail->Password = 'Your password'; // SMTP password
                        $mail->SMTPSecure = 'tls';                  // Enable TLS encryption, `ssl` also accepted
                        $mail->Port = 587;                          // TCP port to connect to
            
                        $mail->setFrom('mahaleshantanu4@gmail.com');
                        $mail->addReplyTo('mahaleshantanu4@gmail.com');
                        $mail->addAddress($remail);   // Add a recipient
            
                        $mail->isHTML(true);  // Set email format to HTML
            
                        $bodyContent = $brazzers;
            
                        $mail->Subject = $subject;
                        $mail->Body    = $bodyContent;
            
                        if(!$mail->send()) {
                            echo 'not_sent';
                        } 
                        else {
                            echo 'Your password has been sent to you on your registered Email Address.
                            <br><br>
                            <center><a href="home.php" class="button1 button5">BACK</a></center>';
                        }
			        }
                }


?>
</div>
</body>
</html>
