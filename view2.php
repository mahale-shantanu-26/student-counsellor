<?php
include 'dbh.php';

$id = $_GET['id'];
$res=(string)$id;
?>

<!doctype html>
<html>
<head>
<title>Modify</title>
<link href='https://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="amazonaws.css">
<link rel="stylesheet" href="cloudflare.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/home_style.css">

<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="js/index.js"></script>
<script src="js/signup.js"></script>
<script src="js/login.js"></script>
</head>
<body>
<a href="home.php"><img src='images/logos.jpg' height=79 width=697.5 style="margin-top:13px; top:0%;"></a>&nbsp;&nbsp;&nbsp;&nbsp;
<a class="button1 button5" href="about.php" style="position:fixed; margin-top:13px; top:3.5%;">ABOUT</a>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;
<a class="button1 button5" href="experts.php" style="position:fixed; margin-top:13px; top:3.5%;">EXPERTS</a>
<nav class="main-nav">
			<ul>
                <!-- inser more links here -->
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
            <p class="cd-form-message">Lost your password? Please enter your email address. You will receive a link to create a new password.</p>

            <form class="cd-form">
                <p class="fieldset">
                    <label class="image-replace cd-email" for="reset-email">E-mail</label>
                    <input class="full-width has-padding has-border" id="reset-email" type="email" placeholder="E-mail">
                    <span class="cd-error-message">Error message here!</span>
                </p>

                <p class="fieldset">
                    <input class="full-width has-padding" type="submit" value="Reset password">
                </p>
            </form>

            <p class="cd-form-bottom-message"><a href="#0">Back to log-in</a></p>
        </div> <!-- cd-reset-password -->
        <a href="#0" class="cd-close-form">Close</a>
    </div> <!-- cd-user-modal-container -->
