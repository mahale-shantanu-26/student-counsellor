<!doctype html>
<html>
<head>
<title>Schedule modified
</title>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/home_style.css">
</head>
<body>
<form action = "exp_logout.php"><button class ="button1 button5">LOG OUT </button></form>

<?php
include_once 'dbh.php';
session_start();
if(!isset($_SESSION['exp_email']))
    header("Location: experts.php?Can't go back");
    

$id = $_SESSION['exp_id'];
$res=(string)$id;

$sql="INSERT INTO `".$res."` (`day`) VALUES (1)";           //Monday row created.
$result=$conn->query($sql);


if( isset($_POST["a1-l1"]))                                            //Monday - Morning
{$sql="UPDATE `".$res."` SET `t8:00AM_10:00AM`=1 WHERE `day`=1";
$result=$conn->query($sql);}
else
{$sql="UPDATE `".$res."` SET `t8:00AM_10:00AM`=0 WHERE `day`=1";
$result=$conn->query($sql);}


if( isset($_POST["f1-l2"]))
{$sql="UPDATE `".$res."` SET `t10:00AM_12:00PM`=1 WHERE `day`=1";
$result=$conn->query($sql);}
else
{$sql="UPDATE `".$res."` SET `t10:00AM_12:00PM`=0 WHERE `day`=1";
$result=$conn->query($sql);}


if( isset($_POST["d1-l3"]))
{$sql="UPDATE `".$res."` SET `t12:00PM_2:00PM`=1 WHERE `day`=1";
$result=$conn->query($sql);}
else
{$sql="UPDATE `".$res."` SET `t12:00PM_2:00PM`=0 WHERE `day`=1";
$result=$conn->query($sql);}


if( isset($_POST["tb1-l4"]))
{$sql="UPDATE `".$res."` SET `t3:00PM_5:00PM`=1 WHERE `day`=1";
$result=$conn->query($sql);}
else
{$sql="UPDATE `".$res."` SET `t3:00PM_5:00PM`=0 WHERE `day`=1";
$result=$conn->query($sql);}


if( isset($_POST["tg1-l5"]))
{$sql="UPDATE `".$res."` SET `t5:00PM_7:00PM`=1 WHERE `day`=1";
$result=$conn->query($sql);}
else
{$sql="UPDATE `".$res."` SET `t5:00PM_7:00PM`=0 WHERE `day`=1";
$result=$conn->query($sql);}


if( isset($_POST["l6"]))
{$sql="UPDATE `".$res."` SET `t7:00PM_9:00PM`=1 WHERE `day`=1";
$result=$conn->query($sql);}
else
{$sql="UPDATE `".$res."` SET `t7:00PM_9:00PM`=0 WHERE `day`=1";
    $result=$conn->query($sql);}


if( isset($_POST["a2-l31"]))                                            //Monday - Afternoon
{$sql="UPDATE `".$res."` SET `t10:00PM_12:00AM`=1 WHERE `day`=1";
    $result=$conn->query($sql);}
else
{$sql="UPDATE `".$res."` SET `t10:00PM_12:00AM`=0 WHERE `day`=1";
    $result=$conn->query($sql);}

    
if( isset($_POST["f2-l32"]))
{$sql="UPDATE `".$res."` SET `t12:00AM_2:00AM`=1 WHERE `day`=1";
    $result=$conn->query($sql);}
else
{$sql="UPDATE `".$res."` SET `t12:00AM_2:00AM`=0 WHERE `day`=1";
    $result=$conn->query($sql);}


if( isset($_POST["d2-l33"]))
{$sql="UPDATE `".$res."` SET `t2:00AM_4:00AM`=1 WHERE `day`=1";
    $result=$conn->query($sql);}
else
{$sql="UPDATE `".$res."` SET `t2:00AM_4:00AM`=0 WHERE `day`=1";
    $result=$conn->query($sql);}


if( isset($_POST["tb2-l34"]))
{$sql="UPDATE `".$res."` SET `t4:00AM_6:00AM`=1 WHERE `day`=1";
    $result=$conn->query($sql);}
else
{$sql="UPDATE `".$res."` SET `t4:00AM_6:00AM`=0 WHERE `day`=1";
    $result=$conn->query($sql);}


