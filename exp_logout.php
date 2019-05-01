<?php
include 'dbh.php';
session_start();
$id=$_SESSION['exp_id'];
$sql="UPDATE `expert` SET status ='offline' WHERE cid = '$id'";
$result=$conn->query($sql);

session_unset();
session_destroy();
header("Location: experts.php?logout=success");

?>