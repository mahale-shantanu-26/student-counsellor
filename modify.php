<?php
include_once 'dbh.php';
session_start();
if(!isset($_SESSION['exp_email']))
	header("Location: experts.php?Can't go back");
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
<form action=modified.php method="POST">

<table align=center cellspacing=0 cellpadding=2 border="1" width="95%" bordercolor="#000000">
		
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
		    <td bgcolor="#FFFFCC"><input type="checkbox" name="a1-l1" value="1"></td>
		    <td bgcolor="#FFFFCC"><input type="checkbox"  name="f1-l2" value="1"></td>
		    <td bgcolor="#FFFFCC"><input type="checkbox"  name="d1-l3" value="1"></td>
            <td bgcolor="#FFFFCC"><input type="checkbox"  name="tb1-l4" value="1"></td>
            <td bgcolor="#FFFFCC"><input type="checkbox"  name="tg1-l5" value="1"></td>
            <td bgcolor="#FFFFCC"><input type="checkbox"  name="l6" value="1"></td>
            <td bgcolor="#FFFFCC"><input type="checkbox"  name="a2-l31" value="1"></td>
            <td bgcolor="#FFFFCC"><input type="checkbox"  name="f2-l32" value="1"></td>
            <td bgcolor="#FFFFCC"><input type="checkbox"  name="d2-l33" value="1"></td>
            <td bgcolor="#FFFFCC"><input type="checkbox"  name="tb2-l34" value="1"></td>
            <td bgcolor="#FFFFCC"><input type="checkbox"  name="tg2-l35" value="1"></td>
        </tr>
		  
		<tr align=center height="25">
		    <td bgcolor="#CCCCFF"><b>TUE</b></td>
		    <td bgcolor="#FFFFCC"><input type="checkbox"  name="b1-l7" value="1"></td>
		    <td bgcolor="#FFFFCC"><input type="checkbox"  name="g1-l8" value="1"></td>
		    <td bgcolor="#FFFFCC"><input type="checkbox"  name="e1-l9" value="1"></td>
            <td bgcolor="#FFFFCC"><input type="checkbox"  name="tc1-l10" value="1"></td>
            <td bgcolor="#FFFFCC"><input type="checkbox"  name="taa1-l11" value="1"></td>
            <td bgcolor="#FFFFCC"><input type="checkbox"  name="l12" value="1"></td>
            <td bgcolor="#FFFFCC"><input type="checkbox"  name="b2-l37" value="1"></td>
            <td bgcolor="#FFFFCC"><input type="checkbox"  name="g2-l38" value="1"></td>
            <td bgcolor="#FFFFCC"><input type="checkbox"  name="e2-l39" value="1"></td>
            <td bgcolor="#FFFFCC"><input type="checkbox"  name="tc2-l40" value="1"></td>
            <td bgcolor="#FFFFCC"><input type="checkbox"  name="taa2-l41" value="1"></td>
        </tr>
		
		<tr align=center height="25">
		    <td bgcolor="#CCCCFF"><b>WED</b></td>
		    <td bgcolor="#FFFFCC"><input type="checkbox"  name="c1-l13" value="1"></td>
		    <td bgcolor="#FFFFCC"><input type="checkbox"  name="a1-l14" value="1"></td>
		    <td bgcolor="#FFFFCC"><input type="checkbox"  name="f1-l15" value="1"></td>
            <td bgcolor="#FFFFCC"><input type="checkbox"  name="td1-l16" value="1"></td>
            <td bgcolor="#FFFFCC"><input type="checkbox"  name="l17" value="1"></td>
            <td bgcolor="#FFFFCC"><input type="checkbox"  name="l18" value="1"></td>
            <td bgcolor="#FFFFCC"><input type="checkbox"  name="c2-l43" value="1"></td>
            <td bgcolor="#FFFFCC"><input type="checkbox"  name="a2-l44" value="1"></td>
            <td bgcolor="#FFFFCC"><input type="checkbox"  name="f2-l45" value="1"></td>
            <td bgcolor="#FFFFCC"><input type="checkbox"  name="td2-l46" value="1"></td>
            <td bgcolor="#FFFFCC"><input type="checkbox"  name="tbb2-l47" value="1"></td>
        </tr>
		
		<tr align=center height="25">
		    <td bgcolor="#CCCCFF"><b>THU</b></td>
		    <td bgcolor="#FFFFCC"><input type="checkbox"  name="d1-l19" value="1"></td>
		    <td bgcolor="#FFFFCC"><input type="checkbox"  name="b1-l20" value="1"></td>
		    <td bgcolor="#FFFFCC"><input type="checkbox"  name="g1-l21" value="1"></td>
            <td bgcolor="#FFFFCC"><input type="checkbox"  name="te1-l22" value="1"></td>
            <td bgcolor="#FFFFCC"><input type="checkbox"  name="tcc1-l23" value="1"></td>
            <td bgcolor="#FFFFCC"><input type="checkbox"  name="l24" value="VALUE1"></td>
            <td bgcolor="#FFFFCC"><input type="checkbox"  name="d2-l49" value="1"></td>
            <td bgcolor="#FFFFCC"><input type="checkbox"  name="b2-l50" value="1"></td>
            <td bgcolor="#FFFFCC"><input type="checkbox"  name="g2-l51" value="1"></td>
            <td bgcolor="#FFFFCC"><input type="checkbox"  name="te2-l52" value="1"></td>
            <td bgcolor="#FFFFCC"><input type="checkbox"  name="tcc2-l53" value="1"></td>
        </tr>
		
		<tr align=center height="25">
		    <td bgcolor="#CCCCFF"><b>FRI</td>
		    <td bgcolor="#FFFFCC"><input type="checkbox"  name="e1-l25" value="1"></td>
		    <td bgcolor="#FFFFCC"><input type="checkbox"  name="c1-l26" value="1"></td>
		    <td bgcolor="#FFFFCC"><input type="checkbox"  name="ta1-l27" value="1"></td>
            <td bgcolor="#FFFFCC"><input type="checkbox"  name="tf1-l28" value="1"></td>
            <td bgcolor="#FFFFCC"><input type="checkbox"  name="tdd1-l29" value="1"></td>
            <td bgcolor="#FFFFCC"><input type="checkbox"  name="l30" value="VALUE1"></td>
            <td bgcolor="#FFFFCC"><input type="checkbox"  name="e2-l55" value="1"></td>
            <td bgcolor="#FFFFCC"><input type="checkbox"  name="c2-l56" value="1"></td>
            <td bgcolor="#FFFFCC"><input type="checkbox"  name="ta2-l57" value="1"></td>
            <td bgcolor="#FFFFCC"><input type="checkbox"  name="tf2-l58" value="1"></td>
            <td bgcolor="#FFFFCC"><input type="checkbox"  name="tdd2-l59" value="1"></td>
        </tr>
		
		<tr align=center height="25">
		    <td bgcolor="#CCCCFF"><b>SAT</b></td>
		    <td bgcolor="#FFFFCC"><input type="checkbox"  name="x1-l72" value="1"></td>
		    <td bgcolor="#FFFFCC"><input type="checkbox"  name="x1-l73" value="1"></td>
		    <td bgcolor="#FFFFCC"><input type="checkbox"  name="y1-l74" value="1"></td>
            <td bgcolor="#FFFFCC"><input type="checkbox"  name="y1-l75" value="1"></td>
            <td bgcolor="#FFFFCC"><input type="checkbox"  name="x2-l76" value="1"></td>
            <td bgcolor="#FFFFCC"><input type="checkbox"  name="y2-l77" value="1"></td>
            <td bgcolor="#FFFFCC"><input type="checkbox"  name="z1-l78" value="1"></td>
            <td bgcolor="#FFFFCC"><input type="checkbox"  name="z2-l79" value="1"></td>
            <td bgcolor="#FFFFCC"><input type="checkbox"  name="z3-l80" value="1"></td>
            <td bgcolor="#FFFFCC"><input type="checkbox"  name="z3-l81" value="1"></td>
            <td bgcolor="#FFFFCC"><input type="checkbox"  name="l82" value="1"></td>
            
        </tr>
	<br><br>
	</td>
  </tr>
</table>
<br>

<input type="submit" class="button1 button5" name="submitter" value="SAVE">

</form>



</BODY>
</HTML>