if( isset($_POST["tg2-l35"]))
{$sql="UPDATE `".$res."` SET `t6:00AM_8:00AM`=1 WHERE `day`=1";
    $result=$conn->query($sql);}
else
{$sql="UPDATE `".$res."` SET `t6:00AM_8:00AM`=0 WHERE `day`=1";
    $result=$conn->query($sql);}





    $sql="INSERT INTO `".$res."` (`day`) VALUES (2)";           //Tuesday row created.
    $result=$conn->query($sql);


if( isset($_POST["b1-l7"]))                                         //Tuesday - Morning
{$sql="UPDATE `".$res."` SET `t8:00AM_10:00AM`=1 WHERE `day`=2";
    $result=$conn->query($sql);}
else
{$sql="UPDATE `".$res."` SET `t8:00AM_10:00AM`=0 WHERE `day`=2";
    $result=$conn->query($sql);}


if( isset($_POST["g1-l8"]))
{$sql="UPDATE `".$res."` SET `t10:00AM_12:00PM`=1 WHERE `day`=2";
    $result=$conn->query($sql);}
else
{$sql="UPDATE `".$res."` SET `t10:00AM_12:00PM`=0 WHERE `day`=2";
    $result=$conn->query($sql);}


if( isset($_POST["e1-l9"]))
{$sql="UPDATE `".$res."` SET `t12:00PM_2:00PM`=1 WHERE `day`=2";
    $result=$conn->query($sql);}
else
{$sql="UPDATE `".$res."` SET `t12:00PM_2:00PM`=0 WHERE `day`=2";
    $result=$conn->query($sql);}


if( isset($_POST["tc1-l10"]))
{$sql="UPDATE `".$res."` SET `t3:00PM_5:00PM`=1 WHERE `day`=2";
    $result=$conn->query($sql);}
else
{$sql="UPDATE `".$res."` SET `t3:00PM_5:00PM`=0 WHERE `day`=2";
    $result=$conn->query($sql);}


if( isset($_POST["taa1-l11"]))
{$sql="UPDATE `".$res."` SET `t5:00PM_7:00PM`=1 WHERE `day`=2";
    $result=$conn->query($sql);}
else
{$sql="UPDATE `".$res."` SET `t5:00PM_7:00PM`=0 WHERE `day`=2";
    $result=$conn->query($sql);}


if( isset($_POST["l12"]))
{$sql="UPDATE `".$res."` SET `t7:00PM_9:00PM`=1 WHERE `day`=2";
    $result=$conn->query($sql);}
else
{$sql="UPDATE `".$res."` SET `t7:00PM_9:00PM`=0 WHERE `day`=2";
    $result=$conn->query($sql);}


if( isset($_POST["b2-l37"]))                                           //Tuesday - Afternoon
{$sql="UPDATE `".$res."` SET `t10:00PM_12:00AM`=1 WHERE `day`=2";
    $result=$conn->query($sql);}
else
{$sql="UPDATE `".$res."` SET `t10:00PM_12:00AM`=0 WHERE `day`=2";
    $result=$conn->query($sql);}


if( isset($_POST["g2-l38"]))
{$sql="UPDATE `".$res."` SET `t12:00AM_2:00AM`=1 WHERE `day`=2";
    $result=$conn->query($sql);}
else
{$sql="UPDATE `".$res."` SET `t12:00AM_2:00AM`=0 WHERE `day`=2";
    $result=$conn->query($sql);}


if( isset($_POST["e2-l39"]))
{$sql="UPDATE `".$res."` SET `t2:00AM_4:00AM`=1 WHERE `day`=2";
    $result=$conn->query($sql);}
else
{$sql="UPDATE `".$res."` SET `t2:00AM_4:00AM`=0 WHERE `day`=2";
    $result=$conn->query($sql);}


if( isset($_POST["tc2-l40"]))
{$sql="UPDATE `".$res."` SET `t4:00AM_6:00AM`=1 WHERE `day`=2";
    $result=$conn->query($sql);}
else
{$sql="UPDATE `".$res."` SET `t4:00AM_6:00AM`=0 WHERE `day`=2";
    $result=$conn->query($sql);}


if( isset($_POST["taa2-l41"]))
{$sql="UPDATE `".$res."` SET `t6:00AM_8:00AM`=1 WHERE `day`=2";
    $result=$conn->query($sql);}
