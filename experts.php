<!doctype html>
<html>
<head>
<title>Experts</title>

<link href='https://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://s3-us-west-2.amazonaws.com/s.cdpn.io/148866/reset.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/style1.css">
<link rel="stylesheet" href="css/experts_style.css">


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script> 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="js/index.js"></script>
<script src="js/elogin.js"></script>
<script src="js/signup.js"></script>
<script src="js/login.js"></script>


<style>
.bg-img {
    width: 100%;
  min-height: 700px;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}
</style>
</head>
<body>
<a href="home.php"><img src='images/logos.jpg' height=79 width=697.5></a>&nbsp;&nbsp;&nbsp;&nbsp;


<nav class="main-nav">
  <a class="button1 button5" href="about.php" style="position:relative;right: 260px;top: 10px;">ABOUT</a>
  <a class="button1 button5" href="experts.php" style="position:relative;right: 250px;top: 10px;">EXPERTS</a>
	<ul>
    <!-- inser more links here -->
		<li><a class="cd-signin button5" href="#0" style="position:relative;right: -15px;top: -62px;">SIGN IN</a></li>
    <li><a class="cd-signup button5" href="#0" style="position:relative;right: -5px;top: -62px;">SIGN UP</a></li>
    <br>
  </ul>
</nav>

<hr width=1325 style="position:relative;top: -50px;">

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



<div class = "bg-img">
<?php
include_once "dbh.php";
$r="SELECT * FROM expert";
$rr=mysqli_query($conn,$r);
while($row = mysqli_fetch_assoc($rr)){
    $ii=$row["cid"];
    $pp=$row["profile_pic"];
    $nn=$row["name"];
    $ee=$row["email"];
    $ll=$row["lang"];
    $ex=$row["expertise"];
    $dd=$row["designation"];
	echo "<div class=card>";
    echo "<img src = '".$pp."' style='width:250px;height:150px;'>";
    echo "<br><br>
    <div style='font-size:28px;font-weight:bold; font-family: Cambria;text-align: center;'>".$nn."</div>
    <div style='font-size:23px;font-weight:bold; font-family: Cambria; color:grey;text-align: center;'>".$dd."</div><br>
    <div style='font-size:16px; font-family: Cambria; '>               Email: ".$ee."</div>
    <div style='font-size:16px;
     font-family: Cambria; '>           Languages: ".$ll."</div><br>
    <button class='buttontu button5' id='".$ii."' onClick='reply_click(this.id)'>View Schedule</button>
    <br></div>";
  }
?>
</div>

<div class="footer">
  <br><br><br>
  <h1 style='font-size:40px;font-weight:bold; font-family: Adobe Arabic;float:left;position:relative; left: 50px;'>Experts Sign In</h1>
  <br><br>
  <hr width=550px style="position: relative; float: left; top: 20px;left:-180px;">
  <form method="post" class="container1" action="do_login.php" onsubmit="return do_elogin();">
      <input type="text" placeholder="Email" id="email2" style="font-family: Calibri;font-size:18px;">
      <input type="password" placeholder="Password" id="pswd2" style="font-family: Calibri;font-size:18px;">
      <input type="checkbox" onclick="myFunctionshow()">Show Password<br><br>
      <input type="submit" class="buttonx button5" id="submityo" value="SIGN IN">
  </form>
  <br><br>
  <h1 style='font-size:40px;font-weight:bold; font-family: Adobe Arabic;float:left;position:relative; left: 50px;'>Forgot Password?</h1>
  <br><br>
  <hr width=550px style="position: relative; float: left; top: 20px;left:-180px;">
  <form method="post" class="container1" action="expert_forgot.php">
      <input type="text" placeholder="Email" name="emailxp" style="font-family: Calibri;font-size:18px;">
      <button class="buttonx button5" id="submityoko">GET PASSWORD</button>
  </form>
  </div>
  <br><br>
<script>
function myFunctionshow() {
  var x = document.getElementById("pswd2");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}

function reply_click(val)
{
    var javascriptVariable = val;
  window.location.href = "view2.php?id=" + javascriptVariable; 
}
</script>

</body>
</html>