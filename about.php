<!doctype html>
<html>
<head>
<title>About</title>

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
                <button class="buttonx button5" id="submitohama">Get password</button>
                </p>
            </form>

            <p class="cd-form-bottom-message"><a href="#0">Back to log-in</a></p>
        </div> <!-- cd-reset-password -->
        <a href="#0" class="cd-close-form">Close</a>
    </div> <!-- cd-user-modal-container -->
</div> <!-- cd-user-modal -->

<div class="bg-img">
<div class="centered">ABOUT</div>
</div><br><br>
<div class="para">
At UrCompanion, we provide an online counseling and emotional support platform designed to foster mental wellness. It anonymously connects you with the right expert consisting of psychologists, psychotherapists, counselors, life coaches, career guides and people with rich and deep life experience, who understand you and guide you through completely confidential individual sessions.
<br><br>We are not a medical service or suicide prevention helpline. If you are feeling suicidal, we would suggest you immediately call up a suicide prevention helpline - eg Vandrevala Foundation Helpline - 1 860 266 2345 (24x7), Aasra - +91 22 2754 6669 (24x7).
</div>
</body>
</html>