else
{$sql="UPDATE `".$res."` SET `t6:00AM_8:00AM`=0 WHERE `day`=2";
    $result=$conn->query($sql);}





    $sql="INSERT INTO `".$res."` (`day`) VALUES (3)";           //Wednesday row created.
    $result=$conn->query($sql);


if( isset($_POST["c1-l13"]))                                         //Wednesday Morning
{$sql="UPDATE `".$res."` SET `t8:00AM_10:00AM`=1 WHERE `day`=3";
    $result=$conn->query($sql);}
else
{$sql="UPDATE `".$res."` SET `t8:00AM_10:00AM`=0 WHERE `day`=3";
    $result=$conn->query($sql);}


if( isset($_POST["a1-l14"]))
{$sql="UPDATE `".$res."` SET `t10:00AM_12:00PM`=1 WHERE `day`=3";
    $result=$conn->query($sql);}
else
{$sql="UPDATE `".$res."` SET `t10:00AM_12:00PM`=0 WHERE `day`=3";
    $result=$conn->query($sql);}


if( isset($_POST["f1-l15"]))
{$sql="UPDATE `".$res."` SET `t12:00PM_2:00PM`=1 WHERE `day`=3";
    $result=$conn->query($sql);}
else
{$sql="UPDATE `".$res."` SET `t12:00PM_2:00PM`=0 WHERE `day`=3";
    $result=$conn->query($sql);}


if( isset($_POST["td1-l16"]))
{$sql="UPDATE `".$res."` SET `t3:00PM_5:00PM`=1 WHERE `day`=3";
    $result=$conn->query($sql);}
else
{$sql="UPDATE `".$res."` SET `t3:00PM_5:00PM`=0 WHERE `day`=3";
    $result=$conn->query($sql);}


if( isset($_POST["l17"]))
{$sql="UPDATE `".$res."` SET `t5:00PM_7:00PM`=1 WHERE `day`=3";
    $result=$conn->query($sql);}
else
{$sql="UPDATE `".$res."` SET `t5:00PM_7:00PM`=0 WHERE `day`=3";
    $result=$conn->query($sql);}


if( isset($_POST["l18"]))
{$sql="UPDATE `".$res."` SET `t7:00PM_9:00PM`=1 WHERE `day`=3";
    $result=$conn->query($sql);}
else
{$sql="UPDATE `".$res."` SET `t7:00PM_9:00PM`=0 WHERE `day`=3";
    $result=$conn->query($sql);}


if( isset($_POST["c2-l43"]))                                       //Wednesday - Afternoon
{$sql="UPDATE `".$res."` SET `t10:00PM_12:00AM`=1 WHERE `day`=3";
    $result=$conn->query($sql);}
else
{$sql="UPDATE `".$res."` SET `t10:00PM_12:00AM`=0 WHERE `day`=3";
    $result=$conn->query($sql);}


if( isset($_POST["a2-l44"]))
{$sql="UPDATE `".$res."` SET `t12:00AM_2:00AM`=1 WHERE `day`=3";
    $result=$conn->query($sql);}
else
{$sql="UPDATE `".$res."` SET `t12:00AM_2:00AM`=0 WHERE `day`=3";
    $result=$conn->query($sql);}


if( isset($_POST["f2-l45"]))
{$sql="UPDATE `".$res."` SET `t2:00AM_4:00AM`=1 WHERE `day`=3";
    $result=$conn->query($sql);}
else
{$sql="UPDATE `".$res."` SET `t2:00AM_4:00AM`=0 WHERE `day`=3";
    $result=$conn->query($sql);}


if( isset($_POST["td2-l46"]))
{$sql="UPDATE `".$res."` SET `t4:00AM_6:00AM`=1 WHERE `day`=3";
    $result=$conn->query($sql);}
else
{$sql="UPDATE `".$res."` SET `t4:00AM_6:00AM`=0 WHERE `day`=3";
    $result=$conn->query($sql);}


if( isset($_POST["tbb2-l47"]))
{$sql="UPDATE `".$res."` SET `t6:00AM_8:00AM`=1 WHERE `day`=3";
    $result=$conn->query($sql);}
