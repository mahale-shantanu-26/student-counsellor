<?php
include_once 'dbh.php';
session_start();
if(!isset($_SESSION['exp_email']))
	header("Location: experts.php?Can't go back");
?>
<!doctype html>
<html>
<head>
<title>Welcome Expert!</title>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/home_style.css">
<link rel="stylesheet" href="css/body1.css">
<style>
textarea {
  position: fixed;
   resize: none;
   width: 200px;
   padding: 10px;
   font-size: 20px;
   left: 30px;
   bottom: 90px;
   height: 200px;  
}

</style>
</head>
<body><br>
<a href="expert_login.php"><img src='images/logos.jpg' height=79 width=697.5></a>
<a href="exp_logout.php" class="button1 button5" style="position:relative;right: -450px;top: -35px;">LOGOUT</a>
<a href="exp_change_password.php" class="button1 button5" style="position:relative;right: -75px;top: -35px;">CHANGE PASSWORD</a>
<a href="exp_profile.php" class="button1 button5" style="position:relative;right: 300px;top: -35px;">PROFILE</a>

<hr><br>
<div class="row">

<div class="leftcolumn">
  <div class="card">
<a href="exp_public_chat.php">PUBLIC CHAT</a><br><br>
<a href="exp_private_chat.php">PRIVATE CHAT</a><br><br>
<a href="exp_public_share.php"><b>PUBLIC SHARE</b></a><br><br>
  </div>
<br><br>

  <form method="post" action="exp_public_share_images.php" enctype="multipart/form-data">
  <input type="file" name="fileToUpload" id="fileToUpload">
<input type="submit" class="button1 button5" style="position: fixed;left: 70px;bottom: 25px;" value="SEND">
</form>

</div>


<div class="rightcolumn">
<?php
include 'dbh.php';
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
// Check file size
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "<center><h1>Sorry, only JPG, JPEG, PNG & GIF files are allowed.</h1><br>";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "<h1>Sorry, your file was not uploaded.</h1></center>";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file))
    {
        $name=$_SESSION["exp_name"];
        $sql="INSERT INTO public_share (files,sender) values ('$target_file','$name');";
        mysqli_query($conn,$sql);
        header("Location: exp_public_share.php");
    }
    else {
        header("Location: exp_public_share.php");
    }
                   
}
?>
</div>



</div>
</body>
</html>