</div> <!-- cd-user-modal -->

    <table align=center cellspacing=0 cellpadding=1 border="1" width="95%" bordercolor="#000000">
		
    <tr align=center>
		    <td width="65" bgcolor=#CCCCFF height="100"><b>Schedule</b></td>
		    <td width="90" bgcolor=#CCCCFF height="100"><b>08:00 AM<br>to<br>10:00 AM</b></td>
		    <td width="90" bgcolor=#CCCCFF height="100"><b>10:00 AM<br>to<br>12:00 PM</b></td>
		    <td width="60" bgcolor=#CCCCFF height="100"><b>12:00 PM<br>to<br>02:00 PM</b></td>
            <td width="30" rowspan="9" bgcolor=#C0C0C0><b>L<br>U<br>N<br>C<br>H</b></td>
		    <td width="60" bgcolor=#CCCCFF height="100"><b>03:00 PM<br>to<br>05:00 PM</b></td>
		    <td width="60" bgcolor=#CCCCFF height="100"><b>05:00 PM<br>to<br>07:00 PM</b></td>
		    <td width="90" bgcolor=#CCCCFF height="100"><b>07:00 PM<br>to<br>09:00 PM</b></td>
            <td width="30" rowspan="9" bgcolor=#C0C0C0><b>D<br>I<br>N<br>N<br>E<br>R</b></td>
		    <td width="90" bgcolor=#CCCCFF height="100"><b>10:00 PM<br>to<br>12:00 AM</b></td>
		    <td width="60" bgcolor=#CCCCFF height="100"><b>12:00 AM<br>to<br>02:00 AM</b></td>
		    <td width="60" bgcolor=#CCCCFF height="100"><b>02:00 AM<br>to<br>04:00 AM</b></td>
		    <td width="60" bgcolor=#CCCCFF height="100"><b>04:00 AM<br>to<br>06:00 AM</b></td>
            <td width="60" bgcolor=#CCCCFF height="100"><b>06:00 AM<br>to<br>08:00 AM</b></td>
		</tr>
        <tr align=center height="25">
		    <td bgcolor="#CCCCFF"><b>MON</b></td>
		    <td bgcolor="#FFFFCC"><?php $tick=mysqli_query($conn,"SELECT `t8:00AM_10:00AM` FROM `".$res."` WHERE `day`=1");$row = mysqli_fetch_row($tick);$ser=$row[0];if($ser){echo '<p>&#9989</p>';}?>  </td>
		    <td bgcolor="#FFFFCC"><?php $tick=mysqli_query($conn,"SELECT `t10:00AM_12:00PM` FROM `".$res."` WHERE `day`=1");$row = mysqli_fetch_row($tick);$ser=$row[0];if($ser){echo '<p>&#9989</p>';}?> </td>
		    <td bgcolor="#FFFFCC"><?php $tick=mysqli_query($conn,"SELECT `t12:00PM_2:00PM` FROM `".$res."` WHERE `day`=1");$row = mysqli_fetch_row($tick);$ser=$row[0];if($ser){echo '<p>&#9989</p>';}?> </td>
            <td bgcolor="#FFFFCC"><?php $tick=mysqli_query($conn,"SELECT `t3:00PM_5:00PM` FROM `".$res."` WHERE `day`=1");$row = mysqli_fetch_row($tick);$ser=$row[0];if($ser){echo '<p>&#9989</p>';}?></td>
            <td bgcolor="#FFFFCC"><?php $tick=mysqli_query($conn,"SELECT `t5:00PM_7:00PM` FROM `".$res."` WHERE `day`=1");$row = mysqli_fetch_row($tick);$ser=$row[0];if($ser){echo '<p>&#9989</p>';}?> </td>
            <td bgcolor="#FFFFCC"><?php $tick=mysqli_query($conn,"SELECT `t7:00PM_9:00PM` FROM `".$res."` WHERE `day`=1");$row = mysqli_fetch_row($tick);$ser=$row[0];if($ser){echo '<p>&#9989</p>';}?>   </td>
            <td bgcolor="#FFFFCC"><?php $tick=mysqli_query($conn,"SELECT `t10:00PM_12:00AM` FROM `".$res."` WHERE `day`=1");$row = mysqli_fetch_row($tick);$ser=$row[0];if($ser){echo '<p>&#9989</p>';}?></td>
            <td bgcolor="#FFFFCC"><?php $tick=mysqli_query($conn,"SELECT `t12:00AM_2:00AM` FROM `".$res."` WHERE `day`=1");$row = mysqli_fetch_row($tick);$ser=$row[0];if($ser){echo '<p>&#9989</p>';}?> </td>
            <td bgcolor="#FFFFCC"><?php $tick=mysqli_query($conn,"SELECT `t2:00AM_4:00AM` FROM `".$res."` WHERE `day`=1");$row = mysqli_fetch_row($tick);$ser=$row[0];if($ser){echo '<p>&#9989</p>';}?> </td>
            <td bgcolor="#FFFFCC"><?php $tick=mysqli_query($conn,"SELECT `t4:00AM_6:00AM` FROM `".$res."` WHERE `day`=1");$row = mysqli_fetch_row($tick);$ser=$row[0];if($ser){echo '<p>&#9989</p>';}?></td>
            <td bgcolor="#FFFFCC"><?php $tick=mysqli_query($conn,"SELECT `t6:00AM_8:00AM` FROM `".$res."` WHERE `day`=1");$row = mysqli_fetch_row($tick);$ser=$row[0];if($ser){echo '<p>&#9989</p>';}?></td>
        </tr>
		  
		<tr align=center height="25">
		    <td bgcolor="#CCCCFF"><b>TUE</b></td>
		    <td bgcolor="#FFFFCC"><?php $tick=mysqli_query($conn,"SELECT `t8:00AM_10:00AM` FROM `".$res."` WHERE `day`=2");$row = mysqli_fetch_row($tick);$ser=$row[0];if($ser){echo '<p>&#9989</p>';}?></td>
		    <td bgcolor="#FFFFCC"><?php $tick=mysqli_query($conn,"SELECT `t10:00AM_12:00PM` FROM `".$res."` WHERE `day`=2");$row = mysqli_fetch_row($tick);$ser=$row[0];if($ser){echo '<p>&#9989</p>';}?>  </td>
		    <td bgcolor="#FFFFCC"><?php $tick=mysqli_query($conn,"SELECT `t12:00PM_2:00PM` FROM `".$res."` WHERE `day`=2");$row = mysqli_fetch_row($tick);$ser=$row[0];if($ser){echo '<p>&#9989</p>';}?> </td> 
            <td bgcolor="#FFFFCC"><?php $tick=mysqli_query($conn,"SELECT `t3:00PM_5:00PM` FROM `".$res."` WHERE `day`=2");$row = mysqli_fetch_row($tick);$ser=$row[0];if($ser){echo '<p>&#9989</p>';}?></td>
            <td bgcolor="#FFFFCC"><?php $tick=mysqli_query($conn,"SELECT `t5:00PM_7:00PM` FROM `".$res."` WHERE `day`=2");$row = mysqli_fetch_row($tick);$ser=$row[0];if($ser){echo '<p>&#9989</p>';}?></td>
            <td bgcolor="#FFFFCC"><?php $tick=mysqli_query($conn,"SELECT `t7:00PM_9:00PM` FROM `".$res."` WHERE `day`=2");$row = mysqli_fetch_row($tick);$ser=$row[0];if($ser){echo '<p>&#9989</p>';}?></td>
            <td bgcolor="#FFFFCC"><?php $tick=mysqli_query($conn,"SELECT `t10:00PM_12:00AM` FROM `".$res."` WHERE `day`=2");$row = mysqli_fetch_row($tick);$ser=$row[0];if($ser){echo '<p>&#9989</p>';}?></td>
            <td bgcolor="#FFFFCC"><?php $tick=mysqli_query($conn,"SELECT `t12:00AM_2:00AM` FROM `".$res."` WHERE `day`=2");$row = mysqli_fetch_row($tick);$ser=$row[0];if($ser){echo '<p>&#9989</p>';}?></td>
            <td bgcolor="#FFFFCC"><?php $tick=mysqli_query($conn,"SELECT `t2:00AM_4:00AM` FROM `".$res."` WHERE `day`=2");$row = mysqli_fetch_row($tick);$ser=$row[0];if($ser){echo '<p>&#9989</p>';}?></td>
            <td bgcolor="#FFFFCC"><?php $tick=mysqli_query($conn,"SELECT `t4:00AM_6:00AM` FROM `".$res."` WHERE `day`=2");$row = mysqli_fetch_row($tick);$ser=$row[0];if($ser){echo '<p>&#9989</p>';}?></td>
            <td bgcolor="#FFFFCC"><?php $tick=mysqli_query($conn,"SELECT `t6:00AM_8:00AM` FROM `".$res."` WHERE `day`=2");$row = mysqli_fetch_row($tick);$ser=$row[0];if($ser){echo '<p>&#9989</p>';}?></td>
        </tr>
		
		<tr align=center height="25">
		    <td bgcolor="#CCCCFF"><b>WED</b></td>
		    <td bgcolor="#FFFFCC"><?php $tick=mysqli_query($conn,"SELECT `t8:00AM_10:00AM` FROM `".$res."` WHERE `day`=3");$row = mysqli_fetch_row($tick);$ser=$row[0];if($ser){echo '<p>&#9989</p>';}?></td>
		    <td bgcolor="#FFFFCC"><?php $tick=mysqli_query($conn,"SELECT `t10:00AM_12:00PM` FROM `".$res."` WHERE `day`=3");$row = mysqli_fetch_row($tick);$ser=$row[0];if($ser){echo '<p>&#9989</p>';}?></td>
		    <td bgcolor="#FFFFCC"><?php $tick=mysqli_query($conn,"SELECT `t12:00PM_2:00PM` FROM `".$res."` WHERE `day`=3");$row = mysqli_fetch_row($tick);$ser=$row[0];if($ser){echo '<p>&#9989</p>';}?> </td>
            <td bgcolor="#FFFFCC"><?php $tick=mysqli_query($conn,"SELECT `t3:00PM_5:00PM` FROM `".$res."` WHERE `day`=3");$row = mysqli_fetch_row($tick);$ser=$row[0];if($ser){echo '<p>&#9989</p>';}?></td>
            <td bgcolor="#FFFFCC"><?php $tick=mysqli_query($conn,"SELECT `t5:00PM_7:00PM` FROM `".$res."` WHERE `day`=3");$row = mysqli_fetch_row($tick);$ser=$row[0];if($ser){echo '<p>&#9989</p>';}?></td>
            <td bgcolor="#FFFFCC"><?php $tick=mysqli_query($conn,"SELECT `t7:00PM_9:00PM` FROM `".$res."` WHERE `day`=3");$row = mysqli_fetch_row($tick);$ser=$row[0];if($ser){echo '<p>&#9989</p>';}?></td>
            <td bgcolor="#FFFFCC"><?php $tick=mysqli_query($conn,"SELECT `t10:00PM_12:00AM` FROM `".$res."` WHERE `day`=3");$row = mysqli_fetch_row($tick);$ser=$row[0];if($ser){echo '<p>&#9989</p>';}?></td>
            <td bgcolor="#FFFFCC"><?php $tick=mysqli_query($conn,"SELECT `t12:00AM_2:00AM` FROM `".$res."` WHERE `day`=3");$row = mysqli_fetch_row($tick);$ser=$row[0];if($ser){echo '<p>&#9989</p>';}?></td>
            <td bgcolor="#FFFFCC"><?php $tick=mysqli_query($conn,"SELECT `t2:00AM_4:00AM` FROM `".$res."` WHERE `day`=3");$row = mysqli_fetch_row($tick);$ser=$row[0];if($ser){echo '<p>&#9989</p>';}?></td>
            <td bgcolor="#FFFFCC"><?php $tick=mysqli_query($conn,"SELECT `t4:00AM_6:00AM` FROM `".$res."` WHERE `day`=3");$row = mysqli_fetch_row($tick);$ser=$row[0];if($ser){echo '<p>&#9989</p>';}?></td>
            <td bgcolor="#FFFFCC"><?php $tick=mysqli_query($conn,"SELECT `t6:00AM_8:00AM` FROM `".$res."` WHERE `day`=3");$row = mysqli_fetch_row($tick);$ser=$row[0];if($ser){echo '<p>&#9989</p>';}?></td>
        </tr>
		
		<tr align=center height="25">
		    <td bgcolor="#CCCCFF"><b>THU</b></td>
		    <td bgcolor="#FFFFCC"><?php $tick=mysqli_query($conn,"SELECT `t8:00AM_10:00AM` FROM `".$res."` WHERE `day`=4");$row = mysqli_fetch_row($tick);$ser=$row[0];if($ser){echo '<p>&#9989</p>';}?></td>
		    <td bgcolor="#FFFFCC"><?php $tick=mysqli_query($conn,"SELECT `t10:00AM_12:00PM` FROM `".$res."` WHERE `day`=4");$row = mysqli_fetch_row($tick);$ser=$row[0];if($ser){echo '<p>&#9989</p>';}?></td>
		    <td bgcolor="#FFFFCC"><?php $tick=mysqli_query($conn,"SELECT `t12:00PM_2:00PM` FROM `".$res."` WHERE `day`=4");$row = mysqli_fetch_row($tick);$ser=$row[0];if($ser){echo '<p>&#9989</p>';}?> </td>
            <td bgcolor="#FFFFCC"><?php $tick=mysqli_query($conn,"SELECT `t3:00PM_5:00PM` FROM `".$res."` WHERE `day`=4");$row = mysqli_fetch_row($tick);$ser=$row[0];if($ser){echo '<p>&#9989</p>';}?></td>
            <td bgcolor="#FFFFCC"><?php $tick=mysqli_query($conn,"SELECT `t5:00PM_7:00PM` FROM `".$res."` WHERE `day`=4");$row = mysqli_fetch_row($tick);$ser=$row[0];if($ser){echo '<p>&#9989</p>';}?></td>
            <td bgcolor="#FFFFCC"><?php $tick=mysqli_query($conn,"SELECT `t7:00PM_9:00PM` FROM `".$res."` WHERE `day`=4");$row = mysqli_fetch_row($tick);$ser=$row[0];if($ser){echo '<p>&#9989</p>';}?></td>
            <td bgcolor="#FFFFCC"><?php $tick=mysqli_query($conn,"SELECT `t10:00PM_12:00AM` FROM `".$res."` WHERE `day`=4");$row = mysqli_fetch_row($tick);$ser=$row[0];if($ser){echo '<p>&#9989</p>';}?></td>
            <td bgcolor="#FFFFCC"><?php $tick=mysqli_query($conn,"SELECT `t12:00AM_2:00AM` FROM `".$res."` WHERE `day`=4");$row = mysqli_fetch_row($tick);$ser=$row[0];if($ser){echo '<p>&#9989</p>';}?></td>
            <td bgcolor="#FFFFCC"><?php $tick=mysqli_query($conn,"SELECT `t2:00AM_4:00AM` FROM `".$res."` WHERE `day`=4");$row = mysqli_fetch_row($tick);$ser=$row[0];if($ser){echo '<p>&#9989</p>';}?></td>
            <td bgcolor="#FFFFCC"><?php $tick=mysqli_query($conn,"SELECT `t4:00AM_6:00AM` FROM `".$res."` WHERE `day`=4");$row = mysqli_fetch_row($tick);$ser=$row[0];if($ser){echo '<p>&#9989</p>';}?></td>
            <td bgcolor="#FFFFCC"><?php $tick=mysqli_query($conn,"SELECT `t6:00AM_8:00AM` FROM `".$res."` WHERE `day`=4");$row = mysqli_fetch_row($tick);$ser=$row[0];if($ser){echo '<p>&#9989</p>';}?></td>
        </tr>
		
		<tr align=center height="25">
		    <td bgcolor="#CCCCFF"><b>FRI</td>
		    <td bgcolor="#FFFFCC"><?php $tick=mysqli_query($conn,"SELECT `t8:00AM_10:00AM` FROM `".$res."` WHERE `day`=5");$row = mysqli_fetch_row($tick);$ser=$row[0];if($ser){echo '<p>&#9989</p>';}?></td>
		    <td bgcolor="#FFFFCC"><?php $tick=mysqli_query($conn,"SELECT `t10:00AM_12:00PM` FROM `".$res."` WHERE `day`=5");$row = mysqli_fetch_row($tick);$ser=$row[0];if($ser){echo '<p>&#9989</p>';}?></td>
		    <td bgcolor="#FFFFCC"><?php $tick=mysqli_query($conn,"SELECT `t12:00PM_2:00PM` FROM `".$res."` WHERE `day`=5");$row = mysqli_fetch_row($tick);$ser=$row[0];if($ser){echo '<p>&#9989</p>';}?> </td>
            <td bgcolor="#FFFFCC"><?php $tick=mysqli_query($conn,"SELECT `t3:00PM_5:00PM` FROM `".$res."` WHERE `day`=5");$row = mysqli_fetch_row($tick);$ser=$row[0];if($ser){echo '<p>&#9989</p>';}?></td>
            <td bgcolor="#FFFFCC"><?php $tick=mysqli_query($conn,"SELECT `t5:00PM_7:00PM` FROM `".$res."` WHERE `day`=5");$row = mysqli_fetch_row($tick);$ser=$row[0];if($ser){echo '<p>&#9989</p>';}?></td>
            <td bgcolor="#FFFFCC"><?php $tick=mysqli_query($conn,"SELECT `t7:00PM_9:00PM` FROM `".$res."` WHERE `day`=5");$row = mysqli_fetch_row($tick);$ser=$row[0];if($ser){echo '<p>&#9989</p>';}?></td>
            <td bgcolor="#FFFFCC"><?php $tick=mysqli_query($conn,"SELECT `t10:00PM_12:00AM` FROM `".$res."` WHERE `day`=5");$row = mysqli_fetch_row($tick);$ser=$row[0];if($ser){echo '<p>&#9989</p>';}?></td>
            <td bgcolor="#FFFFCC"><?php $tick=mysqli_query($conn,"SELECT `t12:00AM_2:00AM` FROM `".$res."` WHERE `day`=5");$row = mysqli_fetch_row($tick);$ser=$row[0];if($ser){echo '<p>&#9989</p>';}?></td>
            <td bgcolor="#FFFFCC"><?php $tick=mysqli_query($conn,"SELECT `t2:00AM_4:00AM` FROM `".$res."` WHERE `day`=5");$row = mysqli_fetch_row($tick);$ser=$row[0];if($ser){echo '<p>&#9989</p>';}?></td>
            <td bgcolor="#FFFFCC"><?php $tick=mysqli_query($conn,"SELECT `t4:00AM_6:00AM` FROM `".$res."` WHERE `day`=5");$row = mysqli_fetch_row($tick);$ser=$row[0];if($ser){echo '<p>&#9989</p>';}?></td>
            <td bgcolor="#FFFFCC"><?php $tick=mysqli_query($conn,"SELECT `t6:00AM_8:00AM` FROM `".$res."` WHERE `day`=5");$row = mysqli_fetch_row($tick);$ser=$row[0];if($ser){echo '<p>&#9989</p>';}?></td>
        </tr>
		
		<tr align=center height="25">
		    <td bgcolor="#CCCCFF"><b>SAT</b></td>
		    <td bgcolor="#FFFFCC"><?php $tick=mysqli_query($conn,"SELECT `t8:00AM_10:00AM` FROM `".$res."` WHERE `day`=6");$row = mysqli_fetch_row($tick);$ser=$row[0];if($ser){echo '<p>&#9989</p>';}?></td>
		    <td bgcolor="#FFFFCC"><?php $tick=mysqli_query($conn,"SELECT `t10:00AM_12:00PM` FROM `".$res."` WHERE `day`=6");$row = mysqli_fetch_row($tick);$ser=$row[0];if($ser){echo '<p>&#9989</p>';}?></td>
		    <td bgcolor="#FFFFCC"><?php $tick=mysqli_query($conn,"SELECT `t12:00PM_2:00PM` FROM `".$res."` WHERE `day`=6");$row = mysqli_fetch_row($tick);$ser=$row[0];if($ser){echo '<p>&#9989</p>';}?> </td>
            <td bgcolor="#FFFFCC"><?php $tick=mysqli_query($conn,"SELECT `t3:00PM_5:00PM` FROM `".$res."` WHERE `day`=6");$row = mysqli_fetch_row($tick);$ser=$row[0];if($ser){echo '<p>&#9989</p>';}?></td>
            <td bgcolor="#FFFFCC"><?php $tick=mysqli_query($conn,"SELECT `t5:00PM_7:00PM` FROM `".$res."` WHERE `day`=6");$row = mysqli_fetch_row($tick);$ser=$row[0];if($ser){echo '<p>&#9989</p>';}?></td>
            <td bgcolor="#FFFFCC"><?php $tick=mysqli_query($conn,"SELECT `t7:00PM_9:00PM` FROM `".$res."` WHERE `day`=6");$row = mysqli_fetch_row($tick);$ser=$row[0];if($ser){echo '<p>&#9989</p>';}?></td>
            <td bgcolor="#FFFFCC"><?php $tick=mysqli_query($conn,"SELECT `t10:00PM_12:00AM` FROM `".$res."` WHERE `day`=6");$row = mysqli_fetch_row($tick);$ser=$row[0];if($ser){echo '<p>&#9989</p>';}?></td>
            <td bgcolor="#FFFFCC"><?php $tick=mysqli_query($conn,"SELECT `t12:00AM_2:00AM` FROM `".$res."` WHERE `day`=6");$row = mysqli_fetch_row($tick);$ser=$row[0];if($ser){echo '<p>&#9989</p>';}?></td>
            <td bgcolor="#FFFFCC"><?php $tick=mysqli_query($conn,"SELECT `t2:00AM_4:00AM` FROM `".$res."` WHERE `day`=6");$row = mysqli_fetch_row($tick);$ser=$row[0];if($ser){echo '<p>&#9989</p>';}?></td>
            <td bgcolor="#FFFFCC"><?php $tick=mysqli_query($conn,"SELECT `t4:00AM_6:00AM` FROM `".$res."` WHERE `day`=6");$row = mysqli_fetch_row($tick);$ser=$row[0];if($ser){echo '<p>&#9989</p>';}?></td>
            <td bgcolor="#FFFFCC"><?php $tick=mysqli_query($conn,"SELECT `t6:00AM_8:00AM` FROM `".$res."` WHERE `day`=6");$row = mysqli_fetch_row($tick);$ser=$row[0];if($ser){echo '<p>&#9989</p>';}?></td>
        </tr>
	<br><br>
	</td>
  </tr>
</table>
<br>
<div class="footer"><center>
<form action="experts.php" method="POST"><input type="submit" class="button1 button5" name="back" value="BACK" style=" font-family:tIimes New Roman;">
    </form></center></div>
</BODY>
</HTML>