else
{$sql="UPDATE `".$res."` SET `t6:00AM_8:00AM`=0 WHERE `day`=3";
    $result=$conn->query($sql);}





    $sql="INSERT INTO `".$res."` (`day`) VALUES (4)";           //Thursday row created.
    $result=$conn->query($sql);


if( isset($_POST["d1-l19"]))                                        //Thursday - morning
{$sql="UPDATE `".$res."` SET `t8:00AM_10:00AM`=1 WHERE `day`=4";
    $result=$conn->query($sql);}
else
{$sql="UPDATE `".$res."` SET `t8:00AM_10:00AM`=0 WHERE `day`=4";
    $result=$conn->query($sql);}


if( isset($_POST["b1-l20"]))
{$sql="UPDATE `".$res."` SET `t10:00AM_12:00PM`=1 WHERE `day`=4";
    $result=$conn->query($sql);}
else
{$sql="UPDATE `".$res."` SET `t10:00AM_12:00PM`=0 WHERE `day`=4";
    $result=$conn->query($sql);}


if( isset($_POST["g1-l21"]))
{$sql="UPDATE `".$res."` SET `t12:00PM_2:00PM`=1 WHERE `day`=4";
    $result=$conn->query($sql);}
else
{$sql="UPDATE `".$res."` SET `t12:00PM_2:00PM`=0 WHERE `day`=4";
    $result=$conn->query($sql);}


if( isset($_POST["te1-l22"]))
{$sql="UPDATE `".$res."` SET `t3:00PM_5:00PM`=1 WHERE `day`=4";
    $result=$conn->query($sql);}
else
{$sql="UPDATE `".$res."` SET `t3:00PM_5:00PM`=0 WHERE `day`=4";
    $result=$conn->query($sql);}


if( isset($_POST["tcc1-l23"]))
{$sql="UPDATE `".$res."` SET `t5:00PM_7:00PM`=1 WHERE `day`=4";
    $result=$conn->query($sql);}
else
{$sql="UPDATE `".$res."` SET `t5:00PM_7:00PM`=0 WHERE `day`=4";
    $result=$conn->query($sql);}


if( isset($_POST["l24"]))
{$sql="UPDATE `".$res."` SET `t7:00PM_9:00PM`=1 WHERE `day`=4";
    $result=$conn->query($sql);}
else
{$sql="UPDATE `".$res."` SET `t7:00PM_9:00PM`=0 WHERE `day`=4";
    $result=$conn->query($sql);}


if( isset($_POST["d2-l49"]))                                        //Thursday - Afternoon
{$sql="UPDATE `".$res."` SET `t10:00PM_12:00AM`=1 WHERE `day`=4";
    $result=$conn->query($sql);}
else
{$sql="UPDATE `".$res."` SET `t10:00PM_12:00AM`=0 WHERE `day`=4";
    $result=$conn->query($sql);}


if( isset($_POST["b2-l50"]))
{$sql="UPDATE `".$res."` SET `t12:00AM_2:00AM`=1 WHERE `day`=4";
    $result=$conn->query($sql);}
else
{$sql="UPDATE `".$res."` SET `t12:00AM_2:00AM`=0 WHERE `day`=4";
    $result=$conn->query($sql);}


if( isset($_POST["g2-l51"]))
{$sql="UPDATE `".$res."` SET `t2:00AM_4:00AM`=1 WHERE `day`=4";
    $result=$conn->query($sql);}
else
{$sql="UPDATE `".$res."` SET `t2:00AM_4:00AM`=0 WHERE `day`=4";
    $result=$conn->query($sql);}


if( isset($_POST["te2-l52"]))
{$sql="UPDATE `".$res."` SET `t4:00AM_6:00AM`=1 WHERE `day`=4";
    $result=$conn->query($sql);}
else
{$sql="UPDATE `".$res."` SET `t4:00AM_6:00AM`=0 WHERE `day`=4";
    $result=$conn->query($sql);}


if( isset($_POST["tcc2-l53"]))
{$sql="UPDATE `".$res."` SET `t6:00AM_8:00AM`=1 WHERE `day`=4";
    $result=$conn->query($sql);}
else
{$sql="UPDATE `".$res."` SET `t6:00AM_8:00AM`=0 WHERE `day`=4";
    $result=$conn->query($sql);}





    $sql="INSERT INTO `".$res."` (`day`) VALUES (5)";           //Friday row created.
    $result=$conn->query($sql);


