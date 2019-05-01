<?php
include 'dbh.php';
session_start();
if(!isset($_SESSION['exp_email']))
    header("Location: experts.php?Can't go back");

$id = $_SESSION['exp_id'];
$res=(string)$id;
?>

<!doctype html>
<html>
<head>
<title>Modify</title>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/home_style.css">
</head>
<body>
<form action = "exp_logout.php"><button class ="button1 button5">LOG OUT </button></form>

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
<div class="footer">
<form action="expert_login.php" method="POST"><input type="submit" class="button button1" name="back" value="BACK" style=" font-family:tIimes New Roman;">
    </form></div>
</BODY>
</HTML>