if( isset($_POST["e1-l25"]))                                     //Friday - Morning
{$sql="UPDATE `".$res."` SET `t8:00AM_10:00AM`=1 WHERE `day`=5";
    $result=$conn->query($sql);}
else
{$sql="UPDATE `".$res."` SET `t8:00AM_10:00AM`=0 WHERE `day`=5";
    $result=$conn->query($sql);}


if( isset($_POST["c1-l26"]))
{$sql="UPDATE `".$res."` SET `t10:00AM_12:00PM`=1 WHERE `day`=5";
    $result=$conn->query($sql);}
else
{$sql="UPDATE `".$res."` SET `t10:00AM_12:00PM`=0 WHERE `day`=5";
    $result=$conn->query($sql);}


if( isset($_POST["ta1-l27"]))
{$sql="UPDATE `".$res."` SET `t12:00PM_2:00PM`=1 WHERE `day`=5";
    $result=$conn->query($sql);}
else
{$sql="UPDATE `".$res."` SET `t12:00PM_2:00PM`=0 WHERE `day`=5";
    $result=$conn->query($sql);}


if( isset($_POST["tf1-l28"]))
{$sql="UPDATE `".$res."` SET `t3:00PM_5:00PM`=1 WHERE `day`=5";
    $result=$conn->query($sql);}
else
{$sql="UPDATE `".$res."` SET `t3:00PM_5:00PM`=0 WHERE `day`=5";
    $result=$conn->query($sql);}


if( isset($_POST["tdd1-l29"]))
{$sql="UPDATE `".$res."` SET `t5:00PM_7:00PM`=1 WHERE `day`=5";
    $result=$conn->query($sql);}
else
{$sql="UPDATE `".$res."` SET `t5:00PM_7:00PM`=0 WHERE `day`=5";
    $result=$conn->query($sql);}


if( isset($_POST["l30"]))
{$sql="UPDATE `".$res."` SET `t7:00PM_9:00PM`=1 WHERE `day`=5";
    $result=$conn->query($sql);}
else
{$sql="UPDATE `".$res."` SET `t7:00PM_9:00PM`=0 WHERE `day`=5";
    $result=$conn->query($sql);}


if( isset($_POST["e2-l55"]))                                        //Friday - Afternoon
{$sql="UPDATE `".$res."` SET `t10:00PM_12:00AM`=1 WHERE `day`=5";
    $result=$conn->query($sql);}
else
{$sql="UPDATE `".$res."` SET `t10:00PM_12:00AM`=0 WHERE `day`=5";
    $result=$conn->query($sql);}


if( isset($_POST["c2-l56"]))
{$sql="UPDATE `".$res."` SET `t12:00AM_2:00AM`=1 WHERE `day`=5";
    $result=$conn->query($sql);}
else
{$sql="UPDATE `".$res."` SET `t12:00AM_2:00AM`=0 WHERE `day`=5";
    $result=$conn->query($sql);}


if( isset($_POST["ta2-l57"]))
{$sql="UPDATE `".$res."` SET `t2:00AM_4:00AM`=1 WHERE `day`=5";
    $result=$conn->query($sql);}
else
{$sql="UPDATE `".$res."` SET `t2:00AM_4:00AM`=0 WHERE `day`=5";
    $result=$conn->query($sql);}


if( isset($_POST["tf2-l58"]))
{$sql="UPDATE `".$res."` SET `t4:00AM_6:00AM`=1 WHERE `day`=5";
    $result=$conn->query($sql);}
else
{$sql="UPDATE `".$res."` SET `t4:00AM_6:00AM`=0 WHERE `day`=5";
    $result=$conn->query($sql);}


if( isset($_POST["tdd2-l59"]))
{$sql="UPDATE `".$res."` SET `t6:00AM_8:00AM`=1 WHERE `day`=5";
    $result=$conn->query($sql);}
else
{$sql="UPDATE `".$res."` SET `t6:00AM_8:00AM`=0 WHERE `day`=5";
    $result=$conn->query($sql);}





    $sql="INSERT INTO `".$res."` (`day`) VALUES (6)";           //Saturday row created.
    $result=$conn->query($sql);
    
    
if( isset($_POST["x1-l72"]))                                        //Saturday - Morning
{$sql="UPDATE `".$res."` SET `t8:00AM_10:00AM`=1 WHERE `day`=6";
    $result=$conn->query($sql);}
else
{$sql="UPDATE `".$res."` SET `t8:00AM_10:00AM`=0 WHERE `day`=6";
    $result=$conn->query($sql);}


if( isset($_POST["x1-l73"]))
{$sql="UPDATE `".$res."` SET `t10:00AM_12:00PM`=1 WHERE `day`=6";
    $result=$conn->query($sql);}
else
{$sql="UPDATE `".$res."` SET `t10:00AM_12:00PM`=0 WHERE `day`=6";
    $result=$conn->query($sql);}


if( isset($_POST["y1-l74"]))
{$sql="UPDATE `".$res."` SET `t12:00PM_2:00PM`=1 WHERE `day`=6";
    $result=$conn->query($sql);}
else
{$sql="UPDATE `".$res."` SET `t12:00PM_2:00PM`=0 WHERE `day`=6";
    $result=$conn->query($sql);}


if( isset($_POST["y1-l75"]))
{$sql="UPDATE `".$res."` SET `t3:00PM_5:00PM`=1 WHERE `day`=6";
    $result=$conn->query($sql);}
else
{$sql="UPDATE `".$res."` SET `t3:00PM_5:00PM`=0 WHERE `day`=6";
    $result=$conn->query($sql);}


if( isset($_POST["x2-l76"]))
{$sql="UPDATE `".$res."` SET `t5:00PM_7:00PM`=1 WHERE `day`=6";
    $result=$conn->query($sql);}
else
{$sql="UPDATE `".$res."` SET `t5:00PM_7:00PM`=0 WHERE `day`=6";
    $result=$conn->query($sql);}


if( isset($_POST["y2-l77"]))
{$sql="UPDATE `".$res."` SET `t7:00PM_9:00PM`=1 WHERE `day`=6";
    $result=$conn->query($sql);}
else
{$sql="UPDATE `".$res."` SET `t7:00PM_9:00PM`=0 WHERE `day`=6";
    $result=$conn->query($sql);}


if( isset($_POST["z1-l78"]))                                         //Saturday - Afternoon
{$sql="UPDATE `".$res."` SET `t10:00PM_12:00AM`=1 WHERE `day`=6";
    $result=$conn->query($sql);}
else
{$sql="UPDATE `".$res."` SET `t10:00PM_12:00AM`=0 WHERE `day`=6";
    $result=$conn->query($sql);}


if( isset($_POST["z2-l79"]))
{$sql="UPDATE `".$res."` SET `t12:00AM_2:00AM`=1 WHERE `day`=6";
    $result=$conn->query($sql);}
else
{$sql="UPDATE `".$res."` SET `t12:00AM_2:00AM`=0 WHERE `day`=6";
    $result=$conn->query($sql);}


if( isset($_POST["z3-l80"]))
{$sql="UPDATE `".$res."` SET `t2:00AM_4:00AM`=1 WHERE `day`=6";
    $result=$conn->query($sql);}
else
{$sql="UPDATE `".$res."` SET `t2:00AM_4:00AM`=0 WHERE `day`=6";
    $result=$conn->query($sql);}


if( isset($_POST["z3-l81"]))
{$sql="UPDATE `".$res."` SET `t4:00AM_6:00AM`=1 WHERE `day`=6";
    $result=$conn->query($sql);}
else
{$sql="UPDATE `".$res."` SET `t4:00AM_6:00AM`=0 WHERE `day`=6";
    $result=$conn->query($sql);}


if( isset($_POST["l82"]))
{$sql="UPDATE `".$res."` SET `t6:00AM_8:00AM`=1 WHERE `day`=6";
    $result=$conn->query($sql);}
else
{$sql="UPDATE `".$res."` SET `t6:00AM_8:00AM`=0 WHERE `day`=6";
    $result=$conn->query($sql);}



  
?>
<h1 style="font-family:cambria;"><center>Your schedule has been updated sucessfully!</center></h1>

<form action="expert_login.php" method="POST">
<input type="submit" class="button1 button5" name="back" value="BACK">
</form>
</body>
</html>